<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Folder;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\ToSweetAlert;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $data = $request->validate([
            'name' => 'required',
            'category_id' => 'required'
        ]);
        $data['slug'] = Str::slug($data['name']);

        // validasi nama yang sama di categor yang sama
        $same = Folder::where('name', $request['name'])->where('category_id', $data['category_id'])->get()->count();
        // $folder = Folder::where('category_id', $request['category_id'])->get()->count();

        if ($same > 0) {
            alert()->error('Folder name already exists', 'please create another folder name');
            return back();
        }

        try {
            // buat database trasection
            DB::beginTransaction();

            // lakukan proses tambah data
            Folder::create($data);

            DB::commit();
            toast('Folder Added Successfully...', 'success');
            return back();
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
    public function show(string $slug)
    {

        if (auth()->user()->hasRole('admin')) {
            return view('pages.admin.folder.show', [
                "folder" => Folder::where('slug', $slug)->get()->first()
            ]);
        } else {
            return view('pages.user.folder.show', [
                "folder" => Folder::where('slug', $slug)->get()->first()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        $data['category_id'] = Folder::find($id)->category_id;
        $data['slug'] = Str::slug($data['name']);


        // validasi nama yang sama di categor yang sama
        $same = Folder::where('name', $request['name'])->where('category_id', $data['category_id'])->get()->count();
        // $folder = Folder::where('category_id', $request['category_id'])->get()->count();

        if ($same > 0) {
            alert()->error('Folder name already exists', 'please create another folder name');
            return back();
        }

        try {
            // buat database trasection
            DB::beginTransaction();

            // lakukan proses tambah data
            Folder::find($id)->update($data);

            DB::commit();
            toast('Folder Update Successfully...', 'success');
            return back();
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
    public function destroy($id)
    {
        Folder::find($id)->delete();
        Toast('Folder Berhasil di hapus', 'success');
        return back();
    }
}
