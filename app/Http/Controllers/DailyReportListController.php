<?php

namespace App\Http\Controllers;

use App\Models\DailyReport;
use App\Models\DailyReportList;
use App\Models\Project;
use Illuminate\Http\Request;

class DailyReportListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.user.daily-report-list.index', [
            'dailyReport' => DailyReport::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_data($id)
    {
        return view('pages.user.daily-report-list.form', [
            'route' => route('daily-report-list.store'),
            'projects' => Project::latest()->get(),
            'daily_report_id' => $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'project_id' => 'required',
            'daily_report_id' => 'required',
            'content' => 'required'
        ]);

        $data['user_id'] = auth()->user()->id;

        DailyReportList::create($data);
        toast("Daily Report Added Successfully", "success");
        return redirect()->route('daily-report-list.show', $data['daily_report_id']);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return view('pages.user.daily-report-list.show', [
            'dailyReport' => DailyReport::with(['dailyReportList'])->find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        return view('pages.user.daily-report-list.form', [
            'route' => route('daily-report-list.update', $id),
            'projects' => Project::latest()->get(),
            'old' => DailyReportList::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $daily = DailyReportList::find($id);
        $data = $request->validate([
            'project_id' => 'required',
            'content' => 'required'
        ]);
        
        $data['daily_report_id'] = $daily->daily_report_id;
        $data['user_id'] = auth()->user()->id;

        $daily->update($data);
        toast("Daily Report Updated Successfully","success");
        return redirect()->route('daily-report-list.show', $data['daily_report_id']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $data = DailyReportList::find($id);
        $data->delete();
        toast("Daily Report Deleted Successfully", "success");
        return back();
    }
}
