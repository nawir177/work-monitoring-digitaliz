<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Employe;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;


class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.employe.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.employe.form', [
            "route" => route('admin.employe.store'),
            "clients" => Employe::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        alert()->success("data berhasil di simpan");
        return back();
        $data = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string'],
            'position' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        try {
            DB::beginTransaction();


            $user = User::create([
                'username' => $data['username'],
                'password' => Hash::make($data['password']),
                'email' => $data['email'],
            ]);

            $user->assignRole($data['role']);


            Employe::create([
                "user_id" =>  User::latest()->first()->id,
                "name" => $data['name'],
                "gender" => $data['gender'],
                "position" => $data['position'],
                "verified" => true
            ]);


            DB::commit();
            toast('Data added successfully !', 'success');
            return redirect()->route('admin.employe.index');
        } catch (\Throwable $th) {

            !app()->isProduction()
                ? toast($th->getMessage(), 'error')
                : toast('Terjadi kesalahan pada server, coba lagi', 'error');

            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('pages.admin.employe.show', [
            "profile" => User::find($id)

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('pages.admin.employe.form', [
            "route" => route('admin.employe.update', $id),
            "old" => Employe::with('user')->where('user_id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string'],
            'position' => 'required',
            'gender' => 'required',
            'password' => ['confirmed', 'nullable'],
        ]);

        try {
            DB::beginTransaction();

            User::find($id)->update([
                'username' => $data['username'],
                'password' => Hash::make($data['password']),
            ]);
            Employe::where('user_id', $id)->first()->update([
                "name" => $data['name'],
                "gender" => $data['gender'],
                "position" => $data['position']
            ]);

            DB::commit();
            toast('Data updated successfully !', 'success');
            return redirect()->route('admin.employe.index');
        } catch (\Throwable $th) {

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
        $data = User::find($id);
        // $userRole =  $data->hasAllRoles(Role::all());
        $data->removeRole('karyawan');
        $data->delete();
        toast("Data deleted successfully", "success");
        return back();
    }
}
