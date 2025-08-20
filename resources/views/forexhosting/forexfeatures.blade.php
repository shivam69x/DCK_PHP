@php
    $features = [
        [
            'icon' => 'trending-up',
            'title' => "Advanced Trading Analytics",
            'description' => "Get real-time market insights and technical analysis tools to make informed trading decisions in volatile forex markets."
        ],
        [
            'icon' => 'zap',
            'title' => "Ultra-Low Latency Execution",
            'description' => "Execute trades at lightning speed with our optimized infrastructure designed for high-frequency forex trading."
        ],
        [
            'icon' => 'bar-chart-3',
            'title' => "Multi-Currency Dashboard",
            'description' => "Monitor multiple currency pairs simultaneously with customizable charts and real-time price feeds."
        ],
        [
            'icon' => 'globe',
            'title' => "Global Market Access",
            'description' => "Trade major, minor, and exotic currency pairs across international markets with 24/5 availability."
        ],
        [
            'icon' => 'users',
            'title' => "Expert Trading Support",
            'description' => "Get guidance from experienced forex traders and market analysts available around the clock."
        ],
        [
            'icon' => 'award',
            'title' => "Regulated & Secure Platform",
            'description' => "Trade with confidence on our fully regulated platform with bank-grade security and fund protection."
        ]
    ];
@endphp

<section class="bg-gradient-to-br from-sky-100 via-white to-indigo-100 py-16 px-8">
    <div class="max-w-7xl mx-auto px-8 sm:px-12">
        {{-- Section Header --}}
        <div class="text-center mb-12 ">
            <h2 class="text-2xl md:text-4xl font-bold text-[#0e3c47] mb-4">
                Powerful Forex Hosting Features
            </h2>
            <p class="text-[18px] text-[#0e3c47ca] max-w-2xl mx-auto">
                Everything you need to build and grow your website with confidence, backed by enterprise-grade infrastructure.
                "Fast, affordable & fully optimized shared hosting for growing websites."
            </p>
        </div>

        {{-- Features Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($features as $feature)
                <div class="bg-white/50 rounded-lg p-8 shadow-sm hover:shadow-xl transition-all duration-200 hover:bg-white border border-slate-200 backdrop-blur-xl">
                    <div class="flex flex-col items-center text-center">
                        <div class="mb-6 p-4 bg-sky-200/60 rounded-full">
                            @if ($feature['icon'] === 'trending-up')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                            @elseif ($feature['icon'] === 'zap')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><path d="M10 13v7l-7-7h7L13 4l7 7h-7l4 4"/></svg>
                            @elseif ($feature['icon'] === 'bar-chart-3')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><path d="M12 20V10"/><path d="M18 20V4"/><path d="M6 20v-4"/></svg>
                            @elseif ($feature['icon'] === 'globe')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                            @elseif ($feature['icon'] === 'users')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                            @elseif ($feature['icon'] === 'award')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.89"/></svg>
                            @endif
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
