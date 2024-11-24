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
        Schema::create('tbl_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('KODEBRG',10);
            $table->string('NAMABRG',100);
            $table->string('SATUAN',10);
            $table->integer('HARGABELI');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_barangs');
    }
};
