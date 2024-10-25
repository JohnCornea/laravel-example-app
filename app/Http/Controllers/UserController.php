<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    // public function show() 
    // {
    //     return view('welcome');
    // }
    // public function index()
    // {
    //     DB::table('users')->insert([
    //         'name' => 'Jose',
    //         'email' => 'jose@gmail.com',
    //         'password' => Hash::make('secret123@@##')
    //     ]);

    //     return redirect('/');
    // }
}
