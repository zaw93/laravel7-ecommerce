<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class GalleryPhoto extends Model
{

  protected $fillable = ['photo', 'item_id'];

  // Defining an accessor
  public function getPhotoPathAttribute()
  {
    return '/storage/' . $this->photo;
  }

  public function item()
  {
    return $this->belongsTo(Item::class);
  }
}
