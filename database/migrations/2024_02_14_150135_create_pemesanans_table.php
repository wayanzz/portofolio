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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id');
            // $table->timestamp('waktu_pemesanan');
            $table->integer('jumlah');
            $table->foreignId('barang_id');
            $table->string('total_harga')->nullable();
            $table->enum('status', ['menunggu', 'sukses', 'gagal', 'diproses', 'terkirim'])->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
