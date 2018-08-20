<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 90)->default("");
            $table->string('description', 512)->default("");
            $table->tinyInteger('status_id');
            $table->unsignedDecimal('price', 8, 2)->default(0.0);
            $table->tinyInteger('discount')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *  rollback
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
