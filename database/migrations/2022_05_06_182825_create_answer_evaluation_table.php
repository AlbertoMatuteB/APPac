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
        Schema::create('answer_evaluation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activity_id')->constrained();
            $table->foreignId('evaluation_id')->constrained();  
            $table->foreignId('beneficiary_id')->constrained(); 
            $table->string('answer');
            $table->text('comments');
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
        Schema::dropIfExists('answer_evaluation');
    }
};
