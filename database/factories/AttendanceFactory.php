<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Attendance;
use App\Employee;
use Faker\Generator as Faker;

$factory->define(Attendance::class, function (Faker $faker) {
    return [
        'employee_id' => Employee::all(['id'])->random(),
        'date' => $faker->dateTimeThisMonth->format('Y-m-d'),
        'in_time' => '09:00'
    ];
});
