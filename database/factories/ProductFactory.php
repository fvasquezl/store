<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->text(50),
        'category_id'=>Category::all()->random()->id,
        'short_description'=>$faker->text(60),
        'long_description'=>$faker->text(200),
        'specs'=>$faker->text(200),
        'interesting_data'=>$faker->text(200),
        'state'=>$faker->randomElement(['new','used']),
        'active'=>$faker->randomElement(['yes','no']),
        'principal_slide'=>$faker->randomElement(['yes','no']),
    ];
});
