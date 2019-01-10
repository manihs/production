<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Interest::class, function (Faker $faker) {
    return [
        'contents' => str_random(60),
        'created_at' => now(),
    ];
});

$factory->define(App\SubInterest::class, function (Faker $faker) {
    return [
        'main' => rand(1,50),
        'sub' => str_random(60),
        'created_at' => now(),
    ];
});

$factory->define(App\UserInterest::class, function (Faker $faker) {
    return [
        'uid' => rand(1,50),
        'icode' => rand(1,50),
        'created_at' => now(),
    ];
});

$factory->define(App\UserCommunity::class, function (Faker $faker) {
    return [
        'community' => rand(1,200),
        'user' => rand(1,50),
        'created_at' => now(),
    ];
});

$factory->define(App\Community::class, function (Faker $faker) {
    return [
        'uid' => rand(1,200),
        'cname' => $faker->name,
        'url' => str_random(10),
        'type' => rand(1,4),
        'created_at' => now(),
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'src' => 'www.http:\\'.str_random(60),
        'caption' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'type' => rand(1,4),
        'uid' => rand(1,50),
        'created_at' => now(),
    ];
});

$factory->define(App\Like::class, function (Faker $faker) {
    return [
        'pid' => rand(1,250),
        'uid' => rand(1,50),
        'created_at' => now(),
    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'pid' => rand(1,250),
        'uid' => rand(1,50),
        'text' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'created_at' => now(),
    ];
});

$factory->define(App\CommunitySharedWith::class, function (Faker $faker) {
    return [
        'postId' => rand(1,250),
        'cmtyId' => rand(1,200),
        'created_at' => now(),
    ];
});



