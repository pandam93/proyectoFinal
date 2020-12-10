<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {

    return [
        'student_id' => App\User::whereHas('roles', function($q) { $q->where('name','student');})->inRandomOrder()->first()->id,
        'professor_id' => App\User::whereHas('roles', function($q) { $q->where('name','professor');})->inRandomOrder()->first()->id,
        'body' => $faker->paragraph(1),
        'category' => (rand(0,1)) ? 'bueno' : 'malo',
    ];
});
