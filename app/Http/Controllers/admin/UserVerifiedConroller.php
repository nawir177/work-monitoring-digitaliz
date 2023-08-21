<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserVerifiedConroller extends Controller
{
    public function index(){
        return view('pages.admin.user_verified.index');
        
    }
}
