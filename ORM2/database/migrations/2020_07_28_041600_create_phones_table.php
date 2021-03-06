<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number');
            $table->integer('user_id');
    }

    /**
     * Reverse the migrations.
     *
     * @return voi
     */
    public function down()
    {
        Schema::dropIfExists('phones');
    }
}
