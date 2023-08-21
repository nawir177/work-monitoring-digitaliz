<?php

namespace App\Http\Controllers\admin;

use App\Models\Activity;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard', [
            'categories' => Category::latest()->get(),
            'activities' => Activity::with(['user', 'link'])->latest()->get(),
        ]);
    }
}
