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
            $table->string('title');
            $table->longText('short_description');
            $table->longText('description');
            $table->double('regular_price', 8, 2);
            $table->double('sale_price', 8, 2);
            $table->string('affiliate_link');
            $table->boolean('stock_status');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('ecommerce_id');

            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            $table->foreign('ecommerce_id')->references('id')->on('ecommerces');
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
