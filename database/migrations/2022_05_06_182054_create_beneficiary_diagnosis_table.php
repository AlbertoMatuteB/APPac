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
        Schema::create('beneficiary_diagnosis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->references('id')->on('beneficiary')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('diagnosis_id')->references('id')->on('diagnosis')->onUpdate('cascade')->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiary_diagnosis');
    }
};
