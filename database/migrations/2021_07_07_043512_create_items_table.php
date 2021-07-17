<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('items', function (Blueprint $table) {
      $table->id();
      $table->string('codeno');
      $table->string('name');
      $table->text('photo');
      $table->integer('price');
      $table->integer('discount')->nullable();
      $table->text('description');
      $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
      $table->foreignId('subcategory_id')->constrained('subcategories')->onDelete('cascade');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('items');
  }
}
