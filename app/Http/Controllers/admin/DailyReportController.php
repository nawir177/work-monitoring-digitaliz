<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\DailyReport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DailyReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.daily-report.index',[
            'dailyReport'=>DailyReport::latest()->get()
        ]);
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
        $before = DailyReport::latest()->get()->first();
        $toDay =  Carbon::now()->isoFormat('dddd');

        // validasi absen hari yang sama
        if ($before) {
            $beforeDay = Carbon::parse($before->created_at)->isoFormat('dddd');
            if ($toDay == $beforeDay) {
                alert()->error('Daily Report sudah dibuat', 'Silahkan lakukan di hari berikutnya');
                return back();
            }
        }

        DailyReport::create();
        toast('Daily Report Added Successfully', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('pages.admin.daily-report.show', [
            'dailyReport' => DailyReport::with(['dailyReportList'])->find($id)
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
