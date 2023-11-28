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
        Schema::create('comps', function (Blueprint $table) {
            $table->id();
            $table->string('TipComp', 100);
            $table->string('NumComp',50);
            $table->date('FechComp');
            $table->string('Direccion',300);
            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comps');
    }
};
