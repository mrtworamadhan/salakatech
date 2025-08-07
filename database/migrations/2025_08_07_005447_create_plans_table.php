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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            // Menghubungkan ke tabel products
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('name'); // Nama paket, e.g., "Paket Basic"
            $table->string('slug')->unique(); // e.g., "paket-basic"
            $table->integer('price'); // Harga dalam Rupiah (simpan sebagai integer)
            $table->integer('duration_in_months')->default(1); // Durasi langganan
            $table->text('features'); // Fitur-fitur, simpan sebagai JSON atau pisahkan dengan koma
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
