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
        Schema::create('patterns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('forecast_id');
            $table->enum('pattern_num', ['1', '2']);
            $table->enum('first', ['1', '2', '3', '4', '5', '6']);
            $table->enum('second', ['1', '2', '3', '4', '5', '6']);
            $table->enum('third', ['1', '2', '3', '4', '5', '6']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patterns');
    }
};
