<?php

use Illuminate\Database\Seeder;

use App\model\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

        foreach (range(1, 50) as $i) {
        	Comment::create([
	        	'c_Body' => $faker->paragraph,
	        ]);
        }
    }
}
