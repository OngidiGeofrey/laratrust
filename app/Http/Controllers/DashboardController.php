<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        if(Auth::user()->hasRole('admin'))
        {
            return view('admindashboard');

        }elseif(Auth::user()->hasRole('Student'))
        {
            
            return view('dashboard');

        }

        elseif(Auth::user()->hasRole('Teacher'))
        {
            
            return view('teacherDashboard');

        }
    }
   
}

