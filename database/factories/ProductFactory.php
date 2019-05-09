<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
  return [
      'name' => $faker->word,
      'description' => $faker->paragraph(1),
      'quantity' => $faker->numberBetween(1, 10),
      'status' => $faker->randomElement([Product::AVAILABLE_PRODUCT, Product::UNAVAILABLE_PRODUCT]),
      'image' => $faker->randomElement(['one.jpg', 'two.jpg', 'three.jpg']),
      'seller_id' => function () { 
          return factory(App\User::class)->create()->id; 
      },
  ];
});
