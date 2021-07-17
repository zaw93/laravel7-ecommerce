<?php

use App\Category;
use App\Subcategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    factory(Category::class, 2)->create()->each(function ($category) {

      // Seed the relationship with 2 subcategories
      $subcategories = factory(Subcategory::class, 2)->make();
      $category->subcategories()->saveMany($subcategories);
    });
  }
}
