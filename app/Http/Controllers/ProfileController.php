<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employe;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

    public function index()
    {
        return view('pages.user.profile.form', [
            "old" => User::find(auth()->user()->id)
        ]);
    }

    public function edit(): View
    {
        return view('pages.user.profile.index', [
            "profile" => User::find(auth()->user()->id)
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
    $id = auth()->user()->id;

        $data = $request->validate([
            'username' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'phone' => 'nullable',
            'place_birth' => 'nullable',
            'date_birth' => 'nullable',
            'address' => 'nullable'
        ]);

        $user = User::find($id);

        try {
            DB::beginTransaction();
            User::find($id)->update([
                'username' => $data['username'],
                'email' => $data['email']
            ]);

            // update gambar
            if ($request->has('img')) {
                $user->clearMediaCollection('profile');
                $user->addMediaFromRequest('img')
                ->toMediaCollection('profile');
            }

            Employe::where('user_id', $id)->update([
                'name' => $data['name'],
                'gender' => $data['gender'],
                'phone' => $data['phone'],
                'date_birth' => $data['date_birth'],
                'place_birth' => $data['place_birth'],
                'address' => $data['address']
            ]);



            DB::commit();
            toast('Profile Updated Successfully...', 'success');
            return redirect()->route('profile.edit');
        } catch (\Throwable $th) {
            //throw $th;
            !app()->isProduction()
                ? toast($th->getMessage(), 'error')
                : toast('Terjadi kesalahan pada server, coba lagi', 'error');

            return back()->withInput();
        }
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
