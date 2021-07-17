<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use App\Brand;
use App\Subcategory;
use Illuminate\Http\File;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;

$factory->define(Item::class, function (Faker $faker) {

  $image = $faker->image(null, 200, 200);
  $imageFile = new File($image);

  return [
    'codeno' => $faker->randomNumber($nbDigits = null, $strict = false),
    'name' => $faker->word(),
    'photo' => Storage::disk('public')->putFile('images/item', $imageFile),
    'price' => $faker->numberBetween($min = 10000, $max = 900000),
    'discount' => $faker->numberBetween($min = 10000, $max = 900000),
    'description' => $faker->text($maxNbChars = 200),
    'brand_id' => Brand::all(['id'])->random(),
    'subcategory_id' => Subcategory::all(['id'])->random(),
  ];
});
