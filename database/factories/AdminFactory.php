<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Admin;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'email_verified_at' => now(),
        'password' =>  Hash::make("admin"),
        'remember_token' => Str::random(10),
    ];
});
