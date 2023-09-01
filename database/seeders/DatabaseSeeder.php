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
        \App\Models\User::factory()->create([
            'name' => 'Slamet Shariful Zaidin',
            'username' => 'zaiimrq',
            'email' => 'zaiimrq@gmail.com',
            'password' => bcrypt('password')
        ]);

        \App\Models\User::factory(3)->create();


        \App\Models\Post::factory(20)->create();

        \App\Models\Category::create([
            "name" => "web programming",
            "slug" => "web-programming"
        ]);
        \App\Models\Category::create([
            "name" => "web design",
            "slug" => "web-design"
        ]);
        \App\Models\Category::create([
            "name" => "personal",
            "slug" => "personal"
        ]);
    }
}
