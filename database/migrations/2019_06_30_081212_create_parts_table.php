<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Partsname');
            $table->string('Partsdetail');
            $table->string('Partsimage');
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
        Schema::dropIfExists('parts');
    }
}
