<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
  /** @use HasFactory<\Database\Factories\UserFactory> */
  use HasFactory, Notifiable, HasApiTokens;

  protected $fillable = [
    'surname',
    'name',
    'patronymic',
    'password',
    'sex',
    'phone',
    'birthday',
    'email',
    'role_id',
    'nickname',
    'avatar',
    'api_token'
  ];


  protected $hidden = [
    'password',
    'api_token',
  ];

  public function role(): BelongsTo
  {
    return $this->belongsTo(Role::class);
  }

  public function addresses(): HasMany
  {
    return $this->hasMany(Address::class);
  }

  public function orders(): HasMany
  {
    return $this->hasMany(Order::class);
  }

  public function orderedProducts(): BelongsToMany
  {
    return $this->belongsToMany(Product::class, Order::class);
  }

  public function cartsItems(): HasMany
  {
    return $this->hasMany(CartItem::class);
  }

  public function productsInCart(): BelongsToMany
  {
    return $this->belongsToMany(Product::class, CartItem::class);
  }

  protected function casts(): array
  {
    return [
      'password' => 'hashed',
      'sex' => 'boolean',
    ];
  }
}
