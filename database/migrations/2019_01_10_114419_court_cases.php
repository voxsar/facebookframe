<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CourtCases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('court_cases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('caseno')->unique();
            $table->string('client_id');
            $table->string('casetype_id');
            $table->integer('court_id');
            $table->string('description');
            $table->string('sdescription');
            $table->string('tdescription');
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
        Schema::dropIfExists('court_cases');
    }
}
