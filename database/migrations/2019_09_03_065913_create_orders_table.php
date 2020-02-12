<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('orderNumber');
            $table->string('guest_ipaddress')->references('guest_ipaddress')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->string('paymentType');      
            $table->boolean('status')->default('0');
            $table->integer('shipper_id')->references('id')->on('shippers')->onDelete('cascade')->onUpdate('cascade')->nullable(); 
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
        Schema::dropIfExists('orders');
    }
}
