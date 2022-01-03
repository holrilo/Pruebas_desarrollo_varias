<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('key_usuario', 100);
            $table->string('nom_usuario_1', 45);
            $table->string('nom_usuario_2', 45);
            $table->string('ape_usuario_1', 45);
            $table->string('ape_usuario_2', 45);
            $table->string('correo_usuario', 45);
            $table->string('tel_usuario', 45);
            $table->string('clav_usuasio', 45);
            

            
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
        Schema::dropIfExists('usuario');
    }
}