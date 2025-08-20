@extends('layouts.app')

@section('content')
    <section class="min-h-screen bg-gradient-to-br from-[#dff6fd] to-[#f7fafe] py-16 px-4 sm:px-6 lg:px-0">
        <div class="max-w-7xl mx-auto">
            {{-- Header --}}
            <div
                x-data="{ isVisible: false }"
                x-init="setTimeout(() => { isVisible = true }, 100)"
                :class="{ 'opacity-100 translate-y-0': isVisible, 'opacity-0 translate-y-8': !isVisible }"
                class="text-center mb-16 transition-all duration-1000"
            >
                <h2 class="text-2xl sm:text-[40px] font-bold text-[#0e3c47] mb-5">
                    Best Foreign Cloud Server
                    <span class="text-blue-600"> At Affordable Price </span>
                </h2>
                <p class="text-sm text-[#0e3c47cc] max-w-3xl mx-auto leading-relaxed mb-8">
                    Foreign Cloud Hosting
                </p>

                {{-- OS Selection Toggle --}}
                <div class="flex justify-center mb-8" x-data="{ selectedOS: 'linux' }">
                    <div class="bg-white rounded-full shadow-lg p-1 border border-blue-200">
                        <div class="flex">
                            <button
                                @click="selectedOS = 'linux'"
                                :class="{
                                    'bg-blue-600 text-white shadow': selectedOS === 'linux',
                                    'text-blue-700 hover:bg-blue-50': selectedOS !== 'linux'
                                }"
                                class="px-6 py-2 text-sm rounded-full font-semibold transition-all duration-300"
                            >
                                Linux
                            </button>
                            <button
                                @click="selectedOS = 'windows'"
                                :class="{
                                    'bg-blue-600 text-white shadow': selectedOS === 'windows',
                                    'text-blue-700 hover:bg-blue-50': selectedOS !== 'windows'
                                }"
                                class="px-6 py-2 text-sm rounded-full font-semibold transition-all duration-300"
                            >
                                Windows
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Plans Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $linuxPlans = [
                        [
                            'name' => 'Business Plan',
                            'description' => 'START FROM',
                            'price' => '1799',
                            'features' => [
                                '2 Core',
                                '2 GB RAM',
                                '50 GB SSD',
                                '1 Dedicated IP',
                                '1TB Bandwidth',
                                'FREE SetUp!!',
                                '99.9% Uptime Guarantee',
                                'Free CentOS WP-Cpanel',
                            ],
                            'ctaText' => 'BUY NOW',
                            'popular' => false,
                        ],
                        [
                            'name' => 'Traffic Plan',
                            'description' => 'START FROM',
                            'price' => '2099',
                            'features' => [
                                '2 CPU Cores',
                                '4 GB RAM',
                                '100 GB Hard Disk-SSD',
                                '1TB Bandwidth',
                                '1 Dedicated IP',
                                'Free CentOS WP-Cpanel',
                                'FREE Set Up!!',
                                '99.9% Uptime Guarantee',
                            ],
                            'ctaText' => 'BUY NOW',
                            'popular' => false,
                        ],
                        [
                            'name' => 'Standard Plan',
                            'description' => 'Best for Entrepreneurs',
                            'price' => '2599',
                            'features' => [
                                '4 CPU Cores',
                                '6 GB RAM',
                                '150 GB Hard Disk-SSD',
                                '2TB Bandwidth',
                                '1 Dedicated IP',
                                'Free CentOS WP-Cpanel',
                                'FREE Set Up!!',
                                '99.9% Uptime Guarantee',
                            ],
                            'ctaText' => 'BUY NOW',
                            'popular' => true,
                        ],
                        [
                            'name' => 'Enterprise Plan',
                            'description' => 'START FROM',
                            'price' => '3999',
                            'features' => [
                                '4 CPU Cores',
                                '8 GB RAM',
                                '240 GB Hard Disk-SSD',
                                '2TB Bandwidth',
                                '1 Dedicated IP',
                                'Free CentOS WP-Cpanel',
                                'FREE Set Up!!',
                                '99.9% Uptime Guarantee',
                            ],
                            'ctaText' => 'BUY NOW',
                            'popular' => false,
                        ],
                    ];
                    $windowsPlans = [
                        [
                            'name' => 'Business Plan',
                            'description' => 'START FROM',
                            'price' => '2099',
                            'features' => [
                                '2 Core',
                                '2 GB RAM',
                                '50 GB SSD',
                                '1 Dedicated IP',
                                '1TB Bandwidth',
                                'FREE SetUp!!',
                                '99.9% Uptime Guarantee',
                                'Windows Server 2022',
                            ],
                            'ctaText' => 'BUY NOW',
                            'popular' => false,
                        ],
                        [
                            'name' => 'Traffic Plan',
                            'description' => 'START FROM',
                            'price' => '2399',
                            'features' => [
                                '2 CPU Cores',
                                '4 GB RAM',
                                '100 GB Hard Disk-SSD',
                                '1TB Bandwidth',
                                '1 Dedicated IP',
                                'Windows Server 2022',
                                'FREE Set Up!!',
                                '99.9% Uptime Guarantee',
                            ],
                            'ctaText' => 'BUY NOW',
                            'popular' => false,
                        ],
                        [
                            'name' => 'Standard Plan',
                            'description' => 'Best for Entrepreneurs',
                            'price' => '2899',
                            'features' => [
                                '4 CPU Cores',
                                '6 GB RAM',
                                '150 GB Hard Disk-SSD',
                                '2TB Bandwidth',
                                '1 Dedicated IP',
                                'Windows Server 2022',
                                'FREE Set Up!!',
                                '99.9% Uptime Guarantee',
                            ],
                            'ctaText' => 'BUY NOW',
                            'popular' => true,
                        ],
                        [
                            'name' => 'Enterprise Plan',
                            'description' => 'START FROM',
                            'price' => '4299',
                            'features' => [
                                '4 CPU Cores',
                                '8 GB RAM',
                                '240 GB Hard Disk-SSD',
                                '2TB Bandwidth',
                                '1 Dedicated IP',
                                'Windows Server 2022',
                                'FREE Set Up!!',
                                '99.9% Uptime Guarantee',
                            ],
                            'ctaText' => 'BUY NOW',
                            'popular' => false,
                        ],
                    ];
                    $currentPlans = ($selectedOS === 'linux') ? $linuxPlans : $windowsPlans;
                @endphp

                <template x-for="(plan, index) in {{ json_encode($currentPlans) }}" :key="index">
                    <div
                        :class="{
                            'ring-4 ring-green-500 ring-opacity-80': plan.popular,
                            'opacity-100 translate-y-0': isVisible,
                            'opacity-0 translate-y-8': !isVisible
                        }"
                        class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:scale-105"
                        :style="`transition-delay: ${index * 150}ms`"
                    >
                        <template x-if="plan.popular">
                            <div class="absolute -top-7 left-1/2 transform -translate-x-1/2">
                                <div class="bg-gradient-to-r from-green-500 to-green-700 text-white px-6 py-1 rounded-full text-sm font-medium flex items-center gap-1 shadow-lg">
                                    {{-- Star icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                    Most Popular
                                </div>
                            </div>
                        </template>

                        <div class="p-8">
                            {{-- Plan Header --}}
                            <div class="text-center mb-8">
                                <h3 class="text-2xl font-bold text-[#0e3c47] mb-2" x-text="plan.name"></h3>
                                <p class="text-[#0e3c47da] text-sm mb-4" x-text="plan.description"></p>

                                {{-- Pricing --}}
                                <div class="mb-4">
                                    <div class="flex items-baseline justify-center">
                                        <span class="text-4xl font-bold text-[#0e3c47]" x-text="window.convertPrice(plan.price)"></span>
                                        <span class="text-gray-600 ml-1">/month</span>
                                    </div>
                                </div>
                            </div>

                            {{-- Features List --}}
                            <div class="mb-8">
                                <ul class="space-y-4">
                                    <template x-for="(feature, featureIndex) in plan.features" :key="featureIndex">
                                        <li class="flex items-start gap-3">
                                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mt-0.5">
                                                {{-- Check icon --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-3 h-3 text-green-600"><polyline points="20 6 9 17 4 12"/></svg>
                                            </div>
                                            <span class="text-gray-700 text-sm leading-relaxed" x-text="feature"></span>
                                        </li>
                                    </template>
                                </ul>
                            </div>

                            {{-- CTA Button --}}
                            <button
                                @click="window.location.href = '{{-- url('/billing') --}}?plan=' + encodeURIComponent(JSON.stringify({...plan, category: 'Cloud-Foreign Hosting', type: 'monthly'}))"
                                :class="plan.popular
                                    ? 'rounded-xl border border-white bg-gradient-to-r from-[#0e3c47] to-[#0040514d] text-white shadow-lg backdrop-blur-md transition duration-300 hover:border-white/100 hover:from-[#133c46] hover:to-[#0040515d] hover:shadow-xl'
                                    : 'bg-gray-100 text-gray-900 hover:bg-blue-50 hover:text-blue-700 border-2 border-transparent hover:border-blue-200'
                                "
                                class="w-full py-4 px-6 rounded-xl font-semibold text-base transition-all duration-300 transform hover:scale-105"
                            >
                                <span x-text="plan.ctaText"></span>
                            </button>
                        </div>
                    </div>
                </template>
            </div>

            {{-- Bottom Section --}}
            <div
                x-data="{ isVisible: false }"
                x-init="setTimeout(() => { isVisible = true }, 1000)"
                :class="{ 'opacity-100 translate-y-0': isVisible, 'opacity-0 translate-y-8': !isVisible }"
                class="text-center mt-20 transition-all duration-1000"
            >
                <div class="bg-white/90 border backdrop-blur-sm rounded-2xl p-8 max-w-4xl mx-auto">
                    <h3 class="text-xl font-bold text-gray-900 mb-11">
                        Best Hosting Features
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 text-center">
                        <div class="flex flex-col items-center">
                            <div class="bg-blue-100 rounded-full p-3 mb-3">
                                {{-- Check icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-6 h-6 text-green-500"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-1 text-[20px]">
                                99.9% Uptime
                            </h4>
                            <p class="text-gray-600 text-xs">
                                Guaranteed reliable hosting
                            </p>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="bg-blue-100 rounded-full p-3 mb-3">
                                {{-- Check icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-6 h-6 text-green-500"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-1 text-[20px]">
                                Free Migration
                            </h4>
                            <p class="text-gray-600 text-xs">
                                We'll move your site for free
                            </p>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="bg-blue-100 rounded-full p-3 mb-3">
                                {{-- Check icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-6 h-6 text-green-500"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-1 text-[20px]">
                                24/7 Support
                            </h4>
                            <p class="text-gray-600 text-xs">
                                Expert help when you need it
                            </p>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="bg-blue-100 rounded-full p-3 mb-3">
                                {{-- Check icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-6 h-6 text-green-500"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-1 text-[20px]">
                                Multi Data Center
                            </h4>
                            <p class="text-gray-600 text-xs">
                                Worldwide Data Center Network
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
