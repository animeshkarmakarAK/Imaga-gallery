<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageDeatailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imageDeatails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('image_id')->index();
            $table->string('comments')->nullable();
            $table->string('photograhy_technique')->nullable();
            $table->timestamps();

            $table->foreign('image_id')->references('id')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imageDeatails');
    }
}
