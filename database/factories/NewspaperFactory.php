<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Newspaper;
use Faker\Generator as Faker;

$factory->define(Newspaper::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'description'=>$faker->paragraph,
        'commentCounts'=>$faker->randomDigit,
        'downloadCounts'=>$faker->randomDigit,
        'viewCounts'=>$faker->randomDigit,
        'isApprove'=>$faker->randomDigit,
    ];
});
