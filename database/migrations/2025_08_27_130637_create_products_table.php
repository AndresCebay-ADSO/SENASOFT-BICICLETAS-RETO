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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nameProd');//Se añadio recordar añadir a el MER
            $table->string('codeProd')->unique();
            $table->string('markProd');
            $table->string('colorProd');
            $table->string('statusProd');
            $table->enum('availabilityProd', ['Disponible', 'No disponible']);
            $table->decimal('priceHourProd', 8, 2);
            $table->string('imgProd')->nullable();
            $table->decimal('pesoKgProd', 8, 2);
            $table->integer('stockProd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};