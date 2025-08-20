@extends('layouts.app')

@section('content')
    <div class="min-h-[65vh] bg-gradient-to-br from-[#dff6fd] to-[#f7fafe] relative overflow-hidden">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-2 h-2 bg-[#1ab7c6] rounded-full animate-pulse"></div>
            <div class="absolute top-32 right-20 w-1 h-1 bg-[#1ab7c6] rounded-full animate-pulse delay-300"></div>
            <div class="absolute bottom-40 left-32 w-1.5 h-1.5 bg-[#1ab7c6] rounded-full animate-pulse delay-700"></div>
            <div class="absolute bottom-20 right-40 w-2 h-2 bg-[#1ab7c6] rounded-full animate-pulse delay-1000"></div>
            <div class="absolute top-1/2 left-1/4 w-1 h-1 bg-[#1ab7c6] rounded-full animate-pulse delay-500"></div>
        </div>

        {{-- Main Content --}}
        <div class="container mx-auto px-4 py-4 lg:py-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-6 items-center">
                {{-- Left Side - Main Content --}}
                <div class="text-center lg:text-left space-y-8">
                    <div class="space-y-4">
                        <h1 class="text-2xl md:text-3xl lg:text-[55px] font-bold text-[#0e3c47] leading-tight flex flex-col gap-2">
                            Reseller Hosting
                            <span class="relative inline-block">
                                <span class="bg-[#19849f] text-white px-4 py-2 rounded-lg transform -rotate-2 inline-block shadow-lg text-2xl">
                                    10% OFF
                                </span>
                            </span>
                        </h1>

                        <p class="text-sm md:text-base text-[#0e3c47d5] max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                            We offer the best hosting solutions for your needs, catering
                            to clients from personal to corporate. Our data centers are
                            strategically located worldwide to ensure that your website is
                            always up. Happy hosting!
                        </p>
                    </div>

                    {{-- Features List --}}
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center lg:text-left">
                        <div class="bg-white/30 backdrop-blur-sm rounded-lg p-4 border border-slate-300/60">
                            <div class="flex items-center justify-center lg:justify-start mb-2">
                                {{-- Server icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-server w-5 h-5 text-[#1c758b] mr-2"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><path d="M6 6h.01"/><path d="M6 18h.01"/></svg>
                                <span class="text-[#0e3c47] font-semibold text-[20px]">
                                    99.9% Uptime
                                </span>
                            </div>
                            <p class="text-slate-600 text-sm">Reliable performance</p>
                        </div>

                        <div class="bg-white/30 backdrop-blur-sm rounded-lg p-4 border border-slate-300/60">
                            <div class="flex items-center justify-center lg:justify-start mb-2">
                                {{-- Cloud icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cloud w-5 h-5 text-[#1c758b] mr-2"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h3.79a4.5 4.5 0 1 1 0 9H17.5Z"/></svg>
                                <span class="text-[#0e3c47] font-semibold text-[20px]">
                                    Global CDN
                                </span>
                            </div>
                            <p class="text-slate-600 text-sm">Worldwide coverage</p>
                        </div>

                        <div class="bg-white/30 backdrop-blur-sm rounded-lg p-4 border border-slate-300/60">
                            <div class="flex items-center justify-center lg:justify-start mb-2">
                                {{-- Download icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download w-5 h-5 text-[#1c758b] mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="15" y2="3"/></svg>
                                <span class="text-[#0e3c47] font-semibold text-[20px]">
                                    Fast Speed
                                </span>
                            </div>
                            <p class="text-slate-600 text-sm">Optimized delivery</p>
                        </div>
                    </div>

                    {{-- CTA Button --}}
                    <div class="pt-0">
                        <a href="{{ url('/resellerhosting/rhplans') }}"
                            class="group bg-[#126276] hover:bg-[#218aa4] text-white font-semibold px-5 py-3 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-2xl shadow-lg inline-flex items-center space-x-2 text-base"
                            aria-label="View all hosting plans"
                        >
                            <span>See All Plans</span>
                            {{-- ArrowRight icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Right Side - Visual --}}
                <div class="relative flex justify-center lg:justify-center sm:bottom-[20px] md:bottom-[50px] bottom-[110px]">
                    {{-- Main Cloud Server Icon --}}
                    <div class="relative -bottom-[100px] lg:bottom-[0px]">
                        {{-- Background Circle --}}
                        <img class="animate-float w-[600px]" src="{{ asset('assets/rh09.png') }}" alt="Reseller Hosting Image" />

                        {{-- Floating Elements --}}
                        <div class="absolute top-9 -left-5 bg-white/40 backdrop-blur-sm rounded-lg p-3 border border-slate-300/50 animate-float">
                            {{-- Server icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-server w-6 h-6 text-slate-700"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><path d="M6 6h.01"/><path d="M6 18h.01"/></svg>
                        </div>

                        <div class="absolute bottom-6 -right-1 bg-white/40 backdrop-blur-sm rounded-lg p-3 border border-slate-300/50 animate-float delay-300">
                            {{-- Cloud icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cloud w-6 h-6 text-slate-700"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h3.79a4.5 4.5 0 1 1 0 9H17.5Z"/></svg>
                        </div>

                        <div class="absolute top-1/2 -right-5 bg-white/40 backdrop-blur-sm rounded-lg p-3 border border-slate-300/50 animate-float delay-700">
                            {{-- Download icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download w-6 h-6 text-slate-700"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="15" y2="3"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom Wave --}}
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" class="w-full h-auto">
                <path
                    fill="rgba(255,255,255,0.1)"
                    d="M0,64L48,69.3C96,75,192,85,288,80C384,75,480,53,576,48C672,43,768,53,864,64C960,75,1056,85,1152,80C1248,75,1344,53,1392,42.7L1440,32L1440,120L1392,120C1344,120,1248,120,1152,120C1056,120,960,120,864,120C768,120,672,120,576,120C480,120,384,120,288,120C192,120,96,120,48,120L0,120Z"
                />
            </svg>
        </div>
    </div>

    @include('resellerhosting.rhplans')
    @include('resellerhosting.rhfeatures')
    @include('components.faqsectionone')
    <div class="mt-20">
        @include('components.clients')
    </div>
@endsection
