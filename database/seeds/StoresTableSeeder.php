<?php

use Illuminate\Database\Seeder;
use App\Store;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $store = new Store();
      $store->name = 'Amazon';
      $store->region = 'UK';
      $store->url = 'www.amazon.co.uk';
      $store->save();

      $store = new Store();
      $store->name = 'ASOS';
      $store->region = '';
      $store->url = 'www.asos.com';
      $store->save();

      $store = new Store();
      $store->name = 'Amazon';
      $store->region = 'ES';
      $store->url = 'www.amazon.es';
      $store->save();

      $store = new Store();
      $store->name = 'ebay';
      $store->region = 'IRL';
      $store->url = 'www.ebay.ie';
      $store->save();

      $store = new Store();
      $store->name = 'ebay';
      $store->region = 'DE';
      $store->url = 'www.ebay.de';
      $store->save();
    }
}
