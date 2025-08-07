@extends('layouts.public')

@section('title', 'Konfirmasi Checkout - SalakaTech')

@section('content')
<div class="bg-gray-100 min-h-screen py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-extrabold text-center text-gray-900">Konfirmasi Pesanan Anda</h1>
        <p class="mt-2 text-sm text-center text-gray-600">Satu langkah lagi untuk mengaktifkan layanan Anda.</p>

        <div class="mt-8 bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="p-8">
                <div class="flex flex-col sm:flex-row justify-between items-start gap-6">
                    {{-- Detail Produk & Paket --}}
                    <div>
                        <h2 class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Anda akan berlangganan:</h2>
                        <p class="text-2xl font-bold text-gray-900 mt-1">{{ $plan->product->name }} - {{ $plan->name }}</p>
                        
                        <div class="mt-4">
                            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Detail Pelanggan:</h3>
                            <p class="text-base text-gray-700 mt-1">{{ $user->name }}</p>
                            <p class="text-base text-gray-700">{{ $user->email }}</p>
                        </div>
                    </div>
                    
                    {{-- Detail Harga --}}
                    <div class="bg-blue-50 rounded-lg p-4 text-right w-full sm:w-auto">
                        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Total Tagihan</p>
                        <p class="text-3xl font-extrabold text-blue-600">
                            Rp{{ number_format($plan->price, 0, ',', '.') }}
                        </p>
                        <p class="text-xs text-gray-500">per bulan</p>
                    </div>
                </div>

                <div class="mt-8 border-t pt-6">
                    <p class="text-sm text-gray-600">
                        Dengan melanjutkan, Anda menyetujui <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Syarat & Ketentuan</a> kami. Langganan Anda akan otomatis dibuat setelah pembayaran berhasil.
                    </p>
                    
                    {{-- Tombol ini akan kita fungsikan di langkah berikutnya --}}
                    <form action="{{ route('checkout.process', $plan) }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="w-full bg-green-600 text-white font-semibold py-3 rounded-lg hover:bg-green-700 transition text-lg">
                            <i data-feather="lock" class="inline-block w-5 h-5 -mt-1"></i>
                            Konfirmasi & Lanjutkan Pembayaran
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('product.detail', $plan->product) }}" class="text-sm font-medium text-gray-600 hover:text-gray-900">&larr; Kembali ke detail produk</a>
        </div>
    </div>
</div>
@endsection