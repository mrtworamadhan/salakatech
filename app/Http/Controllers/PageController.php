<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Panggil model Product kita

class PageController extends Controller
{
    /**
     * Menampilkan halaman utama (homepage).
     */
    public function home()
    {
        // Ambil semua produk yang statusnya aktif dari database
        $products = Product::where('is_active', true)->get();

        // Kirim data products ke view 'pages.home'
        return view('pages.home', [
            'products' => $products
        ]);
    }
    public function productDetail(Product $product)
    {
        // Karena kita menggunakan Route Model Binding, Laravel sudah otomatis
        // memberikan kita objek $product yang sesuai dari URL.

        // Kita hanya perlu mengambil paket-paket (plans) yang terkait dengan produk ini.
        $product->load('plans'); // 'plans' adalah nama relasi di model Product

        // Kirim data produk ke view
        return view('pages.product-detail', [
            'product' => $product
        ]);
    }
}