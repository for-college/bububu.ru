<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Role::create([
      'name' => 'Администратор',
      'code' => 'admin',
    ]);

    Role::create([
      'name' => 'Менеджер',
      'code' => 'manager',
    ]);

    Role::create([
      'name' => 'Пользователь',
      'code' => 'user',
    ]);
  }
}
