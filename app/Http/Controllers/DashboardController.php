<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
       
        if(fullAccess())
            return view('backend.adminDashboard');
        else
            return view('backend.dashboard');
    }
}