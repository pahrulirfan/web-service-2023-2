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
        Schema::create('biaya15', function (Blueprint $table) {
            $table->id();
            $table->string('nama_konsumen', 50);
            $table->string('email_konsumen', 50);
            $table->string('jumlah_biaya', 200);
            $table->date('tanggal_transaksi');
            $table->string('keterangan', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biaya15');
    }
};
