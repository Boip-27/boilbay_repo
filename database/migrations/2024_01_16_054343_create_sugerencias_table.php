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
        Schema::create('sugerencias', function (Blueprint $table) {
            $table->id();
            $table->string('circuito')->nullable(false);
            $table->string('subcircuito')->nullable(false);
            $table->string('tipo')->nullable(false);
            $table->string('detalle')->nullable(false);
            $table->string('apellidos')->nullable(false);
            $table->string('nombres')->nullable(false);
            $table->string('telefono')->nullable(false);
            $table->timestamps();
        });
    }
    /**

     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sugerencias');
    }
};
