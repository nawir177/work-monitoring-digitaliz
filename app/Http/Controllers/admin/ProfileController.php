<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Employe;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = auth()->user()->id;
        return view('pages.admin.profile.index', [
            "profile" => User::find($id)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        return view('pages.admin.profile.form', [
            "old" => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {

        $data = $request->validate([
            'username'=>'required',
            'name'=>'required',
            'gender'=>'required',
            'email'=>'required',
            'phone'=>'nullable',
            'place_birth'=>'nullable',
            'date_birth'=>'nullable',
            'address'=>'nullable'
        ]);

        $user = User::find($id);

        try {
            DB::beginTransaction();
            User::find($id)->update([
                'username'=>$data['username'],
                'email'=>$data['email']
            ]);

            // update gambar
            if ($request->has('img')) {
                $user->clearMediaCollection('profile');
                $user->addMediaFromRequest('img')
                    ->toMediaCollection('profile');
            }

            Employe::where('user_id',$id)->update([
                'name'=>$data['name'],
                'gender'=>$data['gender'],
                'phone'=>$data['phone'],
                'date_birth'=>$data['date_birth'],
                'place_birth'=>$data['place_birth'],
                'address'=>$data['address']
            ]);



            DB::commit();
            toast('Profile Updated Successfully...', 'success');
            return redirect()->route('admin.profile.index');

        } catch (\Throwable $th) {
            //throw $th;
            !app()->isProduction()
                ? toast($th->getMessage(), 'error')
                : toast('Terjadi kesalahan pada server, coba lagi', 'error');

            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
