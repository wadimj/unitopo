<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeographicalTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geog_place', function (Blueprint $table) {
            $table->uuid('uuid');
            $table->string('name');
            $table->point('geo');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('geog_way', function (Blueprint $table) {
            $table->uuid('uuid');
            $table->string('name');
            $table->multiLineString('geo');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('geog_polygon', function (Blueprint $table) {
            $table->uuid('uuid');
            $table->string('name');
            $table->point('geo');
            $table->softDeletes();
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
        Schema::dropIfExists('geog_place');
        Schema::dropIfExists('geog_way');
        Schema::dropIfExists('geog_polygon');
    }
}
