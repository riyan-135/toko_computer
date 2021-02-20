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
            $table->unsignedBigInteger('seller_users_id');
            $table->string('product_name');
            $table->text('image');
            $table->text('description');
            $table->integer('stock');
            $table->integer('price');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('seller_users_id')->references('id')->on('seller_users');
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
