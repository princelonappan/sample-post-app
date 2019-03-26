<?php

use Faker\Generator as Faker;
use Faker\Provider\Lorem as Lorem;

$factory->define(App\Models\Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
