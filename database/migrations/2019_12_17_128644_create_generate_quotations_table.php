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
        Schema::create('generate_quotations', function (Blueprint $table) {
            $table->id();
            $table->string('work_name')->nullable();
            $table->string('work_type')->nullable();
            $table->string('side')->nullable();
            $table->string('upload_plan')->nullable();
            $table->string('refrence_file')->nullable();
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->string('comment')->nullable();
            $table->date('deleted_date')->nullable();
            $table->timestamps();
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generate_quotations');
    }
};
