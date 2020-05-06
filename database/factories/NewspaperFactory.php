<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Newspaper;
use Faker\Generator as Faker;

$factory->define(Newspaper::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'description'=>$faker->paragraph,
        'comment_counts'=>$faker->randomDigit,
        'download_counts'=>$faker->randomDigit,
        'view_counts'=>$faker->randomDigit,
        'is_approve'=>$faker->randomDigit,
    ];
});
