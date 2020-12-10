<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use Faker\Generator as Faker;



    $factory->define(Message::class, function (){
        return [];
    });
    $factory->state(Message::class,'id_1',function () {
        return [
            'sender_id' => 1,
            'sent_to_id' => 2
        ];
    });

    $factory->state(Message::class,'id_2',function () {
        return [
            'sender_id' => 2,
            'sent_to_id' => 1
        ];
    });
    
    

    $factory->state(Message::class,'professor',function (){
        return [
            'sender_id' => App\User::whereHas('roles', function($q) { $q->where('name','professor');})->first()->id,
            'sent_to_id' => App\User::whereHas('roles', function($q) { $q->where('name', 'student');})->get()->first()->id
        ];
    });

    $factory->state(Message::class,'student',function (){
        return [
            'sender_id' => App\User::whereHas('roles', function($q) { $q->where('name','student');})->first()->id,
            'sent_to_id' => App\User::whereHas('roles', function($q) { $q->where('name','professor');})->get()->first()->id
        ];
    });

