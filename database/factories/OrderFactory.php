<?php

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'no_order' => rand(0000000001, 999999999),
        'subtotal' => rand(100,1000),
        'tax' => rand(16,160),
        'total' => rand(116, 1160),
        'user_id' => rand(2, 999),
        'status_id' => rand(3,5),
    ];
});

