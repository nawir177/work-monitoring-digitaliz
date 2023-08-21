<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Client;
use App\Models\Employe;
use App\Models\Project;
use App\Models\TesCoding;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PrintController extends Controller
{

    // client print
    public function allClient(){
        $pdf = Pdf::setPaper('a4', 'landscape')->loadView('print.client.all', [
            "clients" => Client::all()
        ]);
        return $pdf->download('all_client.pdf');
    }
    public function detailClient($id)
    {
        $pdf = Pdf::loadView('print.client.detail', [
            "client" => Client::find($id)
        ]);
        return $pdf->download('show_client.pdf');
    }

    // project print
        public function allProject(){
        $pdf = Pdf::loadView('print.project.all', [
            "projects" => Project::latest()->get()
        ]);
        return $pdf->download('all_project.pdf');
    }
    public function detailProject($id)
    {
        $pdf = Pdf::loadView('print.project.detail', [
            "project" => Project::find($id)
        ]);
        return $pdf->download('detail_project.pdf');
    }

// employe print
    public function allEmploye(){

        $pdf = Pdf::setPaper('a4', 'landscape')->loadView('print.employe.all', [
            "employes" => Employe::where('verified',1)->with('user')->get()
        ]);
        return $pdf->download('all_employe.pdf');
    }

    // team print

    public function allTeam()
    {

        $pdf = Pdf::loadView('print.team.all', [
            "teams" => Team::latest()->with(['user','project'])->get()
        ]);
        return $pdf->download('all_team.pdf');

    }

    public function detailTeam($id){
        $pdf = Pdf::loadView('print.team.detail', [
            "team" => Team::with(['user', 'project','teamMember'])->find($id)
        ]);
        return $pdf->download('detail_team.pdf');

    }

    //presece print

    public function allPresence()
    {

        $pdf = Pdf::loadView('print.presence.all', [
            'users' => User::latest()->with(['employe', 'presence'])->get(),
            'employes' => Employe::where('verified', true)->latest()->with('user')->get(),
        ]);
        return $pdf->download('all_presence.pdf');
    } 

    public function allBook(){

        $pdf = Pdf::loadView('print.tes.all', [
            'data' => TesCoding::all(),
        ]);
        return $pdf->download('all_book.pdf');
    }
    
}
