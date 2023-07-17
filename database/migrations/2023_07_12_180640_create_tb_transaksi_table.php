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
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->date('tgl_transaksi');
            $table->string('pelanggan_transaksi', 11);
            $table->string('harga_transaksi', 15);
            $table->string('berat_transaksi', 11);
            $table->date('tgl_transaksi_selesai');
            $table->string('status_transaksi', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksi');
    }
};
