<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('order_line_items', function (Blueprint $table) {
      $table->id();
      $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
      $table->foreignId('drink_id')->constrained('drinks');
      $table->integer('quantity');
      $table->decimal('price', 8, 2);
      $table->timestamps();
      $table->text('img')->nullable(); // tilføjet img kolonne
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('order_line_items');
  }
};
