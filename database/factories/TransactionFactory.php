<?php

use App\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    return [
        'quantity' => $faker->numberBetween(1, 3),
        'buyer_id' => function () { 
            return factory(App\User::class)->create()->id; 
        },
        'product_id' => function () { 
            return factory(App\Product::class)->create()->id; 
        },
    ];
});
