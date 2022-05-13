<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->id();
            $table->string("nombreBeneficiario", 140);
            $table->date("fechaNacimiento");
            $table->string("genero", 15);
            $table->string("curp",18);
            $table->string("diagnostico");
            $table->string("tipoSangre");
            $table->string("email");
            $table->string("telefono");
            $table->string("municipio", 30);
            $table->text("observacion");
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
        Schema::dropIfExists('beneficiarios');
    }
}
