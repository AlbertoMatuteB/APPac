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
            $table->string("genero", 10);
            $table->string("curp",18);
            $table->string("diagnostico");
            $table->string("tipoSangre");
            $table->string("email");
            $table->string("telefono");
            $table->string("municipio", 30);
            $table->text("observacion");
            $table->timestamps();

            // $table->string("sexo", 10);
            // $table->string("telefono");
            // $table->string("direccion", 200);
            // $table->foreignId("escolaridade_id")
            //     ->nullable()
            //     ->constrained()
            //     ->onUpdate('cascade')
            //     ->onDelete('set null');
            // $table->string("estatus", 50)
            //     ->nullable();
            // $table->boolean('seguimiento')->default(1);
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
        Schema::dropIfExists('beneficiarios');
    }
}
