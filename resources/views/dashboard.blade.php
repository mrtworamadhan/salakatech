<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Pelanggan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Tampilkan pesan sukses jika ada --}}
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg shadow-sm" role="alert">
                    <p class="font-bold">Berhasil!</p>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium">Selamat Datang, {{ Auth::user()->name }}!</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        Di sini Anda dapat melihat semua layanan dan tagihan Anda.
                    </p>
                </div>
            </div>

            <div class="mt-8">
                <h3 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Layanan & Tagihan Anda</h3>

                @if($subscriptions->isEmpty())
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-center text-gray-500 dark:text-gray-400">
                            <p>Anda belum memiliki langganan atau tagihan.</p>
                            <a href="{{ route('home') }}#produk" class="mt-4 inline-block bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-700">
                                Lihat Produk Kami
                            </a>
                        </div>
                    </div>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($subscriptions as $subscription)
                            {{-- Kita cari invoice yang terkait dengan langganan ini --}}
                            @php
                                $invoice = $subscription->invoices()->latest()->first();
                                $whatsappMessage = "Halo Admin SalakaTech, saya ingin konfirmasi pembayaran untuk Invoice #{$invoice->invoice_number} sejumlah Rp" . number_format($invoice->amount, 0, ',', '.') . ". Terima kasih.";
                                $whatsappUrl = "https://wa.me/6285772797020?text=" . urlencode($whatsappMessage);
                            @endphp

                            <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow flex flex-col">
                                <div class="flex items-center gap-4">
                                    <img src="{{ Storage::url($subscription->plan->product->icon_path) }}" alt="{{ $subscription->plan->product->name }}" class="h-12 w-12 object-contain bg-gray-100 rounded-full p-1">
                                    <div>
                                        <h4 class="font-bold text-lg text-gray-900 dark:text-white">{{ $subscription->plan->product->name }}</h4>
                                        <span class="text-sm font-medium text-blue-600">{{ $subscription->plan->name }}</span>
                                    </div>
                                </div>
                                <div class="mt-4 border-t border-gray-200 dark:border-gray-700 pt-4 flex-grow">
                                    <div class="text-sm text-gray-600 dark:text-gray-400">
                                        <p>Status: 
                                            <span class="font-semibold px-2 py-1 rounded-full text-xs
                                                @if($subscription->status == 'active') bg-green-100 text-green-800 @endif
                                                @if($subscription->status == 'pending') bg-yellow-100 text-yellow-800 @endif
                                                @if($subscription->status == 'expired') bg-red-100 text-red-800 @endif
                                            ">
                                                {{ ucfirst($subscription->status) }}
                                            </span>
                                        </p>
                                        @if($subscription->status == 'active')
                                            <p class="mt-2">Berakhir pada: 
                                                <span class="font-semibold text-gray-800 dark:text-gray-200">{{ $subscription->ends_at->format('d F Y') }}</span>
                                            </p>
                                        @elseif($invoice)
                                            <p class="mt-2">Invoice: 
                                                <span class="font-semibold text-gray-800 dark:text-gray-200">#{{ $invoice->invoice_number }}</span>
                                            </p>
                                            <p class="mt-1">Total: 
                                                <span class="font-semibold text-gray-800 dark:text-gray-200">Rp{{ number_format($invoice->amount, 0, ',', '.') }}</span>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="mt-6">
                                    @if($subscription->status == 'pending' && $invoice)
                                        <a href="{{ $whatsappUrl }}" target="_blank" class="block w-full bg-green-500 text-white text-center font-semibold py-3 rounded-lg hover:bg-green-600 transition">
                                            <i data-feather="message-circle" class="inline-block w-5 h-5 -mt-1"></i>
                                            Konfirmasi via WhatsApp
                                        </a>
                                    @else
                                        <a href="#" class="block w-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-center font-semibold py-3 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600 transition">
                                            Kelola Langganan
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>