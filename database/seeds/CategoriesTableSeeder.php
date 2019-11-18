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
      $category = new Category();
      $category->name = 'Sports';
      $category->save();

      $category = new Category();
      $category->name = 'Fashion';
      $category->save();

      $category = new Category();
      $category->name = 'Christmas';
      $category->save();

      $category = new Category();
      $category->name = 'Beauty';
      $category->save();

      $category = new Category();
      $category->name = 'Electronics';
      $category->save();

      $category = new Category();
      $category->name = 'Toys';
      $category->save();
    }
}
