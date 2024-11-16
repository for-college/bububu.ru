<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    OrderStatus::findOrCreate(['code' => 'new']);
    OrderStatus::findOrCreate(['code' => 'inAssembly']);
    OrderStatus::findOrCreate(['code' => 'inTransfer']);
    OrderStatus::findOrCreate(['code' => 'onWay']);
    OrderStatus::findOrCreate(['code' => 'delivered']);
    OrderStatus::findOrCreate(['code' => 'cancelled']);
    OrderStatus::findOrCreate(['code' => 'received']);
  }
}
