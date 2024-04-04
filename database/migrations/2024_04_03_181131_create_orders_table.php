<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('customerId');
            $table->string('customerName');
            $table->string('customerEmail');
            $table->string('orderId');
            $table->decimal('total', 10, 2);
            $table->string('productID');
            $table->boolean('orderStatus',[0,1,2])->default(0)->comment("0=pending,1=complete,2=cancel");
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
};
