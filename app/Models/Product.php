<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
  protected $fillable = [
    'name',
    'description',
    'price',
    'quantity',
    'discount',
    'category_id',
  ];

  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }

  public function images(): HasMany
  {
    return $this->hasMany(Photo::class);
  }

  public function orderItems(): HasMany
  {
    return $this->hasMany(OrderItem::class);
  }

  public function inOrders()
  {
    return $this->belongsToMany(Order::class, OrderItem::class)
      ->using(OrderItem::class);
  }

  public function cartItems(): HasMany
  {
    return $this->hasMany(CartItem::class);
  }

  public function inUserCarts(): BelongsToMany
  {
    return $this->belongsToMany(User::class, CartItem::class);
  }
}
