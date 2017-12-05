<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonUserOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_user_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->integer('member_number');
            $table->string('phone_number');
            $table->integer('pin_number');
            $table->string('street_address');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->string('card_number');
            $table->integer('expiration');
            $table->integer('security_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
