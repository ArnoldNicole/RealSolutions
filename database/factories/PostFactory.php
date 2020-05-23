<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->text(25),
        'body'=>$faker->text(5000),
        'category'=>'Game Walkthroughs',
        'user_id'=>2
    ];
});
