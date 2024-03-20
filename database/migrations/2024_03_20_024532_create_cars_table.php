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
        Schema::create('cars', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('description');
            $table->string('model');
            $table->date('produced_on');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('mf_id'); // Thêm cột mf_id
            $table->foreign('mf_id')->references('id')->on('mfs'); // Thêm khóa ngoại
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
        Schema::dropIfExists('cars');
    }
};