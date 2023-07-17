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
        Schema::create('tb_pakaian', function (Blueprint $table) {
            $table->increments('id_pakaian');
            $table->string('transaksi_pakaian', 11);
            $table->string('jenis_pakaian', 15);
            $table->string('jumlah_pakaian', 11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pakaian');
    }
};
