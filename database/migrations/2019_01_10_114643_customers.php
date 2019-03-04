<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->default("email");
            $table->string('pasword')->default("email");
            $table->string('fname');
            $table->string('lname');
            $table->string('oname');
            $table->string('address');
            $table->string('sfname');
            $table->string('slname');
            $table->string('soname');
            $table->string('saddress');
            $table->string('tfname');
            $table->string('tlname');
            $table->string('toname');
            $table->string('taddress');
            $table->string('mobile');
            $table->string('land');
            $table->integer('type')->default(0);
            $table->string('nic')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        //
        Schema::dropIfExists('customers');
    }
}
