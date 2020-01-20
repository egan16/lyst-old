<?php

use Illuminate\Database\Seeder;
use \App\ListModel;
use App\User;

class ListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = User::where('email', 'test@lyst.com')->first();

      $list_christmasShopping = new ListModel();
      $list_christmasShopping->name = 'Christmas Shopping';
      $list_christmasShopping->is_public = true;
      $list_christmasShopping->user_uuid = $user->uuid;
      $list_christmasShopping->save();
    }
}
