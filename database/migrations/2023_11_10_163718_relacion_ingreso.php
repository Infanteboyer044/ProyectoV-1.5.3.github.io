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
        Schema::table('ingresos', function (Blueprint $table) {
         
            $table->foreign('oficina_id')->references('id')->on('oficinas');
            $table->foreign('tipingresos_id')->references('id')->on('tipingresos');
            $table->foreign('comp_id')->references('id')->on('comps');

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
