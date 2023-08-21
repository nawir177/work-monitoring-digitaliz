<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\Team;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        foreach ($request->task as $value) {
            Task::create([
                "name" => $value,
                "project_id" => $request->project_id,
            ]);
        }
        return back()->with('succes', 'Task Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('pages.admin.task.index', [
            "project" => Project::find($id),
           
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
    public function update(Request $request, string $id)
    {
        Task::where('project_id', $request->project_id)->delete();

        foreach ($request->task as $value) {
            Task::create([
                "name" => $value,
                "project_id" => $request->project_id,
                "value" => false
            ]);
        }
        toast("Task Project Updated Successfully","success");
        return back();

    }


    public function taskAction(Request $request){
        $id = $request->project_id;
        $project = Project::where('id', $id)->first();
        $totalTask = Task::where('project_id', $id)->count();

        // clean taskProject
        Task::where('project_id', $project->id)->update([
            "status" => 0
        ]);

        $doneTask = Task::whereIn('id', $request->task)->update([
            "status" => 1
        ]);

        $progres = ($doneTask / $totalTask) * 100;
        Project::find($id)->update([
            "progres" => $progres
        ]);

        toast("Task Project Updated Successfully", "success");
        return back();
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
