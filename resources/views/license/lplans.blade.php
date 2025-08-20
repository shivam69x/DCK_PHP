@php
    $plans = [
        [
            "name" => "cPanel/whm licenses for VPS Server",
            "subtitle" => "START FROM",
            "price" => 599,
            "features" => [
                ["icon" => "globe", "text" => "Create cPanel unlimited accounts"],
                ["icon" => "shield", "text" => "Free Premium softaculous (One click CMS installer )"],
                ["icon" => "shield", "text" => "Free Free FileSSL (Lets encrypt SSL certificate )"],
                ["icon" => "wrench", "text" => "Free sitepad website builder"],
                ["icon" => "server", "text" => "Free Installation for license"],
                ["icon" => "headphones", "text" => "Always free in house technical support"],
            ],
            "bestValue" => false,
        ],
        [
            "name" => "cPanel/whm licenses for Dedicated Server",
            "subtitle" => "START FROM",
            "price" => 1099,
            "features" => [
                ["icon" => "globe", "text" => "Create cPanel unlimited accounts"],
                ["icon" => "shield", "text" => "Free Premium softaculous (One click CMS installer )"],
                ["icon" => "shield", "text" => "Free Free FileSSL (Lets encrypt SSL certificate )"],
                ["icon" => "wrench", "text" => "Free sitepad website builder"],
                ["icon" => "server", "text" => "Free Installation for license"],
                ["icon" => "headphones", "text" => "Always free in house technical support"],
            ],
            "bestValue" => true,
        ],
    ];
@endphp

<section class="min-h-screen bg-gradient-to-br from-sky-100 via-white to-indigo-100 py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-[40px] font-bold text-[#0e3c47] mb-5">
                Choose Your Perfect
                <span class="text-blue-600">cPanel License Plan</span>
            </h2>
            <p class="text-sm text-[#0e3c47cc] max-w-3xl mx-auto leading-relaxed">
                Flexible licensing for VPS and Dedicated servers with premium
                features.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 justify-center items-center">
            @foreach ($plans as $index => $plan)
                <div class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:scale-105 {{ $plan['bestValue'] ? 'ring-4 ring-green-500 ring-opacity-80' : '' }}"
                    style="transition-delay: {{ $index * 150 }}ms;">
                    @if ($plan['bestValue'])
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <div class="bg-gradient-to-r from-green-500 to-green-700 text-white px-6 py-1 rounded-full text-sm font-medium flex items-center gap-1 shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 fill-current"><path d="M12 18.35l-5.69 3.01 1.09-6.36L.35 9.69l6.37-.92L12 .35l2.48 5.72 6.37.92-4.05 3.31 1.09 6.36L12 18.35z"/></svg> Best Value
                            </div>
                        </div>
                    @endif

                    <div class="p-8 text-center">
                        <h3 class="text-xl font-bold text-[#0e3c47] mb-2">
                            {{ $plan['name'] }}
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">{{ $plan['subtitle'] }}</p>
                        <div class="text-4xl font-bold text-[#0e3c47] mb-6" x-data>
                            <span x-text="window.convertPrice({{ $plan['price'] }})"></span>
                        </div>

                        <ul class="space-y-4 text-left mb-6">
                            @foreach ($plan['features'] as $feature)
                                <li class="flex items-center gap-3 text-sm text-gray-700">
                                    <span class="text-green-600">
                                        @if ($feature['icon'] === 'globe')
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                                        @elseif ($feature['icon'] === 'shield')
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                        @elseif ($feature['icon'] === 'wrench')
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-2.06 2.06A4.93 4.93 0 0 0 9.13 18.8a4.94 4.94 0 0 0-6.95-6.95L8.3 7.13a1 1 0 0 0 0-1.4l1.6-1.6a1 1 0 0 0 1.4 0l3.77 3.77Z"/><path d="m18 11-1.4-1.4"/></svg>
                                        @elseif ($feature['icon'] === 'server')
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><line x1="6" x2="6.01" y1="6" y2="6"/><line x1="6" x2="6.01" y1="18" y2="18"/></svg>
                                        @elseif ($feature['icon'] === 'headphones')
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2Z"/><path d="M21 14h-3a2 2 0 0 1-2 2v3a2 2 0 0 1 2 2h3a2 2 0 0 1 2-2v-3a2 2 0 0 1-2-2Z"/><path d="M7 14v-3a9 9 0 0 1 18 0v3"/></svg>
                                        @endif
                                    </span>
                                    {{ $feature['text'] }}
                                </li>
                            @endforeach
                        </ul>

                        <a href="{{ url('/billing') }}?plan={{ urlencode(json_encode(array_merge($plan, ['features' => array_column($plan['features'], 'text')], ['category' => 'Linux Hosting', 'type' => 'monthly']))) }}"
                            class="w-full py-3 rounded-xl font-semibold text-base transition-all duration-300 transform hover:scale-105 {{ $plan['bestValue']
                                ? 'bg-gradient-to-r from-[#1c7389] to-[#0e3c47] text-white shadow-lg hover:opacity-90'
                                : 'bg-gradient-to-r from-[#1c7389] to-[#0e3c47] text-white shadow-lg hover:opacity-90'
                            }}">
                            Buy Now
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
