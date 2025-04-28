<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('drinks', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->text('description')->nullable();
      $table->decimal('price', 8, 2);
      $table->timestamps();
      $table->text('img')->nullable(); // tilføjet img kolonne
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('drinks');
  }
};
