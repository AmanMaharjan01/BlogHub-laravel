<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
       'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
       'blog_id' => Blog::all()->random()->id,
       'user_id' => User::all()->random()->id
    ];
});
