@extends('layouts.public')

@section('title', 'Project Preview - SalakaTech')

@section('content')

    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 min-h-screen overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[60rem] h-[30rem] bg-cyan-600/20 blur-[100px] rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-[40rem] h-[40rem] bg-blue-600/10 blur-[120px] rounded-full"></div>
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-[0.05]"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-6">
            
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-cyan-500/30 bg-cyan-500/10 text-cyan-400 text-xs font-bold uppercase tracking-wider mb-6">
                    <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
                    Client Area
                </div>
                <h1 class="text-3xl md:text-5xl font-bold text-white mb-4">
                    Project <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">Preview</span>
                </h1>
                <p class="text-slate-400 max-w-xl mx-auto">
                    Informasi detail dan status pengerjaan proyek aplikasi Anda saat ini.
                </p>
            </div>

            <div class="group relative bg-[#1e293b] rounded-3xl border border-white/10 p-8 md:p-10 overflow-hidden transition-all duration-300 hover:border-cyan-500/30 hover:shadow-2xl hover:shadow-cyan-500/10">
                
                <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/5 via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="relative z-10 flex flex-col md:flex-row items-start md:items-center gap-8">
                    
                    <div class="w-full md:w-auto flex justify-center md:block">
                        <div class="w-32 h-32 rounded-2xl bg-[#0f172a] border border-white/5 p-4 flex items-center justify-center shadow-lg group-hover:scale-105 transition duration-500">
                            <img src="{{ asset('images/logoFanantara.png') }}" 
                                 alt="Fanantara Logo" 
                                 class="w-full h-full object-contain">
                        </div>
                    </div>

                    <div class="flex-1 w-full text-center md:text-left">
                        
                        <div class="flex justify-center md:justify-start mb-4">
                            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400 text-xs font-bold uppercase tracking-wider">
                                <span class="relative flex h-2.5 w-2.5">
                                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                                  <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-amber-500"></span>
                                </span>
                                Status: On Build
                            </div>
                        </div>

                        <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">Fanantara App</h2>
                        <p class="text-cyan-400 font-medium text-lg mb-6">Sistem Manajemen Anggota dan Keuangan Koperasi Digital</p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-6 border-t border-white/5 bg-black/20 rounded-xl p-4">
                            <div class="text-center sm:text-left">
                                <p class="text-slate-500 text-xs uppercase tracking-wide mb-1">Project Number</p>
                                <p class="text-white font-mono font-bold tracking-wider">023-25</p>
                            </div>
                            <div class="text-center sm:text-left">
                                <p class="text-slate-500 text-xs uppercase tracking-wide mb-1">Client Name</p>
                                <p class="text-white font-bold">M. Hasyari</p>
                                <p class="text-slate-400 text-xs">Koperasi Multipihak Fanantara</p>
                            </div>
                        </div>

                        <div class="mt-6 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                            <a href="https://fanantara.salakatech.com" target="_blank" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-500 hover:to-blue-500 text-white font-bold transition shadow-lg shadow-cyan-500/20 group-hover:shadow-cyan-500/40">
                                <span>Lihat Live Preview</span>
                                <i data-feather="external-link" class="w-4 h-4"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="mt-8 pt-8 border-t border-white/5">
                    <div class="flex justify-between text-xs text-slate-400 mb-2">
                        <span>Progress Pengerjaan</span>
                        <span>Development Phase</span>
                    </div>
                    <div class="w-full bg-slate-700/50 rounded-full h-2 overflow-hidden">
                        <div class="bg-gradient-to-r from-cyan-500 to-blue-500 h-2 rounded-full w-[45%] relative">
                            <div class="absolute right-0 top-0 bottom-0 w-full animate-pulse bg-white/20"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="group relative bg-[#1e293b] mb- 5 rounded-3xl border border-white/10 p-8 md:p-10 overflow-hidden transition-all duration-300 hover:border-cyan-500/30 hover:shadow-2xl hover:shadow-cyan-500/10">
                
                <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/5 via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="relative z-10 flex flex-col md:flex-row items-start md:items-center gap-8">
                    
                    <div class="w-full md:w-auto flex justify-center md:block">
                        <div class="w-32 h-32 rounded-2xl bg-[#0f172a] border border-white/5 p-4 flex items-center justify-center shadow-lg group-hover:scale-105 transition duration-500">
                            <img src="{{ asset('images/logoKAL.png') }}" 
                                 alt="Fanantara Logo" 
                                 class="w-full h-full object-contain">
                        </div>
                    </div>

                    <div class="flex-1 w-full text-center md:text-left">
                        
                        <div class="flex justify-center md:justify-start mb-4">
                            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400 text-xs font-bold uppercase tracking-wider">
                                <span class="relative flex h-2.5 w-2.5">
                                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                                  <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-amber-500"></span>
                                </span>
                                Status: On Build
                            </div>
                        </div>

                        <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">Kurnia Agro Lestari</h2>
                        <p class="text-cyan-400 font-medium text-lg mb-6">Website - Aplikasi Managemen Perusahaan - Aplikasi Client</p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-6 border-t border-white/5 bg-black/20 rounded-xl p-4">
                            <div class="text-center sm:text-left">
                                <p class="text-slate-500 text-xs uppercase tracking-wide mb-1">Project Number</p>
                                <p class="text-white font-mono font-bold tracking-wider">024-25</p>
                            </div>
                            <div class="text-center sm:text-left">
                                <p class="text-slate-500 text-xs uppercase tracking-wide mb-1">Client Name</p>
                                <p class="text-white font-bold">PT KURNIA AGRO LESTARI</p>
                                <p class="text-slate-400 text-xs">-</p>
                            </div>
                        </div>

                        <div class="mt-6 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                            <a href="https://kurniaagrolestari.salakatech.com" target="_blank" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-500 hover:to-blue-500 text-white font-bold transition shadow-lg shadow-cyan-500/20 group-hover:shadow-cyan-500/40">
                                <span>Lihat Live Preview</span>
                                <i data-feather="external-link" class="w-4 h-4"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="mt-8 pt-8 border-t border-white/5">
                    <div class="flex justify-between text-xs text-slate-400 mb-2">
                        <span>Progress Pengerjaan</span>
                        <span>Development Phase</span>
                    </div>
                    <div class="w-full bg-slate-700/50 rounded-full h-2 overflow-hidden">
                        <div class="bg-gradient-to-r from-cyan-500 to-blue-500 h-2 rounded-full w-[45%] relative">
                            <div class="absolute right-0 top-0 bottom-0 w-full animate-pulse bg-white/20"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="group relative bg-[#1e293b] rounded-3xl border border-white/10 p-8 md:p-10 overflow-hidden transition-all duration-300 hover:border-cyan-500/30 hover:shadow-2xl hover:shadow-cyan-500/10">
                
                <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/5 via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="relative z-10 flex flex-col md:flex-row items-start md:items-center gap-8">
                    
                    <div class="w-full md:w-auto flex justify-center md:block">
                        <div class="w-32 h-32 rounded-2xl bg-[#0f172a] border border-white/5 p-4 flex items-center justify-center shadow-lg group-hover:scale-105 transition duration-500">
                            <img src="{{ asset('images/logoGaperkasindo.jpeg') }}" 
                                 alt="Fanantara Logo" 
                                 class="w-full h-full object-contain">
                        </div>
                    </div>

                    <div class="flex-1 w-full text-center md:text-left">
                        
                        <div class="flex justify-center md:justify-start mb-4">
                            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400 text-xs font-bold uppercase tracking-wider">
                                <span class="relative flex h-2.5 w-2.5">
                                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                                  <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-amber-500"></span>
                                </span>
                                Status: On Build
                            </div>
                        </div>

                        <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">GAPERKASINDO</h2>
                        <p class="text-cyan-400 font-medium text-lg mb-6">Website - Aplikasi Managemen Anggota - Aplikasi Anggota</p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-6 border-t border-white/5 bg-black/20 rounded-xl p-4">
                            <div class="text-center sm:text-left">
                                <p class="text-slate-500 text-xs uppercase tracking-wide mb-1">Project Number</p>
                                <p class="text-white font-mono font-bold tracking-wider">025-25</p>
                            </div>
                            <div class="text-center sm:text-left">
                                <p class="text-slate-500 text-xs uppercase tracking-wide mb-1">Client Name</p>
                                <p class="text-white font-bold">GAPERKASINDO</p>
                                <p class="text-slate-400 text-xs">-</p>
                            </div>
                        </div>

                        <div class="mt-6 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                            <a href="https://gaperkasindo.salakatech.com" target="_blank" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-500 hover:to-blue-500 text-white font-bold transition shadow-lg shadow-cyan-500/20 group-hover:shadow-cyan-500/40">
                                <span>Lihat Live Preview</span>
                                <i data-feather="external-link" class="w-4 h-4"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="mt-8 pt-8 border-t border-white/5">
                    <div class="flex justify-between text-xs text-slate-400 mb-2">
                        <span>Progress Pengerjaan</span>
                        <span>Development Phase</span>
                    </div>
                    <div class="w-full bg-slate-700/50 rounded-full h-2 overflow-hidden">
                        <div class="bg-gradient-to-r from-cyan-500 to-blue-500 h-2 rounded-full w-[45%] relative">
                            <div class="absolute right-0 top-0 bottom-0 w-full animate-pulse bg-white/20"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-12 text-center">
                <p class="text-slate-500 text-sm">
                    Butuh bantuan login atau kendala akses? 
                    <a href="https://wa.me/6281277761133" class="text-cyan-400 hover:text-cyan-300 transition underline">Hubungi Support</a>
                </p>
            </div>

        </div>
    </section>

@endsection