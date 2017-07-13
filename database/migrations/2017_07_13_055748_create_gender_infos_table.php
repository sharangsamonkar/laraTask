<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenderInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gender_infos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('first');
          $table->string('last');
          $table->string('gender');

          $table->foreign('id')->references('id')->on('email_infos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gender_infos');
    }
}
