<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
    'orderdate',
    'voucherno',
    'total',
    'note',
    'status',
    'user_id'
  ];
}
