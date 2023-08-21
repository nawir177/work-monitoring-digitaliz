<?php

namespace App\Http\Controllers;

use App\Models\TesCoding;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class TesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tes-coding.index', [
            "data" => TesCoding::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()


    {
        return view('tes-coding.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        TesCoding::create([
            'data1' => $request['data1'],
            'data2' => $request['data2'],
            'data3' => $request['data3'],
        ]);

        toast('data berhasil di simpan', 'success', 'success');
        return redirect()->route('tes-coding.index');
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
    public function edit($id)
    {
        return view('tes-coding.edit', [
            "data" => TesCoding::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        TesCoding::find($id)->update([
            'data1' => $request['data1'],
            'data2' => $request['data2'],
            'data3' => $request['data3'],
        ]);

        toast('data berhasil di update', 'success', 'success');
        return redirect()->route('tes-coding.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TesCoding::find($id)->delete();
        toast('data berhasil di hapus', 'success', 'success');
        return back();
    }

 
}
