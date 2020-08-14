<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\District;
use Faker\Generator as Faker;

// Here we format our fake data
$factory->define(District::class, function (Faker $faker) {
    return [
        'name' => $faker->text(50)
    ];
});
