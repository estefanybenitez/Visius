<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('id_empleado');
            $table->string('nombre_empleado', 50);
            $table->string('correo', 50);
            $table->string('telefono', 9);
            $table->date('fecha_nacimiento');
            $table->date('fecha_ingreso');
            $table->string('direccion', 150);
            //crear llaves foraneas
            $table->bigInteger('id_usuario')->unsigned();
            $table->bigInteger('id_rol')->unsigned();
            $table->bigInteger('id_area')->unsigned();
            //llamar llaves
            //fk tabla usuario
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            //fk tabla roles
            $table->foreign('id_rol')->references('id_rol')->on('roles')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            //fk de tabla area
            $table->foreign('id_area')->references('id_area')->on('area')
            ->onDelete('cascade')
            ->onUpdate('cascade');


            



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
