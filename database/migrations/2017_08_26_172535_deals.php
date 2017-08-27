<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Deals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_category');
            $table->integer('type');
            $table->integer('id_region');
            $table->integer('id_city');
            $table->integer('id_district')->nullable();
            $table->string('street')->nullable();
            $table->string('location')->nullable();
            $table->string('loc_x')->nullable();
            $table->string('loc_y')->nullable();
            $table->integer('map')->default(0);
            $table->string('kadastr_number');
            $table->string('registr_number');
            $table->string('to_talin')->nullable();
            $table->integer('published')->default(0);
            $table->integer('spec')->default(0);
            $table->float('price')->nullable();
            $table->float('price_m')->nullable();
            $table->float('area')->nullable();
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
    }
}
