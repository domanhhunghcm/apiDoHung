<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'detail'=>$faker->text,
        'price'=>$faker->numberBetween($min=1000,$max=9000),
        'stock'=>$faker->randomDigit,
        'discount'=>$faker->numberBetween($min=1000,$max=9000),
    ];
});
