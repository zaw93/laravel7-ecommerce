<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Illuminate\Http\File;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;

$factory->define(Brand::class, function (Faker $faker) {

  $image = $faker->image(null, 200, 200);
  $imageFile = new File($image);

  return [
    'name' => $faker->word(),
    'photo' => Storage::disk('public')->putFile('images/brand', $imageFile),
  ];
});
