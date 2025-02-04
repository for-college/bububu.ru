<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
  protected $fillable = ['code'];

  public function orders()
  {
    return $this->hasMany(Order::class);
  }
}
