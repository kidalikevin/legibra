<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Labtest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('labtest', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_names');
            $table->string('test');
            $table->string('location');
            $table->string('email');
            $table->string('test_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('labtest');
    }
}
