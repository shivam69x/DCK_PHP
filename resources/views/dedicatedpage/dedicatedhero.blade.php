@extends('layouts.app')

@section('content')
    <section class="relative bg-gradient-to-br from-[#dff6fd] to-[#f7fafe] min-h-[500px] h-auto overflow-hidden py-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 h-full relative">
            {{-- Carousel Container --}}
            <div class="relative w-full h-full flex items-center">
                <div class="w-full h-full flex items-center">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                        {{-- Left Side - Text Content --}}
                        <div class="flex flex-col justify-center space-y-5 order-2 lg:order-1 text-center lg:text-left">
                            <h1 class="text-xl sm:text-2xl lg:text-3xl xl:text-4xl font-bold leading-tight text-[#0a2540]">
                                Dedicated Server - India
                            </h1>
                            <p class="text-sm sm:text-base lg:text-lg leading-relaxed text-[#3b3f5c] max-w-full sm:max-w-lg mx-auto lg:mx-0">
                                Experience reliability and speed like never before! Unleash the power of Linux/Windows India dedicated servers with our high-performance hosting solutions. Subscribe now and save big on your dedicated server with our limited time 20% discount offer.
                            </p>
                            {{-- CTA Button --}}
                            <div class="pt-2 flex justify-center lg:justify-start">
                                <a href="{{ url('/dedicatedserverindia/pricingindia') }}"
                                    class="group bg-[#126276] hover:bg-[#218aa4] text-white font-semibold px-6 py-3 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-2xl shadow-lg inline-flex items-center space-x-2 text-sm sm:text-base"
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
                            <div class="w-full max-w-[320px] sm:max-w-[500px] md:max-w-[600px] lg:max-w-[700px] xl:max-w-[800px]">
                                <img
                                    src="{{ asset('assets/2.png') }}"
                                    class="w-full h-auto object-contain"
                                    alt="Dedicated"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
