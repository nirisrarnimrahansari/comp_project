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
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('name_id')->nullable();
            $table->bigInteger('price');
            $table->bigInteger('value')->nullable();
            $table->unsignedBigInteger('measurement_id')->nullable();
            $table->string('condition');
            $table->date('deleted_date')->nullable();
            $table->timestamps();
            $table->foreign('measurement_id')->references('id')->on('measurements')->onDelete('SET NULL');
            $table->foreign('name_id')->references('id')->on('work_names')->onDelete('SET NULL');

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rates');
    }
};
