<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return $request->query('id');
    }

    public function show() {
        
        return view('welcome');
    }
}
