<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersStoreRequest;
use App\Http\Requests\UsersUpdateRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use Faker\Factory;

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

        // $users = DB::select('select * from users order by id asc limit 10 offset 10');
        // $users = DB::select('select * from users where id > 10 order by id asc limit 10');

        //DATABASE - QUERY BUILDER SMALL PROJECT
        $users = DB::table('users')->paginate(10);

        // dd($users);
        
        return view('users.index', compact('users'));
        // $users = DB::table('users')->whereIn('id', [3,5,6])->get();
        // $users = DB::table('users')->groupBy('id')->having('id', '>' , 6)->get();
        // $users = DB::table('users')->distinct()->get();
        // $query = DB::table('users')->select('email');
        // $users = $query->addSelect('id')->get();

        // dd($users);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UsersStoreRequest $request)
    {
        $inputs = $request->all();

        $alldata = $request->safe()
        ->merge($inputs)->merge([
            'created_at' => Carbon::now()
        ])
        ->except(['_token', '_method', 'password_confirmation']);

        DB::table('users')
            ->insert($alldata);

        return redirect()->route('users.index');
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
        // DB::table('users')->find($id)->delete(); ==> THIS DOES NOT WORK
        $user = DB::table('users')->where('id', $id)->delete();

        return redirect()->back();
    }

    public function created_dummy_users(Request $request)
    {
        $faker = Factory::create();

        for($i = 0; $i < 30; $i++)
        {

            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make($faker->password(8)),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        return redirect()->back();
        // $users = Storage::json('public/users.json');
        // $time = Carbon::now();

        // foreach ($users as $user){
        //     DB::table('users')->insert([
        //         'name'=> $user['name'],
        //         'email'=> $user['email'],
        //         'password'=> Hash::make($user['email']),
        //         'created_at'=> $time->addHour(),
        //         'updated_at'=> $time->addHour(),
        //     ]);
        // }
        // return redirect()->back();
        // dd($request);
    }

    public function delete_dummy_users(Request $request)
    {
        DB::table('users')->truncate();

        return redirect()->back();
    }
}
