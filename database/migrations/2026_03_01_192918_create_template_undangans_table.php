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
        Schema::create('tabel_template_undangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_template');
            $table->string('slug')->unique();
            $table->string('kategori_template');
            $table->string('layout_template');
            $table->json('konfigurasi_tema')->nullable();
            $table->string('foto_sampul')->nullable();
            $table->decimal('harga', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_template_undangan');
    }
};
