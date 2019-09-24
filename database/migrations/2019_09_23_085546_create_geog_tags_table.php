<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeogTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geog_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('k');
            $table->string('v');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('geog_taggables', function (Blueprint $table){
            $table->increments('id');
            $table->integer('geog_tag_id')->unsigned()->nullable();
            $table->morphs('geog_taggable');
            //$table->string('geog_taggable_type');
            //$table->uuid('geog_taggable_uuid');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('geog_tag_id')->references('id')
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
        Schema::dropIfExists('geog_taggables');
        Schema::dropIfExists('geog_tags');
    }
}
