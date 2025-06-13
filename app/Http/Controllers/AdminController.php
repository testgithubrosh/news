<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index_admin(){
        return view('dashboard.index');
    }
    public function insertForm()
    {
        return view('dashboard.category'); // Make sure this Blade file exists
    }
    
}
