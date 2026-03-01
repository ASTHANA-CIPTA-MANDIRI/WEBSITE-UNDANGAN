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
        Schema::create('tabel_tamu_undangan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fkid_undangan')->constrained('tabel_undangan')->onDelete('cascade');
            $table->string('nama_tamu');
            $table->string('slug');
            $table->boolean('is_opened')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_tamu_undangan');
    }
};
