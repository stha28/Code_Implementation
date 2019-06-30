<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Paymentway');
            $table->string('Price');
            $table->bigInteger('Userid')->unsigned();
            $table->foreign('Userid')->references('id')->on('users')
            ->onDelete('cascade');
            $table->bigInteger('Bikeid')->unsigned();
            $table->foreign('Bikeid')->references('id')->on('bikes')
            ->onDelete('cascade');
            $table->string('PickUpLocation');
            $table->string('DropoffLocation');
            $table->date('PickupDate');
            $table->date('DropoffDate');
            $table->string('Days');
            $table->string('Contact');
            $table->string('Quantity');


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
        Schema::dropIfExists('rentings');
    }
}
