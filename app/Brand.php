<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
  use SoftDeletes;

  protected $fillable = ['name', 'photo'];

  // Defining an accessor
  public function getPhotoPathAttribute()
  {
    return '/storage/' . $this->photo;
  }

  public function items()
  {
    return $this->hasMany(Item::class);
  }
}
