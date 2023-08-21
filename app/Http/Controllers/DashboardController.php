<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
    if(auth()->user()->hasRole('admin')){
        return redirect()->route('admin.dashboard');
    }
        return view('pages.user.dashboard',[
            'categories'=>Category::latest()->with('folder')->get(),
            'activities'=>Activity::with(['user','link'])->latest()->get(),
        ]);
    }
}
