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
            $table->string('Partname');
            $table->string('Partdetail');
            $table->string('Partimage');
            $table->float('Price');
            $table->integer('Quantity');
            $table->enum('Status',['Available','Booked','Bought'])->default('Available');
            $table->Biginteger('Userid')->unsigned();
            $table->foreign('Userid')->references('id')->on('users')->onDelete('cascade');
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
