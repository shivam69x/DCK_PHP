@php
    $pricingData = [
        [
            "name" => "Proxy Plan - 2GB RAM",
            "ram" => "2 GB",
            "speed" => "500 MBPS",
            "price" => 400,
            "originalPrice" => 500,
        ],
        [
            "name" => "Proxy Plan - 4GB RAM",
            "ram" => "4 GB",
            "speed" => "1 GBPS",
            "price" => 500,
            "originalPrice" => 600,
        ],
        [
            "name" => "Proxy Plan - 8GB RAM",
            "ram" => "8 GB",
            "speed" => "1 to 3 GBPS",
            "price" => 900,
            "originalPrice" => 1000,
        ],
        [
            "name" => "Proxy Plan - 16GB RAM",
            "ram" => "16 GB",
            "speed" => "2 to 3 GBPS",
            "price" => 1300,
            "originalPrice" => 1500,
        ],
        [
            "name" => "Proxy Plan - 32GB RAM",
            "ram" => "32 GB",
            "speed" => "3 to 4 GBPS",
            "price" => 3200,
            "originalPrice" => 3500,
        ],
        [
            "name" => "Proxy Plan - 64GB RAM",
            "ram" => "64 GB",
            "speed" => "3 to 5 GBPS",
            "price" => 4500,
            "originalPrice" => 4800,
        ],
    ];
@endphp

<div class="min-h-screen bg-gradient-to-b from-sky-50 to-white">
    <div class="py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-sky-100 via-white to-indigo-100">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-[#0e3c47] mb-4">
                    Proxy Server Plans
                </h2>
                <p class="text-lg text-gray-600">
                    Choose the perfect plan based on your RAM and speed requirements
                </p>
            </div>

            {{-- Desktop Table --}}
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hidden md:block">
                <div class="bg-sky-900 text-white">
                    <div class="grid grid-cols-4 gap-4 px-6 py-4">
                        <div class="font-semibold">RAM</div>
                        <div class="font-semibold">Price</div>
                        <div class="font-semibold flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M10 13v7l-7-7h7L13 4l7 7h-7l4 4"/></svg>
                            Speed
                        </div>
                        <div></div>
                    </div>
                </div>

                <div class="divide-y divide-gray-100">
                    @foreach ($pricingData as $plan)
                        <div class="grid grid-cols-4 gap-4 px-6 py-4 items-center hover:bg-sky-50 transition-colors duration-150">
                            <div class="font-medium text-[#0e3c47]">{{ $plan['ram'] }}</div>
                            <div class="font-semibold text-sky-700" x-data>
                                <span x-text="window.convertPrice({{ $plan['price'] }})"></span>/m
                            </div>
                            <div class="text-gray-700">{{ $plan['speed'] }}</div>
                            <div>
                                <a href="{{ url('/billing') }}?plan={{ urlencode(json_encode(array_merge($plan, ['category' => 'Proxy Plans', 'type' => 'monthly']))) }}"
                                    class="text-sm bg-sky-700 text-white py-2 px-4 rounded-lg hover:bg-sky-900 transition">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Mobile Cards --}}
            <div class="md:hidden mt-8 space-y-4">
                @foreach ($pricingData as $plan)
                    <div class="bg-white rounded-lg border border-gray-200 p-4 shadow-sm">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-medium text-[#0e3c47]">{{ $plan['ram'] }}</span>
                            <span class="font-semibold text-indigo-600" x-data>
                                <span x-text="window.convertPrice({{ $plan['price'] }})"></span>/m
                            </span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-700 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-indigo-600"><path d="M10 13v7l-7-7h7L13 4l7 7h-7l4 4"/></svg>
                            <span>{{ $plan['speed'] }}</span>
                        </div>
                        <a href="{{ url('/billing') }}?plan={{ urlencode(json_encode(array_merge($plan, ['category' => 'Proxy Plans', 'type' => 'monthly']))) }}"
                            class="w-full text-sm bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
                            Buy Now
                        </a>
                    </div>
                @endforeach
            </div>

            {{-- Note --}}
            <div class="mt-8 text-center">
                <p class="text-gray-600">
                    All plans include unlimited bandwidth and 24/7 customer support
                </p>
            </div>
        </div>
    </div>
</div>
