<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Courttypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('court_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('sname');
            $table->string('tname');
            $table->text('description');
            $table->text('sdescription');
            $table->text('tdescription');
            $table->softDeletesTz();
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
        Schema::dropIfExists('court_types');
    }
}
