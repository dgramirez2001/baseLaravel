<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarioRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darcangel.usuario_rol', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id','fk_usuariorol_rol')->references('id')->on('darcangel.rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id','fk_usuariorol_usuario')->references('id')->on('darcangel.usuario')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('darcangel.usuario_rol');
    }
}
