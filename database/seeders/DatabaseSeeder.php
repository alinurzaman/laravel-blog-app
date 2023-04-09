<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Muhamad Ali',
        //     'email' => 'muhamad@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        // User::create([
        //     'name' => 'Nur Zaman',
        //     'email' => 'nurzaman@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id, rerum unde quae itaque odio libero animi aliquid odit aspernatur soluta.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id, rerum unde quae itaque odio libero animi aliquid odit aspernatur soluta. Libero sequi quidem deleniti est debitis voluptatum officiis ratione.</p> Dolores aspernatur voluptas minima suscipit iste commodi aperiam. Voluptatibus quia eius consequuntur ratione quae sit ex esse illo in accusantium aperiam impedit nobis facilis quasi sint perferendis cum suscipit tenetur repellendus deleniti, exercitationem sunt alias quaerat! Libero tempore dolorum veritatis!<p>Fugiat error sint magni esse commodi dolor provident perspiciatis qui assumenda.</p>',
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id, rerum unde quae itaque odio libero animi aliquid odit aspernatur soluta.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id, rerum unde quae itaque odio libero animi aliquid odit aspernatur soluta. Libero sequi quidem deleniti est debitis voluptatum officiis ratione.</p> Dolores aspernatur voluptas minima suscipit iste commodi aperiam. Voluptatibus quia eius consequuntur ratione quae sit ex esse illo in accusantium aperiam impedit nobis facilis quasi sint perferendis cum suscipit tenetur repellendus deleniti, exercitationem sunt alias quaerat! Libero tempore dolorum veritatis!<p>Fugiat error sint magni esse commodi dolor provident perspiciatis qui assumenda.</p>',
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id, rerum unde quae itaque odio libero animi aliquid odit aspernatur soluta.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id, rerum unde quae itaque odio libero animi aliquid odit aspernatur soluta. Libero sequi quidem deleniti est debitis voluptatum officiis ratione.</p> Dolores aspernatur voluptas minima suscipit iste commodi aperiam. Voluptatibus quia eius consequuntur ratione quae sit ex esse illo in accusantium aperiam impedit nobis facilis quasi sint perferendis cum suscipit tenetur repellendus deleniti, exercitationem sunt alias quaerat! Libero tempore dolorum veritatis!<p>Fugiat error sint magni esse commodi dolor provident perspiciatis qui assumenda.</p>',
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id, rerum unde quae itaque odio libero animi aliquid odit aspernatur soluta.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id, rerum unde quae itaque odio libero animi aliquid odit aspernatur soluta. Libero sequi quidem deleniti est debitis voluptatum officiis ratione.</p> Dolores aspernatur voluptas minima suscipit iste commodi aperiam. Voluptatibus quia eius consequuntur ratione quae sit ex esse illo in accusantium aperiam impedit nobis facilis quasi sint perferendis cum suscipit tenetur repellendus deleniti, exercitationem sunt alias quaerat! Libero tempore dolorum veritatis!<p>Fugiat error sint magni esse commodi dolor provident perspiciatis qui assumenda.</p>',
        // ]);
    }
}
