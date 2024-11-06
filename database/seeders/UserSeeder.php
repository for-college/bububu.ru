<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    User::create([
      'surname' => 'Lastname',
      'name' => 'Firstname',
      'patronymic' => 'Middlename',
      'sex' => 1,
      'password' => '79888872321',
      'phone' => '79877772123',
      'birthday' => '2004-05-10',
      'email' => 'admin@admin.com',
      'role_id' => Role::where('code', 'admin')->first()->id,
      'nickname' => 'adminishe',
      'api_token' => 1
    ]);

    User::create([
      'surname' => 'MSName',
      'name' => 'Mname',
      'patronymic' => 'MMiddleeeas',
      'sex' => 1,
      'phone' => '79888872321',
      'password' => '79888872321',
      'birthday' => '2002-02-20',
      'email' => 'manager@manager.com',
      'role_id' => Role::where('code', 'manager')->first()->id,
      'nickname' => 'managershe',
      'api_token' => '2'
    ]);

    User::create([
      'surname' => 'Stefan',
      'name' => 'Alex',
      'sex' => 1,
      'phone' => '79234872442',
      'password' => '79888872321',
      'birthday' => '2000-01-30',
      'email' => 'user@user.com',
      'role_id' => Role::where('code', 'user')->first()->id,
      'nickname' => 'user1',
      'api_token' => '3'
    ]);
  }
}
