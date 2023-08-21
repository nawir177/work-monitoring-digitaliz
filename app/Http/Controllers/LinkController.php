<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
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
        // validasi data
        $data = $request->validate([
            'folder_id' => 'required',
            'user_id' => 'required',
            'name' => 'required',
            'value' => 'required',
            'description' => 'required'
        ]);

        try {
            DB::beginTransaction();
            Link::create($data);
            DB::commit();

            $link_id = Link::latest()->get()->first()->id;
            Activity::create([
                'user_id' => $data['user_id'],
                'link_id' => $link_id,
                'value' => 'Melakukan penambahan data Link dengan nama ' . $data['name']
            ]);
            DB::commit();
            toast('Link Added Successfully...', 'success');
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
    public function show(int $id)
    {
        return view('pages.user.folder.show-link', [
            'link' => Link::find($id)
        ]);
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
        // validasi data
        $data = $request->validate([
            'name' => 'required',
            'value' => 'required',
            'description' => 'required'
        ]);

        $data['user_id'] = Link::find($id)->user_id;

        try {
            DB::beginTransaction();
            Link::find($id)->update($data);

            DB::commit();

            Activity::create([
                'user_id' => $data['user_id'],
                'link_id' => $id,
                'value' => 'Melakukan Perubahan pada data Link dengan nama ' . $data['name']
            ]);
            DB::commit();
            toast('Link Updated Successfully...', 'success');
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
    public function destroy(int $id)
    {
        $data = Link::find($id);
        $data->delete();

        toast('Link Deleted Successfully...', 'success');
        return back();
    }
}
