<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_products_table.php
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama produk, e.g., "angonTernak"
            $table->string('slug')->unique(); // Untuk URL yang cantik, e.g., "angon-ternak"
            $table->string('tagline'); // Deskripsi singkat
            $table->string('icon_path')->nullable(); // Path ke gambar ikon produk
            $table->boolean('is_active')->default(true); // Untuk menonaktifkan produk jika perlu
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
