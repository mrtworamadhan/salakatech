@extends('layouts.public')

@section('title', 'SalakaTech - Empowering Business Through Technology')

@section('content')

    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[60rem] h-[30rem] bg-cyan-600/20 blur-[100px] rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-[40rem] h-[40rem] bg-blue-600/10 blur-[120px] rounded-full"></div>
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-[0.05]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-cyan-500/30 bg-cyan-500/10 text-cyan-400 text-xs font-bold uppercase tracking-wider mb-8">
                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
                PT Cahya Salaka Tech
            </div>

            <h1 class="text-5xl lg:text-7xl font-bold tracking-tight text-white mb-6">
                Transformasi Digital <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">Tanpa Batas.</span>
            </h1>
            
            <p class="mt-6 max-w-2xl mx-auto text-lg text-slate-400 leading-relaxed">
                Mitra teknologi strategis untuk UMKM, Instansi Pemerintah, dan Korporasi. Kami membangun ekosistem digital yang efisien, terukur, dan berdampak.
            </p>
            
            <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
                <a href="#produk" class="px-8 py-3.5 rounded-lg bg-cyan-600 text-white font-bold hover:bg-cyan-500 transition shadow-lg shadow-cyan-500/20">
                    Lihat Ekosistem
                </a>
                <a href="#kontak" class="px-8 py-3.5 rounded-lg border border-white/10 bg-white/5 text-white font-bold hover:bg-white/10 transition">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>

    <section id="produk" class="py-24 bg-[#0f172a] border-t border-white/5 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white mb-4">Ekosistem Produk</h2>
                <p class="text-slate-400">Solusi spesifik untuk industri yang berbeda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <a href="#" class="group relative bg-[#1e293b] rounded-2xl p-8 border border-white/5 hover:border-green-500/50 transition-all duration-300 hover:-translate-y-1 flex flex-col h-full">
                    <div class="absolute inset-0 bg-gradient-to-b from-green-500/5 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 rounded-2xl"></div>
                    
                    <img src="{{ asset('images/angon-ternak.png') }}" 
                         alt="angonTernak" 
                         class="h-16 w-auto mb-6 object-contain group-hover:scale-110 transition duration-300">
                    
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-green-400 transition">angonTernak</h3>
                    <p class="text-sm text-slate-400 mb-6 flex-1">Platform manajemen peternakan modern. Pantau kesehatan, pakan, dan hasil ternak dalam satu genggaman.</p>
                    
                    <div class="flex items-center text-green-500 text-sm font-bold mt-auto">
                        <span>Coming Soon</span>
                    </div>
                </a>

                <a href="https://evencapt.com" target="_blank" class="group relative bg-[#1e293b] rounded-2xl p-8 border border-white/5 hover:border-purple-500/50 transition-all duration-300 hover:-translate-y-1 flex flex-col h-full">
                    <div class="absolute inset-0 bg-gradient-to-b from-purple-500/5 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 rounded-2xl"></div>
                    
                    <img src="{{ asset('images/evencapt.png') }}" 
                         alt="Evencapt" 
                         class="h-16 w-auto mb-6 object-contain group-hover:scale-110 transition duration-300">
                    
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition">Evencapt</h3>
                    <p class="text-sm text-slate-400 mb-6 flex-1">Solusi manajemen acara & buku tamu digital. Dari resepsi pernikahan hingga turnamen olahraga (Olympus).</p>
                    
                    <div class="flex items-center text-purple-500 text-sm font-bold mt-auto">
                        <span>Kunjungi Website</span>
                        <i data-feather="external-link" class="w-4 h-4 ml-2"></i>
                    </div>
                </a>

                <a href="https://datacerdas.com" target="_blank" class="group relative bg-[#1e293b] rounded-2xl p-8 border border-white/5 hover:border-blue-500/50 transition-all duration-300 hover:-translate-y-1 flex flex-col h-full">
                    <div class="absolute inset-0 bg-gradient-to-b from-blue-500/5 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 rounded-2xl"></div>
                    
                    <img src="{{ asset('images/data-cerdas.png') }}" 
                         alt="DataCerdas" 
                         class="h-16 w-auto mb-6 object-contain group-hover:scale-110 transition duration-300">
                    
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-blue-400 transition">DataCerdas</h3>
                    <p class="text-sm text-slate-400 mb-6 flex-1">Analisis data dan AI untuk keputusan bisnis yang lebih akurat. Ubah data mentah menjadi wawasan berharga.</p>
                    
                    <div class="flex items-center text-blue-500 text-sm font-bold mt-auto">
                        <span>Kunjungi Website</span>
                        <i data-feather="external-link" class="w-4 h-4 ml-2"></i>
                    </div>
                </a>

                <a href="https://wa.me/6281277761133?text=Halo%20SalakaTech,%20saya%20mau%20konsultasi%20pembuatan%20aplikasi%20custom" target="_blank" class="group relative bg-[#1e293b] rounded-2xl p-8 border border-white/5 hover:border-cyan-500/50 transition-all duration-300 hover:-translate-y-1 flex flex-col h-full">
                    <div class="absolute inset-0 bg-gradient-to-b from-cyan-500/5 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 rounded-2xl"></div>
                    
                    <div class="w-16 h-16 rounded-xl bg-cyan-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition duration-300">
                        <i data-feather="code" class="text-cyan-500 w-8 h-8"></i>
                    </div>
                    
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-cyan-400 transition">Custom Development</h3>
                    <p class="text-sm text-slate-400 mb-6 flex-1">Butuh solusi unik? Kami bangun aplikasi Web, Android, & iOS yang disesuaikan 100% dengan proses bisnis Anda.</p>
                    
                    <div class="flex items-center text-cyan-500 text-sm font-bold mt-auto">
                        <span>Konsultasi Sekarang</span>
                        <i data-feather="message-circle" class="w-4 h-4 ml-2"></i>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <section class="border-y border-white/5 bg-[#0f172a]/50 backdrop-blur-md relative z-20">
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                
                <div class="flex items-center gap-5 text-center md:text-left flex-col md:flex-row">
                    <div class="relative">
                        <div class="absolute inset-0 bg-cyan-500 blur-lg opacity-20 rounded-full"></div>
                        <div class="w-12 h-12 rounded-full bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center relative z-10">
                            <i data-feather="activity" class="text-cyan-400 w-6 h-6 animate-pulse"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-lg">Client Project Monitor</h3>
                        <p class="text-slate-400 text-sm">Sedang membangun aplikasi bersama kami? Pantau progress pengerjaan Anda di sini.</p>
                    </div>
                </div>

                <a href="{{ route('project.preview') }}" class="flex-shrink-0 px-8 py-3 rounded-full bg-white/5 border border-white/10 text-white font-medium hover:bg-cyan-600 hover:border-cyan-500 hover:shadow-lg hover:shadow-cyan-500/20 transition-all duration-300 flex items-center gap-2 group">
                    <span>Cek Status Project</span>
                    <i data-feather="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                </a>

            </div>
        </div>
    </section>

    <section class="py-24 bg-[#020617] border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white">Dipercaya Oleh</h2>
                <p class="text-slate-400 mt-2">Partner kami dalam membangun masa depan digital.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-[#0f172a] p-8 rounded-2xl border border-white/5 relative">
                    <i data-feather="message-square" class="w-8 h-8 text-cyan-600 mb-4 absolute top-8 right-8 opacity-20"></i>
                    <p class="text-slate-300 italic mb-6">"Aplikasi angonTernak sangat membantu manajemen peternakan kami menjadi lebih rapi dan efisien. Laporan jadi cepat dibuat."</p>
                    <div>
                        <p class="font-bold text-white">Pak Agus</p>
                        <p class="text-sm text-slate-500">Koperasi Ternak Maju Bersama</p>
                    </div>
                </div>
                <div class="bg-[#0f172a] p-8 rounded-2xl border border-white/5 relative">
                    <i data-feather="users" class="w-8 h-8 text-cyan-600 mb-4 absolute top-8 right-8 opacity-20"></i>
                    <p class="text-slate-300 italic mb-6">"Tim SalakaTech sangat responsif. Solusi Custom App mereka benar-benar menjawab kebutuhan administrasi desa kami."</p>
                    <div>
                        <p class="font-bold text-white">Ibu Rina</p>
                        <p class="text-sm text-slate-500">Lembaga Desa Cipta Karya</p>
                    </div>
                </div>
                <div class="bg-[#0f172a] p-8 rounded-2xl border border-white/5 relative">
                    <i data-feather="award" class="w-8 h-8 text-cyan-600 mb-4 absolute top-8 right-8 opacity-20"></i>
                    <p class="text-slate-300 italic mb-6">"Evencapt membuat event kantor kami terasa sangat canggih. Fitur check-in QR code-nya sangat cepat dan anti antri."</p>
                    <div>
                        <p class="font-bold text-white">Mas Yoga</p>
                        <p class="text-sm text-slate-500">Corporate Secretary</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="py-24 bg-[#0f172a] border-t border-white/5 relative overflow-hidden">
        <div class="absolute right-0 bottom-0 opacity-10">
            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#06b6d4" d="M44.7,-76.4C58.9,-69.2,71.8,-59.1,81.6,-46.6C91.4,-34.1,98.2,-19.2,95.8,-5.2C93.5,8.9,82,22.1,70.8,33.4C59.6,44.7,48.7,54.1,36.4,61.9C24.1,69.7,10.4,75.9,-2.4,80.1C-15.2,84.3,-29.3,86.5,-41.8,80.8C-54.3,75.1,-65.2,61.5,-73.6,47.4C-82,33.3,-88,18.7,-86.3,4.9C-84.6,-8.9,-75.2,-21.9,-64.8,-32.8C-54.4,-43.7,-43,-52.5,-31.1,-60.9C-19.2,-69.3,-6.8,-77.3,7,-89.4L20.8,-101.5Z" transform="translate(100 100)" />
            </svg>
        </div>

        <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Siap Berkolaborasi?</h2>
            <p class="text-slate-400 mb-12 max-w-2xl mx-auto">
                Diskusikan kebutuhan teknologi Anda bersama tim ahli kami. Konsultasi gratis untuk menemukan solusi terbaik bagi bisnis Anda.
            </p>
            
            <div class="bg-[#1e293b]/50 backdrop-blur-sm border border-white/10 rounded-3xl p-8 md:p-12 text-left inline-block w-full">
                <div class="flex flex-col md:flex-row items-start justify-between gap-8">
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-cyan-500/10 flex items-center justify-center flex-shrink-0">
                                <i data-feather="map-pin" class="text-cyan-500"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold">Kantor Pusat</h4>
                                <p class="text-slate-400 text-sm mt-1">Jl. Raya Ciomas, BBHS - Pintu Ledeng,<br>Ciomas, Bogor 16610</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-cyan-500/10 flex items-center justify-center flex-shrink-0">
                                <i data-feather="mail" class="text-cyan-500"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold">Email</h4>
                                <a href="mailto:salaka.tech@gmail.com" class="text-slate-400 text-sm mt-1 hover:text-cyan-400 transition">salaka.tech@gmail.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-auto flex flex-col gap-4">
                        <a href="https://wa.me/6281277761133" target="_blank" class="flex items-center justify-center gap-3 px-8 py-4 rounded-xl bg-green-600 hover:bg-green-500 text-white font-bold transition shadow-lg shadow-green-900/20 w-full md:w-auto">
                            <i data-feather="message-circle"></i>
                            Chat WhatsApp
                        </a>
                        <p class="text-center text-xs text-slate-500">Respon cepat: Senin - Sabtu (09.00 - 17.00)</p>
                    </div>

                </div>
                
                <div class="mt-12 pt-8 border-t border-white/5 text-center md:text-left">
                    <p class="text-lg font-bold text-white">PT CAHYA SALAKA TECH</p>
                    <p class="text-xs text-slate-500 mt-1">Registered Tech Company</p>
                </div>
            </div>
        </div>
    </section>

@endsection