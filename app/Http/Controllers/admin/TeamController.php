<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\Team;
use App\Models\User;
use App\Models\Project;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\WorkPermit;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.team.index', [
            "teams" => Team::latest()->with(['user', 'project'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.team.create', [
            "projects" => Project::latest()->get(),
            "users" => User::latest()->get(),
            "route" => route('admin.team.store')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        toast('Team Added Successfully...', 'success');
        return back();
        $data = $request->validate([
            'name' => 'required',
            'project_id' => 'required|unique:teams',
            'user_id' => 'required',
            'members' => 'required',

        ]);

        try {
            DB::beginTransaction();
            Team::create([
                'name' => $data['name'],
                'user_id' => $data['user_id'],
                'project_id' => $data['project_id']
            ]);

            DB::commit();
            $team_id = Team::latest()->get()->first()->id;
            $count = count($request->members);
            for ($i = 0; $i < $count; $i++) {
                TeamMember::create([
                    'team_id' => $team_id,
                    'user_id' => $request->members[$i],
                ]);
            }

            DB::commit();


            toast('Team Added Successfully...', 'success');
            return redirect()->route('admin.team.index');
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
        return view('pages.admin.team.show', [
            "team" => Team::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        $userTeamMember = TeamMember::where('team_id', $id)->select('user_id');
        return view('pages.admin.team.create', [
            "projects" => Project::latest()->get(),
            "old" => Team::find($id),
            "users" => User::latest()->get(),
            "route" => route('admin.team.update', $id),
            "teamMember" => teamMember::where('team_id', $id)->get(),
            'userNotTeam' => user::whereNotIn('id', $userTeamMember)->get()

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $data = $request->validate([
            'name' => 'required',
            'project_id' => 'required',
            'user_id' => 'required',
            'members' => 'required',

        ]);

        try {
            DB::beginTransaction();
            Team::find($id)->update([
                'name' => $data['name'],
                'user_id' => $data['user_id'],
                'project_id' => $data['project_id']
            ]);


            $count = count($request->members);
            TeamMember::where('team_id', $id)->delete();
            for ($i = 0; $i < $count; $i++) {
                TeamMember::create([
                    'team_id' => $id,
                    'user_id' => $request->members[$i],
                ]);
            }

            DB::commit();


            toast('Team Added Successfully...', 'success');
            return redirect()->route('admin.team.index');
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
        //
    }
}
