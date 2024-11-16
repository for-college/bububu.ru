<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  protected $fillable = [
    'user_id',
    'city',
    'street',
    'house',
    'apartment',
    'entrance',
    'intercom',
    'floor',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
