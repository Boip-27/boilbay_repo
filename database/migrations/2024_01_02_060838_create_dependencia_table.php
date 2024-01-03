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
        Schema::create('dependencia', function (Blueprint $table) {
            $table->id();
            $table->string('provincia');
            $table->integer('num_distrito');
            $table->string('parroquia');
            $table->string('cod_distrito');
            $table->string('distrito');
            $table->integer('num_circuito');
            $table->string('cod_circuito');
            $table->string('circuito');
            $table->integer('num_subcircuito');
            $table->string('cod_subcircuito');
            $table->string('subcircuito');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependencia');
    }
};
