<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Husniddin',
            'email' => 'husniddin13124041@gmail.com',
            'password' => 330440311,
            'role' => 'admin',
            'chat_id' => 7213131586
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\Post::factory(20)->create()->each(function ($post) {
        //     // Contents
        //     \App\Models\Content::factory(rand(3, 4))->create([
        //         'post_id' => $post->id,
        //     ])->each(function ($content) {
        //         // Mediafiles
        //         \App\Models\PostMediafile::factory(rand(3, 4))->create([
        //             'content_id' => $content->id,
        //         ]);
        //     });

        //     // Comments
        //     \App\Models\Comment::factory(rand(3, 4))->create([
        //         'post_id' => $post->id,
        //         'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        //     ]);
        // });

        // // Files, Quotes, Contacts
        // \App\Models\File::factory(10)->create();
        // \App\Models\Quote::factory(10)->create();
        // \App\Models\Contact::factory(10)->create([
        //     'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        // ]);
    }
}
