<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'description' => $faker->realText(100),
        'thumbnail' => $faker->image('public/storage/images/posts', 400, 300, null, true)
    ];
});
