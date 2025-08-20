@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-[#dff6fd] to-[#f7fafe]">

        {{-- Hero Section --}}
        <section class="py-16 px-4 sm:px-6 lg:px-8 bg-whiite">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        Best Linux Dedicated Server Providers in 2025
                    </h2>
                </div>
                <div class="max-w-5xl mx-auto space-y-6">
                    <p class="text-gray-700 text-lg leading-relaxed">
                        The majority of server providers in the market guarantee cheap web hosting services. They even have pre-built hosting packages that include all the tools you will be needing to expand your company's online presence, such as a free domain name, unlimited storage, feature-rich cPanel, a one-click install among others. Yet, many of them do not specify that these offered resources still have some restrictions. The result is these restrictions lead to the shutdown of your website whenever it suffers a spike in traffic. You must pick the most reliable hosting company if you intend to successfully establish your website in the online world. Herein lies the value of web hosting services like by Digital Keepers.
                    </p>
                </div>
            </div>
        </section>

        {{-- Main Features Section --}}
        <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        The Main Dedicated Server Hosting Features:
                    </h2>
                </div>

                <div class="max-w-5xl mx-auto space-y-6">
                    <p class="text-gray-700 text-lg leading-relaxed">
                        Digital Keepers team understands that companies want a hosting solution that can meet every demand of their expanding online presence. One of the reasons we prioritize providing the best Linux dedicated hosting services is due to this only. You won't need to be concerned about hosting restrictions with our Linux Dedicated hosting because you will be having total control over your server. Want it better still? We also allow you to customize your hosting plans so that you truly receive the tools required to expand your internet presence and receive the greatest value with our services.
                    </p>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        Without any additional costs or hidden usage restrictions, our options are highly affordable. Thus, if you are searching for a reliable and adaptable hosting solution that can meet the demands of your expanding online presence, you can choose Digital Keepers Linux Dedicated Server hosting.
                    </p>
                </div>
            </div>
        </section>

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
