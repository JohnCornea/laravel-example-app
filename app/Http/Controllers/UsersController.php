<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersUpdateRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function index()
    {
        // INSERT
        // DB::table('users')->insert([
        //     'name' => 'Jose',
        //     'email' => 'jose@gmail.com',
        //     'password' => Hash::make('secret123@@##')
        // ]);

        // return redirect('/');
    
        // READING 
        // $users = DB::table('users')->get();

        // dd($users);

        // UPDATE
        // $users = DB::table('users')->where('id', 1)->update([
        //     'password' => Hash::make('secret123@@')
        // ]);

        // dd($result);

        // DB::table('users')->where('id', 1)->delete();

        // DB::table('users')->truncate();

        // return redirect('/');

        // $users = Storage::json('public/users.json');

        // foreach ($users as $user) {
        //     DB::table('users')->insert([
        //         'name' => $user['name'],
        //         'email' => $user['email'],
        //         'password' => Hash::make($user['email']),
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]);

        //     return redirect('/');
        // }

        //DATABASE - QUERY BUILDER SMALL PROJECT
        $users = DB::table('users')->get();

        return view('users.index', compact('users'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(string $id)
    {
        $user = DB::table('users')->find($id);

        return view('users.show', compact('user'));
    }

    public function edit(string $id)
    {

    }

    public function update(UsersUpdateRequest $request, string $id)
    {
        $inputs = $request->all();

        $alldata = $request->safe()
        ->merge($inputs)
        ->except(['_token', '_method', 'password_confirmation']);

        DB::table('users')
            ->where('id', $id)
            ->update($alldata);

        return redirect()->route('users.index');
    }

    public function destroy(string $id)
    {

    }
}
