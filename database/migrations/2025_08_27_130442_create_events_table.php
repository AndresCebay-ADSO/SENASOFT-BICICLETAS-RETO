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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('nameEvent');//Se añadio recordar añadir a el MER
            $table->string('descriptionEvent')->unique();
            $table->date('dateEvent');
            $table->string('pointEvent');
            $table->string('passUser');
            $table->integer('capacityEvent');
            $table->string('statusEvent');
            $table->unsignedBigInteger('idUserEvent'); // Cambia boolean por unsignedBigInteger
            $table->foreign('idUserEvent')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};