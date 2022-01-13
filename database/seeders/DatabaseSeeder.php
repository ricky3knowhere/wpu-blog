<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Category::create([
            'slug' => 'programming',
            'name' => 'Programming'
        ]);

        Category::create([
            'slug' => 'graphic-design',
            'name' => 'Graphic Design'
        ]);
        Category::create([
            'slug' => 'personal',
            'name' => 'Personal'
        ]);

        Post::factory(20)->create();
    }
}