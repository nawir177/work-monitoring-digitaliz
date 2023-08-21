<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use RuntimeException;
use App\Models\Presence;
use App\Models\WorkPermit;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.user.presence.index', [
            'presence' => Presence::where('user_id', auth()->user()->id)->get()
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


        $toDay =  Carbon::now()->isoFormat('dddd');
        if (Presence::where('user_id', auth()->user()->id)->latest()->get()->first()) {
            $before = Presence::where('user_id', auth()->user()->id)->latest()->get()->first();
            $beforeDay = Carbon::parse($before->created_at)->isoFormat('dddd');
            // validasi absen hari yang sama
            if ($toDay == $beforeDay) {
                alert()->error('Absen sudah terisi', 'Silahkan lakukan di hari berikutnya');
                return back();
            }
        }

        $timeToDay = Carbon::now()->isoFormat('H');
        $status = "present";


        // validasi basen terlambat
        if ($timeToDay > 17 || $timeToDay < 7) {
            alert()->error('Waktu Kerja Sudah Habis', 'Silahkan Lakukan di Absen di hari berikutnya');
            return back();
        }


        if ($timeToDay > 9) {
            $status = "late";
        }

        Presence::create([
            "user_id" => auth()->user()->id,
            "status" => $status
        ]);


        alert()->success('Absen berhasil', 'Selamat absen kamu berhasil di tambahkan');
        return back();
    }

    public function workPermit(Request $request)
    {




       
        $toDay =  Carbon::now()->isoFormat('dddd');
        $timeToDay = Carbon::now()->isoFormat('H');
        $status = $request['status'];
        $presence_id = 1;
        if (Presence::where('user_id', auth()->user()->id)->latest()->get()->first()) {

            $before = Presence::where('user_id', auth()->user()->id)->latest()->get()->first();
            $beforeDay = Carbon::parse($before->created_at)->isoFormat('dddd');
            // validasi absen hari yang sama
            if ($toDay == $beforeDay) {
                alert()->error('Absen sudah terisi', 'Silahkan lakukan di hari berikutnya');
                return back();
            }
        }
        // validasi basen terlambat
        // if ($timeToDay > 12 || $timeToDay < 7) {
        //     alert()->error('Waktu Kerja Sudah Habis', 'Silahkan Lakukan di Absen di hari berikutnya');
        //     return back();
        // }

      

        $presence = Presence::create([
            "user_id" => auth()->user()->id,
            "status" => $status
        ]);
        $presence_id = Presence::latest()->get()->first()->id;

     


        WorkPermit::create([
            "user_id" => auth()->user()->id,
            "presence_id" => $presence_id,
            'message' => $request['message']
        ]);

        if ($request->has('lampiran_surat')) {
            $presence->addMediaFromRequest('lampiran_surat')
                ->toMediaCollection('lampiran_surat');
        };

        alert()->success('Absen berhasil', 'Izin Kerja kamu berhasil di tambahkan');
        return back();
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
