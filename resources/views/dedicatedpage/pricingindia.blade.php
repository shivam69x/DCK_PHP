@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-[#dff6fd] to-[#f7fafe]">
        {{-- Hero Section --}}
        <section class="py-8 px-2 sm:px-6 lg:px-8 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h1 class="text-3xl font-bold text-gray-900 mb-6">
                        Dedicated Server Hosting
                        <span class="block text-gray-750">Affordable Performance for Your Website</span>
                    </h1>
                </div>
                <div class="max-w-5xl mx-auto space-y-6">
                    <p class="text-gray-700 text-lg leading-relaxed">
                        Whether you're just starting out with your business's website or looking for ways to increase your sales online,
                        you must have come across the advice of choosing a dedicated server as a web hosting solution. There are multiple
                        options in the market that can offer reliable performance. But if you want the best and affordable performance
                        for your website, it's worth considering all the options including what dedicated server hosting can offer.
                    </p>
                </div>
            </div>
        </section>

        {{-- Main Features Section --}}
        <section class="py-8 px-2 sm:px-6 lg:px-8 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">
                        The Main Dedicated Server Hosting Features
                    </h2>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    @php
                        $mainFeatures = [
                            [
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-8 h-8 text-yellow-500"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>',
                                'title' => 'Amazing Performance',
                                'description' => 'Though Dedicated server hosting is a more expensive option than other types of web hosting, it can offer an amazing and affordable performance for your website.',
                            ],
                            [
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-server w-8 h-8 text-blue-500"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><path d="M6 6h.01"/><path d="M6 18h.01"/></svg>',
                                'title' => 'Full Customization',
                                'description' => 'You can customize the server to your needs. This means you can optimize your website\'s performance to ensure fast load times.',
                            ],
                            [
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-8 h-8 text-green-500"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
                                'title' => 'Enhanced Security',
                                'description' => 'It offers high levels of security as you won\'t be sharing the server with other users. Thus, getting you full control over the security measures.',
                            ],
                        ];
                    @endphp
                    @foreach ($mainFeatures as $feature)
                        <div class="bg-gradient-to-r rounded-xl p-8 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                {!! $feature['icon'] !!}
                                <h3 class="text-xl font-semibold text-gray-900 ml-3">{{ $feature['title'] }}</h3>
                            </div>
                            <p class="text-gray-600 leading-relaxed">{{ $feature['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Hosting Features Grid --}}
        <section class="bg-gradient-to-br from-sky-100 via-white to-indigo-100 py-16 px-8">
            <div class="max-w-7xl mx-auto px-8 sm:px-12">
                {{-- Section Header --}}
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-4xl font-bold text-[#0e3c47] mb-4">
                        Powerful Hosting Features
                    </h2>
                    <p class="text-[18px] text-[#0e3c47ca] max-w-2xl mx-auto">
                        Everything you need to build and grow your website with confidence, backed by enterprise-grade infrastructure.
                        "Fast, affordable & fully optimized shared hosting for growing websites."
                    </p>
                </div>

                {{-- Features Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @php
                        $features = [
                            [
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-10 h-10 text-green-600"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/></svg>',
                                'title' => 'Advanced Trading Analytics',
                                'description' => 'Get real-time market insights and technical analysis tools to make informed trading decisions in volatile forex markets.',
                            ],
                            [
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-10 h-10 text-green-600"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>',
                                'title' => 'Ultra-Low Latency Execution',
                                'description' => 'Execute trades at lightning speed with our optimized infrastructure designed for high-frequency forex trading.',
                            ],
                            [
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bar-chart-3 w-10 h-10 text-green-600"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M12 17V5"/><path d="M6 17v-3"/></svg>',
                                'title' => 'Multi-Currency Dashboard',
                                'description' => 'Monitor multiple currency pairs simultaneously with customizable charts and real-time price feeds.',
                            ],
                            [
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-10 h-10 text-green-600"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>',
                                'title' => 'Global Market Access',
                                'description' => 'Trade major, minor, and exotic currency pairs across international markets with 24/5 availability.',
                            ],
                            [
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-10 h-10 text-green-600"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
                                'title' => 'Expert Trading Support',
                                'description' => 'Get guidance from experienced forex traders and market analysts available around the clock.',
                            ],
                            [
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-10 h-10 text-green-600"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 22 12 17 17 22 15.79 13.89"/></svg>',
                                'title' => 'Regulated & Secure Platform',
                                'description' => 'Trade with confidence on our fully regulated platform with bank-grade security and fund protection.',
                            ],
                        ];
                    @endphp
                    @foreach ($features as $feature)
                        <div class="bg-white/50 rounded-lg p-8 shadow-sm hover:shadow-xl transition-all duration-200 hover:bg-white border border-slate-200 backdrop-blur-xl">
                            <div class="flex flex-col items-center text-center">
                                <div class="mb-6 p-4 bg-sky-200/60 rounded-full">
                                    {!! $feature['icon'] !!}
                                </div>
                                <h3 class="text-lg font-semibold text-[#0e3c47] mb-3">
                                    {{ $feature['title'] }}
                                </h3>
                                <p class="text-[#0e3c47cf] text-[18px] leading-relaxed">
                                    {{ $feature['description'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
