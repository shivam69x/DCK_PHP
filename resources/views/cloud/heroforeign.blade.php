@extends('layouts.app')

@section('content')
    <section class="relative bg-gradient-to-br from-[#dff6fd] to-[#f7fafe] min-h-[420px] overflow-hidden py-8 sm:py-1">
        <div class="container mx-auto px-4 sm:px-6 h-full relative">
            {{-- Carousel Container --}}
            <div class="relative w-full h-full flex items-center">
                <div class="w-full h-full flex items-center">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                        {{-- Left Side - Text Content --}}
                        <div class="flex flex-col justify-center space-y-6 text-center lg:text-left order-2 lg:order-1">
                            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#0a2540]">
                                Cloud Server - Foreign
                            </h1>
                            <p class="text-base sm:text-lg text-[#3b3f5c] max-w-xl mx-auto lg:mx-0">
                                Experience the future of cloud hosting with our optimized foreign cloud servers, ensuring scalable performance and reliability for your diverse digital needs.
                            </p>
                            {{-- CTA Buttons --}}
                            <div class="pt-2">
                                <a href="{{ url('/cloudforeign/plan') }}"
                                    class="group bg-[#126276] hover:bg-[#218aa4] text-white font-semibold px-5 py-3 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-2xl shadow-lg inline-flex items-center space-x-2 text-base"
                                    aria-label="View all hosting plans"
                                >
                                    <span>See All Plans</span>
                                    {{-- ArrowRight icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                                </a>
                            </div>
                        </div>

                        {{-- Right Side - Image --}}
                        <div class="flex justify-center lg:justify-end items-center order-1 lg:order-2 animate-gentle-bounce">
                            <div class="w-full max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl">
                                <img
                                    src="{{ asset('assets/13.png') }}"
                                    class="w-full h-auto object-cover"
                                    alt="Dedicated Server"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
