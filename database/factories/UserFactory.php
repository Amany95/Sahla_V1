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
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'question' => $faker->title,
        'answer' => $faker->paragraph // secret
        
    ];
});


$factory->define(App\client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph
        
    ];
});
$factory->define(App\App_Services::class, function (Faker $faker) {
    return [
         'header'=>$faker->title,
            'P1_header'=>$faker->title,
            'P1_paragraph'=>$faker->paragraph,
           'P2_header'=>$faker->title,
            'P2_paragraph'=>$faker->paragraph,
            'P3_header'=>$faker->title,
            'P3_paragraph'=>$faker->paragraph,
            'P4_header'=>$faker->title,
            'P4_paragraph'=>$faker->paragraph
        
    ];
});

$factory->define(App\Msg::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'msg' => $faker->paragraph // secret
    ];
});

