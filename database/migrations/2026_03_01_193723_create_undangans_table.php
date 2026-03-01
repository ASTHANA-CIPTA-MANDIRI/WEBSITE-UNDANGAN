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
        Schema::create('tabel_undangan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fkid_user')->constrained('users');
            $table->foreignId('fkid_template_undangan')->constrained('tabel_template_undangan')->cascadeOnDelete();
            $table->string('slug')->unique();
            $table->json('data_event_undangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_undangan');
    }
};
