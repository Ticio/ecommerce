<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
  public function products()
  {
    return $this->hasMany("App\Product");
  }

  public function user()
  {
    return $this->belongsTo("App\User");
  }

  public function type()
  {
    return $this->belongsTo("App\ShopType");
  }
}
