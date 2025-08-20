@php
    $plans = [
        [
            "name" => "Basic",
            "price" => 510,
            "originalPrice" => 1020,
            "savings" => "50%",
            "description" => "Start with web and mobile apps",
            "features" => [
                "Web and mobile versions of Word, Excel, PowerPoint, and Outlook",
                "Chat, call, meet up to 300 attendees",
                "1 TB of cloud storage per user",
                "Business-class email",
                "Manage customer appointments",
                "Anytime phone and web support",
            ],
            "ctaText" => "Buy Now",
            "popular" => false,
        ],
        [
            "name" => "STANDARD",
            "price" => 1062.5,
            "originalPrice" => 2125,
            "savings" => "50%",
            "description" => "Everything in Business Basic, plus",
            "features" => [
                "Desktop versions of Word, Excel, PowerPoint, and Outlook",
                "Easily host webinars",
                "Attendee registration and reporting tools",
                "Security and management controls",
                "Tools to create personalized documents and professional layouts",

            ],
            "ctaText" => "Buy Now",
            "popular" => true,
        ],
        [
            "name" => "APPS",
            "price" => 701,
            "originalPrice" => 1402,
            "savings" => "50%",
            "description" => "Excludes chat, meeting, calling",
            "features" => [
                "Desktop versions of Word, Excel, PowerPoint, and Outlook",
                "1 TB of cloud storage per user",
                "Anytime phone and web support",
                "Security and management controls",
                "Advanced security",
            ],
            "ctaText" => "Buy Now",
            "popular" => false,
        ],
        [
            "name" => "PREMIUM",
            "price" => 1683,
            "originalPrice" => 3366,
            "savings" => "50%",
            "description" => "Maximum performance, Everything in Business Standard, plus",
            "features" => [
                "Advanced security",
                "Access and data control",
                "30 GB storage per user",
                "Cyberthreat protection",
                "Security and management controls",
            ],
            "ctaText" => "Buy Now",
            "popular" => false,
        ],
    ];
@endphp

<section class="min-h-screen bg-gradient-to-br from-sky-100 via-white to-indigo-100 py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        {{-- Header --}}
        <div class="text-center mb-16">
            <div class="flex items-center flex-col ">
                <img class="" src="{{ asset('assets/mhome02.png') }}" alt="Microsoft 365 Family" />
            </div>

            <h2 class="text-2xl sm:text-[40px] font-bold text-[#0e3c47] mb-5 items-center ">
                Choose Your Perfect
                <span class="text-blue-600 "> Microsoft 365 Plan</span>
            </h2>
            <p class="text-sm text-[#0e3c47cc] max-w-3xl mx-auto leading-relaxed">
                Get started with complete confidence. Our 30-day money-back
                guarantee means it's risk-free.
            </p>
        </div>

        {{-- Plans Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($plans as $index => $plan)
                <div class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:scale-105 {{ $plan['popular'] ? 'ring-4 ring-green-500 ring-opacity-80' : '' }}"
                    style="transition-delay: {{ $index * 150 }}ms;">
                    {{-- Popular Badge --}}
                    @if ($plan['popular'])
                        <div class="absolute -top-7 left-1/2 transform -translate-x-1/2">
                            <div class="bg-gradient-to-r from-green-500 to-green-700 text-white px-6 py-1 rounded-full text-sm font-medium flex items-center gap-1 shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 fill-current"><path d="M12 18.35l-5.69 3.01 1.09-6.36L.35 9.69l6.37-.92L12 .35l2.48 5.72 6.37.92-4.05 3.31 1.09 6.36L12 18.35z"/></svg>
                                Most Popular
                            </div>
                        </div>
                    @endif

                    <div class="p-8">
                        {{-- Plan Header --}}
                        <div class="text-center mb-8">
                            <h3 class="text-2xl font-bold text-[#0e3c47] mb-2">
                                {{ $plan['name'] }}
                            </h3>
                            <p class="text-[#0e3c47da] text-sm mb-4">
                                {{ $plan['description'] }}
                            </p>

                            {{-- Pricing --}}
                            <div class="mb-4">
                                <div class="flex items-center justify-center gap-2 mb-2">
                                    <span class="text-gray-400 text-lg line-through" x-data>
                                        <span x-text="window.convertPrice({{ $plan['originalPrice'] }})"></span>
                                    </span>
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-semibold">
                                        Save {{ $plan['savings'] }}
                                    </span>
                                </div>
                                <div class="flex items-baseline justify-center" x-data>
                                    <span class="text-4xl font-bold text-[#0e3c47]" x-text="window.convertPrice({{ $plan['price'] }})"></span>
                                    <span class="text-gray-600 ml-1">/month</span>
                                </div>
                            </div>
                        </div>

                        {{-- Features List --}}
                        <div class="mb-8">
                            <ul class="space-y-4">
                                @foreach ($plan['features'] as $featureIndex => $feature)
                                    <li class="flex items-start gap-3">
                                        <div class="flex-shrink-0 w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mt-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3 h-3 text-green-600"><polyline points="20 6 9 17 4 12"/></svg>
                                        </div>
                                        <span class="text-gray-700 text-sm leading-relaxed">
                                            {{ $feature }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- CTA Button --}}
                        <a href="{{ url('/billing') }}?plan={{ urlencode(json_encode(array_merge($plan, ['category' => 'Microsoft Plans', 'type' => 'monthly']))) }}"
                            class="w-full py-4 px-6 rounded-xl font-semibold text-base transition-all duration-300 transform hover:scale-105 {{ $plan['popular']
                                ? 'rounded-xl border border-white bg-gradient-to-r from-[#0e3c47] to-[#0040514d] text-white shadow-lg backdrop-blur-md transition duration-300 hover:border-white/100 hover:from-[#133c46] hover:to-[#0040515d] hover:shadow-xl'
                                : 'bg-gray-100 text-gray-900 hover:bg-blue-50 hover:text-blue-700 border-2 border-transparent hover:border-blue-200'
                            }}">
                            {{ $plan['ctaText'] }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Bottom Section --}}
        <div class="text-center mt-20">
            <div class="bg-white/90 border backdrop-blur-sm rounded-2xl p-8 max-w-4xl mx-auto">
                <h3 class="text-xl font-bold text-gray-900 mb-11">
                    Best Features
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-10 text-center">
                    <div class="flex flex-col items-center">
                        <div class="bg-blue-100 rounded-full p-3 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-green-500"><polyline points="20 6 9 17 4 12"/></svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-green-500"><polyline points="20 6 9 17 4 12"/></svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-green-500"><polyline points="20 6 9 17 4 12"/></svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-green-500"><polyline points="20 6 9 17 4 12"/></svg>
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
