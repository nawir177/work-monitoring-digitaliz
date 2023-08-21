<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Employe;
use Livewire\Component;
use Livewire\WithPagination;
use App\Mail\SendEmailToUser;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class UserVerificationTable extends Component
{
    use WithPagination;

    public $search;
    public $role;

    public function updatingSearch()
    {
        $this->resetPage('commentsPage');
    }

    public function render()
    {
        return view(
            'livewire.user-verification-table',
            [
                "employees" => Employe::where('verified', 0)->where('name', 'like', '%' . $this->search . '%')->latest()->with('user')->paginate(6),
            ]
        );
    }

    public function verified($id)
    {
        $data = Employe::find($id);
        $data->update([
            "verified" => true,
            "hire_date"=>now()
        ]);

        $userEmail = $data->user->email;
        $user = User::where('id',$data->user_id)->get()->first();
        
        $user->assignRole($this->role);


        // sendmessage

        $subject = 'Subject Email Anda';
        $content = 'Konten email yang ingin Anda kirimkan kepada pengguna.';

        Mail::to($userEmail)->send(new SendEmailToUser($subject, $content));


        Alert::toast('User Verified Successfully', 'success');
        return back();
    }
}
