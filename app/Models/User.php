<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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


  protected function casts(): array
  {
    return [
      'password' => 'hashed',
//      'email_verified_at' => false
    ];
  }

  public function role(): BelongsTo
  {
    return $this->belongsTo(Role::class);
  }
}
