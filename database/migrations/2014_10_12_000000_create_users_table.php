<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('phoneno');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('address');
            $table->string('city');
            $table->string('postalcode');
            $table->string('country');
            $table->string('code');
            $table->integer('status');
            $table->integer('activate');
            $table->integer('is_deleted');
            $table->integer('payment');
            $table->string('transactionid');
            $table->string('stripe_customer_id');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
