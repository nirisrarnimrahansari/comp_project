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
        Schema::create('prospects', function (Blueprint $table) 
            {
                    $table->id();
                    $table->string('name');
                    $table->string('organization');
                    $table->string('address');
                    $table->string('city');
                    $table->unsignedBigInteger('state_id')->nullable();
                    $table->unsignedBigInteger('country_id')->nullable();
                    $table->bigInteger('cell');
                    $table->bigInteger('phone');
                    $table->bigInteger('whatsapp_no');
                    $table->string('email_id');
                    $table->date('deleted_date')->nullable();
                    $table->timestamps();
                    $table->foreign('state_id')->references('id')->on('states')->onDelete('SET NULL');
                    $table->foreign('country_id')->references('id')->on('countries')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prospects');
    }
};
