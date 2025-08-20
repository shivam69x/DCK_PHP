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
            <div class="grid lg:grid-cols-2 gap-6 items-center mt-10">
                {{-- Left Side - Main Content --}}
                <div class="text-center lg:text-left -mt-10 space-y-10">
                    <div class="space-y-4">
                        <h1 class="text-2xl md:text-3xl lg:text-[55px] font-bold text-[#0e3c47] leading-tight flex flex-col gap-2 mb-6">
                            Microsoft 365
                        </h1>

                        <p class="text-sm md:text-base text-[#0e3c47d5] max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                            Collaborate, create and connect with Microsoft 365. Your
                            anytime, anywhere office to grow your business.
                        </p>
                    </div>

                    {{-- Features List --}}
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4  text-center lg:text-left">
                        <div class="bg-white/30 backdrop-blur-sm rounded-lg p-4 border border-slate-300/60">
                            <div class="flex items-center justify-center lg:justify-start mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-[#1c758b] mr-2"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                                <span class="text-[#0e3c47] font-semibold text-[20px]">
                                    Office Apps Integration
                                </span>
                            </div>
                            <p class="text-slate-600 text-sm">
                                Word, Excel, PowerPoint access
                            </p>
                        </div>

                        <div class="bg-white/30 backdrop-blur-sm rounded-lg p-4 border border-slate-300/60">
                            <div class="flex items-center justify-center lg:justify-start mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-[#1c758b] mr-2"><path d="m22 8-6 4 6 4V8Z"/><rect width="14" height="12" x="1" y="6" rx="2" ry="2"/></svg>
                                <span class="text-[#0e3c47] font-semibold text-[20px]">
                                    Teams Collaboration
                                </span>
                            </div>
                            <p class="text-slate-600 text-sm">
                                Video meetings & chat
                            </p>
                        </div>

                        <div class="bg-white/30 backdrop-blur-sm rounded-lg p-4 border border-slate-300/60">
                            <div class="flex items-center justify-center lg:justify-start mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-[#1c758b] mr-2"><path d="M17.5 19H18a4 4 0 0 0 0-8h-.5A2.5 2.5 0 0 1 15 9.5a2.5 2.5 0 0 1 .4-1.2l.7-.7A3.5 3.5 0 0 0 12 4.5 3.5 3.5 0 0 0 7.5 7H7a4 4 0 0 0-4 4 4 4 0 0 0 .5 8H5"/></svg>
                                <span class="text-[#0e3c47] font-semibold text-[20px]">
                                    1TB Cloud Storage
                                </span>
                            </div>
                            <p class="text-slate-600 text-sm">
                                Secure OneDrive backup
                            </p>
                        </div>
                    </div>

                    {{-- CTA Button --}}
                    <div class="pt-0">
                        <a href="{{ url('/microsoft/mplans') }}"
                            class="group bg-[#126276] hover:bg-[#218aa4] text-white font-semibold px-5 py-3 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-2xl shadow-lg inline-flex items-center space-x-2 text-base"
                            aria-label="View all hosting plans">
                            <span>See All Plans</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Right Side - Visual --}}
                <div class="relative flex justify-center lg:justify-center sm:bottom-[20px] bottom-[110px] ">
                    {{-- Main Cloud Server Icon --}}
                    <div class="relative lg:bottom-[0px] -bottom-[110px]">
                        {{-- Background Circle --}}
                        <img class="animate-float w-[600px]" src="{{ asset('assets/mhome02.png') }}" alt="" />

                        {{-- Floating Elements --}}
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom Wave --}}
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" class="w-full h-auto">
                <path fill="rgba(255,255,255,0.1)"
                    d="M0,64L48,69.3C96,75,192,85,288,80C384,75,480,53,576,48C672,43,768,53,864,64C960,75,1056,85,1152,80C1248,75,1344,53,1392,42.7L1440,32L1440,120L1392,120C1344,120,1248,120,1152,120C1056,120,960,120,864,120C768,120,672,120,576,120C480,120,384,120,288,120C192,120,96,120,48,120L0,120Z" />
            </svg>
        </div>
    </div>
    <br>
    @include('microsoft.mplans')
    @include('microsoft.mfeatures')
    @include('components.faqsectionone')
    <div class=" mt-20">
        @include('components.clients')
    </div>
@endsection
