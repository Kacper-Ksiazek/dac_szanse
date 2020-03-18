<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'author_id' => factory('App\User')->create()->id,
        'title' => $faker->name,
        'since' => $faker->dateTime(),
        'till' => $faker->dateTime(),
        'content' => $faker->text(200)
    ];
});
