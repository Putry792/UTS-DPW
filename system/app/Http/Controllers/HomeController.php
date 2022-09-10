<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showDashboard(){
        return view('admin.dashboard');
    }
            
}