<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++){
            DB::table('posts')->insert([
                'title' => Str::random(10),
                'preview' => Str::random(50),
                'text' => Str::random(100),
                'count_view' => random_int(0, 10000),
                'is_public' => random_int(0, 1),
            ]);
        }
    }
}
