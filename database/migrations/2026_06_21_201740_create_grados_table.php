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
        Schema::create('grados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('paralelo_id');
            $table->unsignedBigInteger('nivel_id');
            $table->unsignedBigInteger('gestion_id');
            $table->boolean('estado')->default(true);
            
            $table->foreign('paralelo_id')->references('id')->on('paralelos')->onDelete('cascade');
            $table->foreign('nivel_id')->references('id')->on('nivels')->onDelete('cascade');
            $table->foreign('gestion_id')->references('id')->on('gestions')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grados');
    }
};
