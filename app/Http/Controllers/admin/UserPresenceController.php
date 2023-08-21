<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Presence;
use App\Models\WorkPermit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserPresenceController extends Controller
{
    public function index()
    {

        $day = Carbon::now()->setTimezone('Asia/Makassar')->day;
        $today = Presence::select('user_id')
            ->whereDay('created_at', $day)
            ->orderBy('created_at', 'desc')
            ->get();


        $noPresent = User::whereNotIn('id', $today)
            ->get();

        $presentToDay = Presence::whereDay('created_at', $day)
            ->orderBy('created_at', 'desc')
            ->with('user')->get();

        $presence =
            Presence::whereDay('created_at', $day)
            ->orderBy('created_at', 'desc')
            ->where('status', 'present')
            ->with('user')->get();


        $permission = Presence::whereDay('created_at', $day)
            ->orderBy('created_at', 'desc')
            ->where('status', 'sakit')
            ->with('user')->get();

        $late = Presence::whereDay('created_at', $day)
            ->orderBy('created_at', 'desc')
            ->where('status', 'late')
            ->with('user')->get();

        return view('pages.admin.presence.index', [
            'users' => User::latest()->with(['employe', 'presence'])->get(),
            "presence_today" => $presentToDay,
            "not_present" => $noPresent,
            "permission" => $permission,
            "presence" => $presence,
            "late" => $late,
            "time" => Carbon::now()->isoFormat('dddd, DD MMMM Y'),
            'workPermit'=>WorkPermit::latest()->with('presence')->get()
        ]);
    }


    public function clear()
    {

        try {
            DB::beginTransaction();
         
            $presence = Presence::all();
            foreach ($presence as $value) {
                $value->clearMediaCollection('lampiran_surat');
                $value->delete(); // Menghapus semua data dari tabel Presence
            }
            DB::commit();
            toast('Clear Presence Successfully', 'success');
            return back();
        } catch (\Exception $th) {
            !app()->isProduction()
                ? toast($th->getMessage(), 'error')
                : toast('Terjadi kesalahan pada server, coba lagi', 'error');

            return back()->withInput();
        }
    }
}
