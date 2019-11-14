<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MonthDate;
use Faker\Generator as Faker;

$factory->define(MonthDate::class, function (Faker $faker) {
    return [
        'date' => $faker->dateTimeThisMonth->format('Y-m-d')
    ];
});
