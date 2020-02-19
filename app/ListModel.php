<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListModel extends Model
{
    protected $table = 'lists';

    public function user(){
      return $this->hasOne('App\User');
    }

    public function products()
    {
      return $this->belongsToMany('App\Product', 'product_list', 'list_id', 'product_id');
    }

}
