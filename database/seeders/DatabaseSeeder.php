<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 2 ; $i++) {
          $category = Category::factory()->create();
           $post = Post::factory()->create();

            DB::table('category_post')->insert([
                'category_id' => $category->id,
                 'post_id' =>$post->id,
              ]);
        }

        // \App\Models\User::factory(10)->create();
    }
}
