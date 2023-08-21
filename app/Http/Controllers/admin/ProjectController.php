<?php

namespace App\Http\Controllers\admin;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.project.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.project.form', [
            "route" => route('admin.project.store'),
            "clients"=>Client::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name"=>"required",
            "client_id"=>"required",
            "type"=>"required",
            "frontend"=>"required",
            "backend"=>"required",
            "start_date"=>"required",
            "end_date"=>"required",
            "description"=>"required",
        ]);

        Project::create($data);
        toast('Data added successfully !', 'success');
        return redirect()->route('admin.project.index');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('pages.admin.project.show',[
            "project"=>Project::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('pages.admin.project.form', [
            "route" => route('admin.project.update', $id),
            "old" => Project::find($id),
            "clients"=>Client::latest()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $data = $request->validate([
            "name" => "required",
            "client_id" => "required",
            "type" => "required",
            "frontend" => "required",
            "backend" => "required",
            "start_date" => "required",
            "end_date" => "required",
            "description" => "required",
        ]);

        Project::find($id)->update($data);
        toast('Data updated successfully !', 'success');
        return redirect()->route('admin.project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Project::find($id);
        $client->delete();
        toast("Data deleted successfully", "success");
        return back();
    }
}
