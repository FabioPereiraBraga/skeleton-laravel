<?php

use Illuminate\Database\Seeder;
use App\Entyties\Author;

class AuthorTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Author::class,100)->create();
    }
}
