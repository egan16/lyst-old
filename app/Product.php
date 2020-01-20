<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function store(){
    return $this->hasOne('App\Store');
  }

  public function categories()
  {
    return $this->belongsToMany('App\Category', 'product_category');
  }

  // //for one category
  //   public function hasCategory($category)
  //   {
  //     return null !== $this->categories()->where('name', $category)->first();
  //   }
  //   //for array of categories
  //   public function hasAnyCategory($categories)
  //   {
  //     return null !== $this->categories()->whereIn('name', $category)->first();
  //   }

    public function lists()
    {
      return $this->belongsToMany('App\ListModel', 'product_list', 'product_id', 'list_id');
    }

    // //for one list
    //   public function hasList($list)
    //   {
    //     return null !== $this->lists()->where('name', $list)->first();
    //   }
    //   //for array of lists
    //   public function hasAnyList($list)
    //   {
    //     return null !== $this->lists()->whereIn('name', $list)->first();
    //   }

}
