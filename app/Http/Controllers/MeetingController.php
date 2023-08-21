<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Meeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function create_data($id)
    {

    $leader = Team::find($id)->user_id;
    if(auth()->user()->id !== $leader){
        return redirect()->route('meeting.show',$id);
    }
        return view('pages.user.meeting.form', [

            'route' => route('meeting.store'),
            'team_id' => $id

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'date' => 'required',
            'time' => 'required',
            'implement' => 'required',
            'place' => 'required',
            'team_id' => 'required'
        ]);

        try {
            DB::beginTransaction();

            Meeting::create($data);

            DB::commit();

            toast('Meeting Added Successfully', 'success');
            return redirect()->route('meeting.show', $data['team_id']);
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
        return view('pages.user.meeting.index', [
            'meetings' => Meeting::where('team_id', $id)->latest()->get(),
            'team_id' => $id,
            'team' => Team::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('pages.user.meeting.form', [

            'route' => route('meeting.update', $id),
            'team_id' => Meeting::find($id)->team_id,
            'old' => Meeting::with('team')->find($id),
            'team'=>Team::find($id)

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $meeting = Meeting::find($id);
        $data = $request->validate([
            'date' => 'required',
            'time' => 'required',
            'implement' => 'required',
            'place' => 'required',
            'team_id' => 'required'
        ]);

        try {
            DB::beginTransaction();

            $meeting->update($data);

            DB::commit();

            toast('Meeting Updated Successfully', 'success');
            return redirect()->route('meeting.show', $data['team_id']);
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
        $data = Meeting::find($id);
        $data->delete();
        toast("Data deleted successfully", "success");
        return back();
    }

}
