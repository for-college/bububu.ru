<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('addresses', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained();
      $table->string('city', 32);
      $table->string('street', 64);
      $table->string('house', 8);
      $table->string('apartment', 8)->nullable();
      $table->string('entrance', 8)->nullable();
      $table->string('intercom')->nullable();
      $table->integer('floor')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('addresses');
  }
};
