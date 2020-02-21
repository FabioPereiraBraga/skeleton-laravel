<?php

use Illuminate\Database\Seeder;
use App\Entyties\Post;

class PostTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class,100)->create();
    }
}
