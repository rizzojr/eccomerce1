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
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('brand_id')->references('id')->on('brands')->onDelete('cascade')->onUpdate('cascade');   
            $table->string('description');
            $table->integer('price');
            $table->string('image');
            $table->timestamps();
            
            //foreignkeys
            // $table->foreign('category_id')
            // $table->foreign('brand_id')    

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
