<?php

namespace App\Http\Controllers\admin;

use App\Models\Meeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MeetingController extends Controller
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
        return view('pages.admin.meeting.form', [

            'route' => route('admin.meeting.store'),
            'team_id'=>$id

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
            return redirect()->route('admin.meeting.show', $data['team_id']);
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
        return view('pages.admin.meeting.index', [
            'meetings' => Meeting::where('team_id', $id)->latest()->get(),
            'team_id' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('pages.admin.meeting.form', [

            'route' => route('admin.meeting.update',$id),
            'team_id' => Meeting::find($id)->team_id,
            'old'=>Meeting::find($id)

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
            return redirect()->route('admin.meeting.show', $data['team_id']);
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
