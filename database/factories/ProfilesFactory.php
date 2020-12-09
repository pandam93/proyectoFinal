<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'surname' => $faker->lastName,
        'phone' => $faker->phoneNumber,
        //'gender' => (rand(0,1) ? 'male' : 'female'),
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip' => 10300,
        'photo' => 'https://randomuser.me/api/portraits/men/'. rand(1,100) .'.jpg'

    ];
});

$factory->state(Profile::class,'female', function (){
    return [
        'gender' => 'female',
        'photo' => 'https://randomuser.me/api/portraits/women/'. rand(1,100) .'.jpg'
    ];
});
