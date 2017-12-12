<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 15; $i++) {
        DB::table('posts')->insert([
             'slug' => str_random(12),
             'author_id' => 1,
             'title' => 'post title',
             'subtitle' => 'subheading about the post',
             'content' => str_random(2) . ' At first, there was ' . str_random(300),
             'status' => 1,
             'type' => 1,
             'comment_count' => 0,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ]);
       }
    }
}
