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
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo')->nullable(false);
            $table->string('fecha')->nullable(false);
            
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('transporte_id')->nullable();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('set null');

            $table->foreign('transporte_id')
            ->references('id')
            ->on('transportes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('obervacion')->nullable(true);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('mantenimientos');
    }
};
