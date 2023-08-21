<?php

namespace App\Http\Controllers;

use App\Models\Sop;
use App\Models\Team;
use App\Models\Project;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.user.project.index');
    }

    public function myProject(){
    
        return view('pages.user.project.my-project',[
            'teamMembers'=>TeamMember::where('user_id', auth()->user()->id)->with(['user','team'])->get()
        ]);
    }

    public function myProjectShow($id){
        return view('pages.user.project.show-my-team',[
            "team" => Team::find($id)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function myProjectSop($id)
    {
        return view('pages.user.project.sop-project', [
            'sop' => Sop::where('team_id', $id)->get()->first(),
            'team_id' => $id
        ]);
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
         return view('pages.user.project.show',[
            "project"=>Project::find($id)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
