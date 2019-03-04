<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Menus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('menuname')->unique();
            $table->string('smenuname')->nullable();
            $table->string('tmenuname')->nullable();
            $table->string('menuicon')->default("la-dashboard");
            $table->string('menulink')->default("/");
            $table->boolean('has_submenu')->default(0);
            $table->boolean('is_hidden')->default(0);
            $table->boolean('is_admin')->default(0);
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
        Schema::dropIfExists('menus');
    }
}
