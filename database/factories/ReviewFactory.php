<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\review;
use Faker\Generator as Faker;
use App\Model\Product;

$factory->define(review::class, function (Faker $faker) {
    return [
        'product_id'=>function(){
        	return Product::inRandomOrder()->first()['id'];
        },
        'customer'=>$faker->name,
        'review'=>$faker->paragraph,
        'star'=>$faker->numberBetween($min=0,$max=5)
    ];
});
