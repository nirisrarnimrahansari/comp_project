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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('Plannig_package_name');
            $table->unsignedBigInteger('work_name_id')->nullable();
            $table->string('we_provide');
            $table->string('we_deliver');
            $table->string('rate_id')->nullable();
            $table->date('deleted_date')->nullable();
            $table->timestamps();
            $table->foreign('work_name_id')->references('id')->on('work_names')->onDelete('SET NULL');
            });	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
};
