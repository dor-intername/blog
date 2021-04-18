<?php

namespace Database\Seeders;

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
        Post::factory()->count(2)->create(['user_id'=>1]);


        for($i = 0; $i < 3 ; $i++) {
            $user = User::factory()->create();

            Post::factory()->count(3)->create(['user_id' => $user->id]);
        }
        // \App\Models\User::factory(10)->create();
    }
}
