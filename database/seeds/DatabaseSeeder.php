<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(AuthorTableSeed::class);
        $this->call(PostTableSeed::class);
        $this->call(CommentTableSeed::class);
    }
}
