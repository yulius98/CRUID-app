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
        Schema::create('tbl_dbeli_notes', function (Blueprint $table) {
            $table->id();
            $table->string('NOTRANSAKSI',10);
            $table->string('KODEBRG',10);
            $table->integer('HARGABELI');
            $table->integer('QTY');
            $table->integer('DISKON');
            $table->integer('DISKONRP');
            $table->integer('TOTALRP');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_dbeli_notes');
    }
};
