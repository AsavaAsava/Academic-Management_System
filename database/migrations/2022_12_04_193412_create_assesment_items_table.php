<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assesment_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('course')->unsigned()->index()->nullable();
           $table->foreign('course')->references('id')->on('courses');
           $table->bigInteger('group')->unsigned()->index()->nullable();
           $table->foreign('group')->references('id')->on('groups');
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
        Schema::dropIfExists('assesment_items');
    }
};
