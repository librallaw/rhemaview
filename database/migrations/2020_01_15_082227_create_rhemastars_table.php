<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRhemastarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rhemastars', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('image');
                $table->string('name');
                $table->string('country');
                $table->integer('month');
                $table->integer('year');
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
        Schema::dropIfExists('rhemastars');
    }
}
