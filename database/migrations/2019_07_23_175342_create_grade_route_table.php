<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeRouteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_route', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('route_id')->unsigned()->nullable();
            $table->foreign('route_id')->references('id')
                ->on('routes')->onDelete('cascade');

            $table->integer('grade_id')->unsigned()->nullable();
            $table->foreign('grade_id')->references('id')
                ->on('grades')->onDelete('cascade');

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
        Schema::dropIfExists('grade_route');
    }
}
