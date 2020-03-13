<?php

use Illuminate\Database\Seeder;
use App\Model\Newspaper;
use App\Model\Newsfeed;
use App\Model\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Newspaper::class,10)->create();
        factory(Newsfeed::class,10)->create();
        factory(Comment::class,15)->create();
    }
}
