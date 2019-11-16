<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $post = Post::all()->random(1)->first();
    return [
        'post_id' => $post->id,
        'user_name' => $faker->firstName,
        'user_email' => $faker->unique()->freeEmail,
        'user_url' => $faker->unique()->url,
        'user_ip' => $faker->unique()->ipv4,
        'user_browser' => $faker->userAgent,
        'user_file' => $faker->image(
            'public/storage/comments/files',
            400,
            300,
            null,
            true),
        'text' => $faker->realText(100)

    ];
});
