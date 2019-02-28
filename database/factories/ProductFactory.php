<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $title = $faker->unique()->sentence(4);
    return [
        'code' => rand(00001, 99999),
        'name' => $title,
        'slug' => str_slug($title),
        'content' => $faker->text(500),
        'price' => rand(1,100),
        'image' => $faker->imageUrl($width = 300, $height = 300),
        'category_id' => rand(1,5),
        'status_id' => (1),
        'offer' => $faker->randomElement(['ENABLE', 'DISABLE']),
    ];
});
