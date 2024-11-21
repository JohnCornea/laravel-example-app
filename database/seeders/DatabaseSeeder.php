<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(200)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call([

            // UsersTableSeeder::class,
            // PostSeeder::class,
        //     MyCrazySeeder::class, 
        // ]);
        $this->call([
            RoleSeeder::class,
            // UserSeeder::class,
            // CommentSeeder::class,
            // PostSeeder::class,
        ]);

        // User::factory(10)
        //     ->has(Post::factory()->count(2)
        //     ->has(Comment::factory()->count(2)))
        //     ->create();
    }
}
