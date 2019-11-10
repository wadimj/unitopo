<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('description')->nullable();
            $table->integer('region_id')->unsigned()->nullable();
            $table->integer('geog_collection_tag_id')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('region_id')->references('id')
                ->on('regions')->onDelete('cascade');

            $table->foreign('geog_collection_tag_id')->references('id')
                ->on('geog_tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
