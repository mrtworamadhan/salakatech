@extends('layouts.public')

@section('title', 'SalakaTech - Solusi Digital untuk Bisnis Anda')

@section('content')

    {{-- 1. HERO SECTION --}}
    <section class="bg-gradient-to-br from-blue-600 to-indigo-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28 text-center">
            <h1 class="text-4xl lg:text-5xl font-extrabold tracking-tight">Transformasi Digital untuk Bisnis Anda</h1>
            <p class="mt-6 max-w-2xl mx-auto text-lg lg:text-xl text-blue-100">
                Kami membantu UMKM, lembaga, dan instansi untuk bertumbuh dan lebih efisien melalui solusi perangkat lunak yang dirancang khusus untuk kebutuhan Anda.
            </p>
            <div class="mt-8 flex justify-center gap-4">
                <a href="#produk" class="inline-block bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-gray-100 transition">
                    Lihat Produk Kami
                </a>
                <a href="#kontak" class="inline-block bg-blue-500 text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-blue-400 transition">
                    Hubungi Sales
                </a>
            </div>
        </div>
    </section>

    {{-- 2. PRODUK SECTION --}}
    <section id="produk" class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">Produk dan Layanan Unggulan</h2>
                <p class="mt-4 max-w-2xl mx-auto text-gray-600">Solusi siap pakai dan layanan kustom yang dirancang untuk menyelesaikan masalah spesifik di industri Anda.</p>
            </div>
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                {{-- Loop untuk produk dari database --}}
                @foreach ($products as $product)
                    <div class="group bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden hover:shadow-xl transition-all duration-300 flex flex-col">
                        <div class="p-6">
                            <img src="{{ Storage::url($product->icon_path) }}" alt="{{ $product->name }}" class="h-16 w-16 mx-auto mb-5 object-contain">
                            <h3 class="font-bold text-lg text-gray-900 text-center">{{ $product->name }}</h3>
                            <p class="text-sm text-gray-600 mt-2 text-center h-16">{{ $product->tagline }}</p>
                        </div>
                        <div class="mt-auto p-6 bg-gray-50 group-hover:bg-gray-100 transition-all duration-300">
                             <a href="{{ route('product.detail', $product) }}" class="text-blue-600 font-semibold text-sm flex items-center justify-center">
                                <span>Lihat Detail</span>
                                <i data-feather="arrow-right" class="w-4 h-4 ml-2"></i>
                            </a>
                        </div>
                    </div>
                @endforeach

                {{-- Kartu statis untuk "Custom App" --}}
                <div class="group bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="p-6">
                        <img src="{{ asset('img/costumapp.png') }}" alt="Custom App" class="h-16 w-16 mx-auto mb-5 object-contain">
                        <h3 class="font-bold text-lg text-gray-900 text-center">Aplikasi Custom</h3>
                        <p class="text-sm text-gray-600 mt-2 text-center h-16">Punya kebutuhan unik? Kami siap bangun aplikasi web & mobile sesuai proses bisnis Anda.</p>
                    </div>
                    <div class="mt-auto p-6 bg-gray-50 group-hover:bg-gray-100 transition-all duration-300">
                        <a href="https://wa.me/6285772797020" target="_blank" class="text-blue-600 font-semibold text-sm flex items-center justify-center">
                            <span>Diskusikan Sekarang</span>
                            <i data-feather="arrow-right" class="w-4 h-4 ml-2"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- 3. TESTIMONI (OUR CUSTOMER) SECTION --}}
    <section id="portfolio" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">Dipercaya oleh Berbagai Klien</h2>
                <p class="mt-4 max-w-2xl mx-auto text-gray-600">Kami bangga dapat membantu dan menjadi bagian dari kesuksesan mereka.</p>
            </div>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Testimoni 1 --}}
                <div class="bg-white rounded-xl shadow-md p-8">
                    <i data-feather="message-square" class="w-8 h-8 text-blue-500 mb-4"></i>
                    <p class="text-gray-700">"Aplikasi angonTernak sangat membantu manajemen peternakan kami menjadi lebih rapi dan efisien. Laporan jadi cepat dibuat."</p>
                    <div class="mt-6 border-t border-gray-100 pt-5">
                        <p class="font-bold text-gray-800">Pak Agus</p>
                        <p class="text-sm text-gray-500">Koperasi Ternak Maju Bersama</p>
                    </div>
                </div>
                {{-- Testimoni 2 --}}
                <div class="bg-white rounded-xl shadow-md p-8">
                    <i data-feather="users" class="w-8 h-8 text-blue-500 mb-4"></i>
                    <p class="text-gray-700">"Tim SalakaTech sangat responsif dan solusinya bisa disesuaikan dengan kebutuhan organisasi kami. Proses administrasi desa jadi lebih modern."</p>
                    <div class="mt-6 border-t border-gray-100 pt-5">
                        <p class="font-bold text-gray-800">Ibu Rina</p>
                        <p class="text-sm text-gray-500">Lembaga Desa Cipta Karya</p>
                    </div>
                </div>
                {{-- Testimoni 3 --}}
                <div class="bg-white rounded-xl shadow-md p-8">
                    <i data-feather="award" class="w-8 h-8 text-blue-500 mb-4"></i>
                    <p class="text-gray-700">"Sangat puas! Kami pakai evencapt untuk mengelola event internal dan hasilnya memuaskan. Peserta mudah mendaftar dan kami mudah merekapnya."</p>
                    <div class="mt-6 border-t border-gray-100 pt-5">
                        <p class="font-bold text-gray-800">Mas Yoga</p>
                        <p class="text-sm text-gray-500">EO Semarak Pesta</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. KONTAK SECTION --}}
    <section id="kontak" class="py-16 lg:py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900">Punya Pertanyaan?</h2>
            <p class="mt-4 max-w-2xl mx-auto text-gray-600">Kami siap membantu. Hubungi kami melalui detail di bawah ini atau kirim pesan langsung via WhatsApp untuk respon yang lebih cepat.</p>
            
            <div class="mt-10 bg-gray-50 border border-gray-200 rounded-2xl p-8 inline-block text-left">
                <p class="text-lg font-bold text-gray-800">PT CAHYA SALAKA TECH</p>
                <div class="mt-4 space-y-4">
                    <div class="flex items-start">
                        <i data-feather="map-pin" class="w-5 h-5 text-blue-600 mr-3 mt-1 flex-shrink-0"></i>
                        <div>
                            <strong>Alamat:</strong>
                            <p class="text-gray-700">Jl. Raya Ciomas, BBHS - Pintu Ledeng, Ciomas, Bogor 16610</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i data-feather="mail" class="w-5 h-5 text-blue-600 mr-3 mt-1 flex-shrink-0"></i>
                        <div>
                            <strong>Email:</strong>
                            <p><a href="mailto:salaka.tech@gmail.com" class="text-blue-600 hover:underline">salaka.tech@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i data-feather="phone" class="w-5 h-5 text-blue-600 mr-3 mt-1 flex-shrink-0"></i>
                        <div>
                            <strong>WhatsApp:</strong>
                            <p><a href="https://wa.me/6285772797020" class="text-blue-600 hover:underline">0857 7279 7020</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection