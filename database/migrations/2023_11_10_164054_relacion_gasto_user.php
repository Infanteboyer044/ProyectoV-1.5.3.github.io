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
        Schema::table('gastos', function (Blueprint $table) {
         
            $table->foreign('tipgasto_id')->references('id')->on('tipgstos');
            $table->foreign('comp_id')->references('id')->on('comps');
            $table->foreign('oficinas_id')->references('id')->on('oficinas');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
