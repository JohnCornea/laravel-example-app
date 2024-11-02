<?php

namespace Database\Seeders;

use App\Models\MyCustomModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class MyCrazySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // MyCustomModel::factory(10)->create();
        User::factory()->has(MyCustomModel::factory()->count(10))->create();
    }
}
