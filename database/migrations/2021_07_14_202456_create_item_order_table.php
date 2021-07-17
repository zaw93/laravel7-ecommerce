<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemOrderTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('item_order', function (Blueprint $table) {
      $table->id();
      $table->foreignId('item_id')->constrained('items')->onDelete('cascade');
      $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
      $table->integer('qty');
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
    Schema::dropIfExists('item_order');
  }
}
