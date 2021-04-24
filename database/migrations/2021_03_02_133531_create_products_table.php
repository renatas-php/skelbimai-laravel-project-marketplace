<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('user_id');
            $table->string('title');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->boolean('condition');
            $table->integer('qty');
            $table->text('description');
            $table->integer('price');
            $table->integer('shipping_price');
            $table->integer('shipping_length');
            $table->integer('city_id');
            $table->string('valid_until');
            $table->integer('views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
