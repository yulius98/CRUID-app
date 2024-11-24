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
        Schema::create('tbl_hbeli_notes', function (Blueprint $table) {
            $table->id();
            $table->string('NOTRANSAKSI',10);
            $table->string('KODESPL',10);
            $table->dateTime('TGLBELI');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_hbeli_notes');
    }
};
