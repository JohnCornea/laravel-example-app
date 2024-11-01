<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Http\Requests\UsersStoreRequest;
use App\Http\Requests\UsersUpdateRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Factory::create();
        
        // for($i = 0; $i < 10; $i++)
        // {

        //     DB::table('users')->insert([
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'password' => Hash::make($faker->password(8)),
        //         'email_verified_at' => now(),
        //         'remember_token' => Str::random(10),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]);
        // }
    }
}
