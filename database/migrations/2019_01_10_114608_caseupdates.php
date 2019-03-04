<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Caseupdates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('case_updates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('court_case_id');
            $table->string('caseupdateno')->unique();
            $table->string('case');
            $table->string('title');
            $table->longText('description');
            $table->longText('audiofile_location')->nullable();
            $table->longText('evidence')->nullable();
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
        Schema::dropIfExists('case_updates');
    }
}
