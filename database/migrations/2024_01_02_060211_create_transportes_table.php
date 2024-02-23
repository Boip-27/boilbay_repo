<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('transportes', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('placa');
            $table->string('chasis');
            $table->string('marca');
            $table->string('modelo');
            $table->string('motor');
            $table->integer('kilometraje');
            $table->integer('cilindraje');
            $table->string('carga');
            $table->integer('pasajeros');

            $table->unsignedBigInteger('user_id')->unique()->nullable();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('set null')
            ->onUpdate('cascade');
            
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('transportes');
    }
};
