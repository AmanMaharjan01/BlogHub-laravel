<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
       'title' => $faker->word,
       'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
       'user_id' => User::all()->random()->id,
    ];
});
