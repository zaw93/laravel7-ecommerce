<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'orderdate',
    'voucherno',
    'total',
    'note',
    'status',
    'user_id'
  ];

  public function items()
  {
    return $this->belongsToMany(Item::class)
      ->withPivot('qty')
      ->withTimestamps();
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
