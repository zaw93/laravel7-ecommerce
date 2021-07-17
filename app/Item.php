<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'codeno',
    'name',
    'photo',
    'price',
    'discount',
    'description',
    'brand_id',
    'subcategory_id',
  ];

  // Defining an accessor
  public function getPhotoPathAttribute()
  {
    return '/storage/' . $this->photo;
  }

  public function getTruncNameAttribute()
  {
    return Str::limit($this->name, 20);
  }

  public function brand()
  {
    return $this->belongsTo(Brand::class);
  }

  public function subcategory()
  {
    return $this->belongsTo(Subcategory::class);
  }

  public function orders()
  {
    return $this->belongsToMany(Order::class)
      ->withPivot('qty')
      ->withTimestamps();
  }
}
