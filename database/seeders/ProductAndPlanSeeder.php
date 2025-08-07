<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; // Panggil model Product

class ProductAndPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Buat Produk AngonTernak
        $angonTernak = Product::create([
            'name' => 'angonTernak',
            'slug' => 'angon-ternak',
            'tagline' => 'Manajemen peternakan modern.',
            'icon_path' => 'product-icons/angonternak.png', // Sesuaikan path jika perlu
            'is_active' => true,
        ]);

        // Buat Paket untuk AngonTernak
        $angonTernak->plans()->create([
            'name' => 'Paket Starter',
            'slug' => 'angon-ternak-starter',
            'price' => 75000,
            'duration_in_months' => 1,
            'features' => ['Manajemen 50 Ternak', 'Laporan Dasar', 'Support Komunitas'],
        ]);

        // 2. Buat Produk dataCerdas
        $dataCerdas = Product::create([
            'name' => 'dataCerdas',
            'slug' => 'data-cerdas',
            'tagline' => 'Digitalisasi administrasi desa.',
            'icon_path' => 'product-icons/datacerdas.png',
            'is_active' => true,
        ]);

        // Buat Paket untuk dataCerdas
        $dataCerdas->plans()->create([
            'name' => 'Paket Desa Maju',
            'slug' => 'data-cerdas-maju',
            'price' => 250000,
            'duration_in_months' => 1,
            'features' => ['Administrasi Kependudukan', 'Manajemen Surat', 'Fitur Posyandu', 'LPJ Otomatis (AI)'],
        ]);

        // 3. Buat Produk evencapt
        $evencapt = Product::create([
            'name' => 'evencapt',
            'slug' => 'evencapt',
            'tagline' => 'Event Capture & Management.',
            'icon_path' => 'product-icons/evencapt.png',
            'is_active' => true,
        ]);
         // Buat Paket untuk evencapt
         $evencapt->plans()->create([
            'name' => 'Paket Event Pro',
            'slug' => 'evencapt-pro',
            'price' => 150000,
            'duration_in_months' => 1,
            'features' => ['Manajemen Peserta', 'Ticketing Online', 'Laporan Real-time'],
        ]);
    }
}