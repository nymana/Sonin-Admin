<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\model\Newsfeed;
use Faker\Generator as Faker;

$factory->define(newsfeed::class, function (Faker $faker) {
    return [
        'bodyText'=>$faker->paragraph,
        'commentCounts'=>$faker->randomDigit,
        'loveCounts'=>$faker->randomDigit,
        'viewCounts'=>$faker->randomDigit,
        'isApprove'=>$faker->randomDigit,
    ];
});
