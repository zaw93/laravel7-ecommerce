<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
  use SoftDeletes;

  protected $fillable = ['name', 'photo'];

  // Defining an accessor
  public function getPhotoPathAttribute()
  {
    return '/storage/' . $this->photo;
  }

  public function subcategories()
  {
    return $this->hasMany(Subcategory::class);
  }

  public function items()
  {
    return $this->hasManyThrough('App\Item', '\App\Subcategory');
  }
}
