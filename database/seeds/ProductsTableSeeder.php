<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Store;
use App\Category;
use App\ListModel;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $store = Store::where('name', 'ASOS')->first();
      $category_sport = Category::where('name', 'Sports')->first();
      $category_fashion = Category::where('name', 'Fashion')->first();
      $list_christmasShopping = ListModel::where('name', 'Christmas Shopping')->first();


      $product = new Product();
      $product->title = 'ball';
      $product->price = rand(0, 100) . rand(1, 99);
      $product->product_num = rand(0, 100);
      $product->url = 'www.sportslife.com';
      $product->store_id = $store->id;
      $product->save();
      $product->categories()->attach($category_sport);
      $product->lists()->attach($list_christmasShopping);

      $product = new Product();
      $product->title = 'sfdfsdf';
      $product->price = rand(0, 100) . rand(1, 99);
      $product->product_num = rand(0, 100);
      $product->url = 'www.sffslife.com';
      $product->store_id = $store->id;
      $product->save();
      $product->categories()->attach($category_fashion);
      $product->lists()->attach($list_christmasShopping);

      $product = new Product();
      $product->title = 'sdfsdfsdf';
      $product->price = rand(0, 100) . rand(1, 99);
      $product->product_num = rand(0, 100);
      $product->url = 'www.sportslife.com';
      $product->store_id = $store->id;
      $product->save();
      $product->categories()->attach($category_sport);
      $product->lists()->attach($list_christmasShopping);

      $product = new Product();
      $product->title = 'Dress';
      $product->price = rand(0, 100) . rand(1, 99);
      $product->product_num = rand(0, 100);
      $product->url = 'www.test.com';
      $product->store_id = $store->id;
      $product->save();
      $product->categories()->attach($category_fashion);
    }
}
