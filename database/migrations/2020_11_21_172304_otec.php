<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Otec extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otecs', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_creacion');
            $table->string('rut')->unique();
            $table->string('razon_social');
            $table->string('nombre_fantasia');
            $table->string('direccion');
            $table->string('comuna');
            $table->string('region');
            $table->string('telefono');
            $table->string('telefono_2')->nullable();
            $table->string('email');
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
        //
    }
}
