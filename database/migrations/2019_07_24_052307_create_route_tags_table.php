<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('route_id')->unsigned()->nullable();
            $table->string('k');
            $table->string('v');
            $table->timestamps();

            $table->foreign('route_id')->references('id')
                ->on('routes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('route_tags');
    }
}
