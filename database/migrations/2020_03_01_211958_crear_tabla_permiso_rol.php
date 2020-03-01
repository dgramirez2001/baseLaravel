<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPermisoRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darcangel.permiso_rol', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id','fk_permisorol_rol')->references('id')->on('darcangel.rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id','fk_permisorol_permiso')->references('id')->on('darcangel.permiso')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('st_status')->unsigned()->default(1);
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
        Schema::dropIfExists('darcangel.permiso_rol');
    }
}
