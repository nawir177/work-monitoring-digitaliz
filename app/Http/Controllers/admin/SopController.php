<?php

namespace App\Http\Controllers\admin;

use App\Models\Sop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SopController extends Controller
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
    public function create_data($id)
    {
        return view('pages.admin.sop.form',[
            "id_team"=>$id,
            'route'=>route('admin.sop.store')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'team_id'=>'required',
            'content'=>'required',
        ]);

        $data['time'] = now();

        try {
            DB::beginTransaction();


            Sop::create($data);
            DB::commit();
            toast('SOP added Successfully...', 'success');
            return redirect()->route('admin.sop.show',$data['team_id']);

        } catch (\Throwable $th) {
            //throw $th;
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
        return view('pages.admin.SOP.index', [
            'sop' => Sop::where('team_id', $id)->get()->first(),
            'team_id'=>$id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('pages.admin.sop.form', [
            "id_team" => $id,
            'route' => route('admin.sop.update',$id),
            'old'=>Sop::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'team_id' => 'required',
            'content' => 'required',
        ]);

        $data['time'] = now();

        try {
            DB::beginTransaction();

            Sop::find($id)->update($data);


            DB::commit();
            toast('SOP Updated Successfully...', 'success');
            return redirect()->route('admin.sop.show', $data['team_id']);
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
