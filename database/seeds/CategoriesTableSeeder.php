<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $category_sport = new Category();
      $category_sport->name = 'Sports';
      $category_sport->save();

      $category_fashionchristmas = new Category();
      $category_fashionchristmas->name = 'Fashion';
      $category_fashionchristmas->save();

      $category_christmas = new Category();
      $category_christmas->name = 'Christmas';
      $category_christmas->save();

      $category_beauty = new Category();
      $category_beauty->name = 'Beauty';
      $category_beauty->save();

      $category_electronics = new Category();
      $category_electronics->name = 'Electronics';
      $category_electronics->save();

      $category_toys = new Category();
      $category_toys->name = 'Toys';
      $category_toys->save();
    }
}
