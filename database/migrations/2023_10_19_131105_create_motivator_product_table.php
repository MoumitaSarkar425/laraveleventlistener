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
        Schema::create('motivator_product', function (Blueprint $table) {
            $table->id();
            $table->double('cart_requirement', 8, 2);
            $table->string('product_title');
            $table->string('varinat_id');
            $table->double('price',8,2);
            $table->string('quantity');
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
        Schema::dropIfExists('motivator_product');
    }
};
