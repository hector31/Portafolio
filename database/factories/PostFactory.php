<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence,
        'category'=>$faker->sentence,
        'post_image'=>$faker->imageUrl('700','400'),
        'post_second_image'=>$faker->imageUrl('700','400'),
        'body'=>$faker->paragraph,
        'link'=>$faker->url  
    ];
});
