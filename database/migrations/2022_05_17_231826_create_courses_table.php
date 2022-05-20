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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('forecast_id');
            $table->enum('course1', ['1', '2', '3', '4', '5', '6']);
            $table->enum('course2', ['1', '2', '3', '4', '5', '6']);
            $table->enum('course3', ['1', '2', '3', '4', '5', '6']);
            $table->enum('course4', ['1', '2', '3', '4', '5', '6']);
            $table->enum('course5', ['1', '2', '3', '4', '5', '6']);
            $table->enum('course6', ['1', '2', '3', '4', '5', '6']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
