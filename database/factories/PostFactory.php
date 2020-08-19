<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence,
        'category'=>$faker->sentence,
        'post_image'=>$faker->imageUrl('900','300'),
        'body'=>$faker->paragraph
    ];
});
