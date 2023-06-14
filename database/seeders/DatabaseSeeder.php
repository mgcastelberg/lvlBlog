<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'ManuxDark',
        //     'email' => 'jmgc@virket.com',
        //     'password' => bcrypt('LocalD4sh'),
        // ]);

        // \App\Models\Topic::factory(5)->create();
        \App\Models\Tag::factory(10)->create();
        \App\Models\Post::factory(30)->create();
    }
}
