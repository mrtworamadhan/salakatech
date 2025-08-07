@extends('layouts.public')

@section('title', $product->name . ' - SalakaTech')

@section('content')
<div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        {{-- Header Produk --}}
        <div class="text-center">
            <img src="{{ Storage::url($product->icon_path) }}" alt="{{ $product->name }}" class="h-24 w-24 mx-auto mb-4 object-contain">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                {{ $product->name }}
            </h2>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                {{ $product->tagline }}
            </p>
        </div>

        {{-- Daftar Paket Harga --}}
        <div class="mt-12">
            <h3 class="text-2xl font-semibold text-center text-gray-800 mb-8">Pilih Paket yang Sesuai Untuk Anda</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($product->plans as $plan)
                    <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900">{{ $plan->name }}</h4>
                        
                        <div class="my-4">
                            <span class="text-4xl font-extrabold text-gray-900">Rp{{ number_format($plan->price, 0, ',', '.') }}</span>
                            <span class="text-base font-medium text-gray-500">/bulan</span>
                        </div>

                        <ul class="space-y-3 text-gray-600 flex-grow">
                            @foreach ($plan->features as $feature)
                                <li class="flex items-start">
                                    <i data-feather="check-circle" class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-1"></i>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <a href="{{ route('checkout.show', $plan) }}" class="mt-8 block w-full bg-blue-600 text-white text-center font-semibold py-3 rounded-lg hover:bg-blue-700 transition">
                            Pilih Paket Ini
                        </a>
                    </div>
                @empty
                    <div class="md:col-span-3 text-center py-12 bg-white rounded-lg shadow">
                        <p class="text-gray-500">Saat ini belum ada paket harga yang tersedia untuk produk ini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection