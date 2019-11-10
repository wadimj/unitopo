<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->default(\App\Models\Topo\Region::TYPE_REGION);
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('is_polygon')->unsigned()->nullable();
            $table->integer('geog_collection_tag_id')->unsigned()->nullable();
            $table->nestedSet();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('geog_collection_tag_id')->references('id')
                ->on('geog_tags')->onDelete('cascade');

            $table->foreign('is_polygon')->references('id')
                ->on('geog_polygon')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
