<?php

use Illuminate\Database\Seeder;
use App\Entyties\Comment;

class CommentTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comment::class,100)->create();
    }
}
