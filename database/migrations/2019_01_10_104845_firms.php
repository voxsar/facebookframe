<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Firms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('firms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firmname')->unique();
            $table->longText('description');
            $table->longText('sdescription');
            $table->longText('tdescription');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletesTz();
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
        Schema::dropIfExists('firms');
    }
}
