<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\model\newspaper;
use Faker\Generator as Faker;

$factory->define(App\model\Newspaper::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'description'=>$faker->paragraph,
        'commentCounts'=>$faker->randomDigit,
        'downloadCounts'=>$faker->randomDigit,
        'viewCounts'=>$faker->randomDigit,
        'viewCounts'=>$faker->randomDigit,
        'isApprove'=>$faker->randomDigit,
    ];
});
