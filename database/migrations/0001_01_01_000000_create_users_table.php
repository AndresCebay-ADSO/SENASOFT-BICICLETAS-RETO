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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nameUser');//Se añadio recordar añadir a el MER
            $table->string('lastnameUser');
            $table->string('cardCodeUser')->nullable();;
            $table->enum('typeDocUser', ['C.C', 'T.I'])->nullable();;
            $table->integer('numDocUser');
            $table->integer('numPhoneUser')->nullable();;
            $table->string('emailUser')->unique();
            $table->string('passUser');
            $table->integer('stratumUser')->nullable();;
            $table->integer('ageUser')->nullable();;
            $table->enum('genderUser', ['M', 'F'])->nullable();;
            $table->string('addressUser')->nullable();;
            $table->string('idRolUser')->default('cliente');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};