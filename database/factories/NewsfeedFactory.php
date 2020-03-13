<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Newsfeed;
use Faker\Generator as Faker;

$factory->define(Newsfeed::class, function (Faker $faker) {
    return [
        'bodyText'=>$faker->paragraph,
        'commentCounts'=>$faker->randomDigit,
        'loveCounts'=>$faker->randomDigit,
        'viewCounts'=>$faker->randomDigit,
        'isApprove'=>$faker->randomDigit,
    ];
});
