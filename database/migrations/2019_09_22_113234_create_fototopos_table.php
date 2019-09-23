<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFototoposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fototopos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('file');
            $table->point('geo_point')->nullable();
            $table->integer('geo_orientation')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('fototopo_route', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('route_id')->unsigned()->nullable();
            $table->foreign('route_id')->references('id')
                ->on('routes')->onDelete('cascade');

            $table->integer('fototopo_id')->unsigned()->nullable();
            $table->foreign('fototopo_id')->references('id')
                ->on('fototopos')->onDelete('cascade');

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
        Schema::dropIfExists('fototopo_route');
        Schema::dropIfExists('fototopos');
    }
}
