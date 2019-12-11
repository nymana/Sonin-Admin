<?php

use Illuminate\Database\Seeder;
use App\model\Newspaper;
use App\model\Newsfeed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CommentSeeder::class);
        factory(Newspaper::class,10)->create();
        factory(Newsfeed::class,10)->create();
    }
}
