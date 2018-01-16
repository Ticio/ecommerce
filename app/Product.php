<?php

namespace App;
use App\Model;

class Product extends Model
{
      protected $guarded = [];


      public function category()
      {
        return $this->belongsTo('App\ProductCategory');
      }

      public function type()
      {
        return $this->belongsTo('App\ProductType');
      }

      public function shop()
      {
        return $this->belongsTo('App\Shop');
      }

      public function user()
      {
        return $this->belongsTo('App\User');
      }
}
