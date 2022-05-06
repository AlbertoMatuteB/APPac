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
        Schema::create('beneficiary', function (Blueprint $table) {
            $table->id();
            $table->foreignId('institution_id')->constrained();
            $table->string('name');
            $table->date('birth_date');
            $table->string('CURP');
            $table->string('genre');
            $table->string('blood_type');
            $table->string('email');
            $table->string('city');
            $table->text('observations');
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
        Schema::dropIfExists('beneficiary');
    }
};
