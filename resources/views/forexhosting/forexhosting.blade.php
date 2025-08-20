@extends('layouts.app')

@section('content')
    @php
        $features = [
            ['icon' => 'globe', 'text' => 'Access 50+ Currency Pairs'],
            ['icon' => 'bar-chart-3', 'text' => 'Real-time Market Analysis'],
            ['icon' => 'shield', 'text' => 'Regulated & Secure Trading'],
        ];
    @endphp
    <section class="bg-gradient-to-br from-[#dff6fd] to-[#f7fafe] relative overflow-hidden min-h-[50vh]">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-20 w-32 h-32 border border-gray-400 rounded-full"></div>
            <div class="absolute top-40 right-32 w-24 h-24 border border-gray-400 rounded-full"></div>
            <div class="absolute bottom-32 left-1/4 w-16 h-16 border border-gray-400 rounded-full"></div>
        </div>

        <div class="container mx-auto px-4 py-12 md:py-14 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center ">
                {{-- Left Column - Main Content --}}
                <div class="space-y-8">
                    {{-- Main Headline --}}
                    <div class="space-y-4 -mt-[2px]">
                        <h1 class="text-2xl md:text-3xl lg:text-[58px] font-bold text-[#0e3c47] leading-tight mb-7">
                            Forex Server Hosting
                        </h1>

                        <p class="text-sm md:text-base text-[#0e3c47d5] max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                            Access global currency markets 24/7 with lightning-fast
                            execution, competitive spreads, and professional-grade trading
                            tools.
                        </p>
                    </div>

                    {{-- Features List --}}
                    <div class="space-y-4">
                        @foreach ($features as $index => $feature)
                            <div class="flex items-center space-x-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-[#0077b6]/10 rounded-full flex items-center justify-center">
                                    @if ($feature['icon'] === 'globe')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-[#0077b6]"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                                    @elseif ($feature['icon'] === 'bar-chart-3')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-[#0077b6]"><path d="M12 20V10"/><path d="M18 20V4"/><path d="M6 20v-4"/></svg>
                                    @elseif ($feature['icon'] === 'shield')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-[#0077b6]"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                    @endif
                                </div>
                                <span class="text-[#0e3c47] font-medium">
                                    {{ $feature['text'] }}
                                </span>
                            </div>
                        @endforeach
                    </div>

                    {{-- CTA Buttons --}}
                    <div class="pt-0">
                        <a href="{{ url('/forexhosting/forexplans') }}"
                            class="group bg-[#126276] hover:bg-[#218aa4] text-white font-semibold px-5 py-3 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-2xl shadow-lg inline-flex items-center space-x-2 text-base"
                            aria-label="View all hosting plans">
                            <span>See All Plans</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>

                </div>

                {{-- Right Column - Illustration --}}
                <div class="relative bottom-[20px]">
                    {{-- Main Chart Container --}}
                    <div class="relative bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-2xl border border-white/20">
                        {{-- Chart Header --}}
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                <span class="font-semibold text-gray-800">
                                    Live Trading
                                </span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-green-500"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                        </div>

                        {{-- Simulated Chart --}}
                        <div class="h-48 bg-gradient-to-t from-[#0077b6]/5 to-transparent rounded-xl relative overflow-hidden">
                            {{-- Grid Lines --}}
                            <div class="absolute inset-0">
                                @foreach (range(0, 4) as $i)
                                    <div
                                        class="absolute w-full border-t border-gray-200"
                                        style="top: {{ $i * 25 }}%"
                                    ></div>
                                @endforeach
                            </div>

                            {{-- Chart Line --}}
                            <svg class="absolute inset-0 w-full h-full">
                                <path
                                    d="M 0 120 Q 60 80 120 100 T 240 90 T 360 70 T 480 85"
                                    stroke="#0077b6"
                                    strokeWidth="3"
                                    fill="none"
                                    class="animate-pulse"
                                />
                                <path
                                    d="M 0 120 Q 60 80 120 100 T 240 90 T 360 70 T 480 85 L 480 192 L 0 192 Z"
                                    fill="url(#gradient)"
                                    class="opacity-20"
                                />
                                <defs>
                                    <linearGradient
                                        id="gradient"
                                        x1="0%"
                                        y1="0%"
                                        x2="0%"
                                        y2="100%"
                                    >
                                        <stop offset="0%" stop-color="#0077b6" />
                                        <stop offset="100%" stop-color="transparent" />
                                    </linearGradient>
                                </defs>
                            </svg>

                            {{-- Floating Elements --}}
                            <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-bold animate-bounce">
                                +2.45%
                            </div>
                        </div>

                        {{-- Trading Stats --}}
                        <div class="grid grid-cols-3 gap-4 mt-6 pt-6 border-t border-gray-200/50">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-gray-800">
                                    0.8ms
                                </div>
                                <div class="text-xs text-gray-500">Execution</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-green-600">
                                    +$1,247
                                </div>
                                <div class="text-xs text-gray-500">Today's P&L</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-gray-800">50+</div>
                                <div class="text-xs text-gray-500">Pairs</div>
                            </div>
                        </div>
                    </div>

                    {{-- Floating Cards --}}
                    <div class="absolute -top-4 -left-4 bg-white/95 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-white/20 animate-pulse">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span class="text-sm font-medium">GBP/USD</span>
                            <span class="text-sm font-bold text-green-600">
                                +0.12%
                            </span>
                        </div>
                    </div>

                    <div
                        class="absolute -bottom-4 -right-4 bg-white/95 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-white/20 animate-pulse"
                    >
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                            <span class="text-sm font-medium">USD/JPY</span>
                            <span class="text-sm font-bold text-red-600">-0.08%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('forexhosting.forexplans')
    @include('forexhosting.forexfeatures')
    @include('components.faqsectionone')
    <div class=" mt-20">
        @include('components.clients')
    </div>
@endsection
