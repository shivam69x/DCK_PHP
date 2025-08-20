@php
    $servers = [
        [
            "processor" => "Intel Core i5-13400 6 Cores",
            "clock" => "2.50GHz Base / 4.60GHz Turbo",
            "ram" => "32 GB DDR4",
            "storage" => "1 TB NVMe SSD",
            "bandwidth" => "100 TB",
            "ips" => "1 IPv4",
            "price" => 4999,
            "popular" => false,
            "location" => "USA - Los Angeles",
        ],
        [
            "processor" => "Intel Core i7-13700 8 Cores",
            "clock" => "2.10GHz Base / 5.20GHz Turbo",
            "ram" => "64 GB DDR4",
            "storage" => "2 TB NVMe SSD",
            "bandwidth" => "Unlimited",
            "ips" => "1 IPv4",
            "price" => 7999,
            "popular" => true,
            "location" => "USA - New York",
        ],
        [
            "processor" => "AMD Ryzen 7 7700X 8 Cores",
            "clock" => "4.50GHz Base / 5.40GHz Turbo",
            "ram" => "32 GB DDR5",
            "storage" => "1 TB NVMe SSD",
            "bandwidth" => "100 TB",
            "ips" => "1 IPv4",
            "price" => 6999,
            "popular" => false,
            "location" => "Canada - Toronto",
        ],
        [
            "processor" => "Intel Xeon E-2378 8 Cores",
            "clock" => "2.60GHz Base / 4.80GHz Turbo",
            "ram" => "128 GB DDR4 ECC",
            "storage" => "4 TB NVMe SSD",
            "bandwidth" => "Unlimited",
            "ips" => "1 IPv4",
            "price" => 12999,
            "popular" => false,
            "location" => "UK - London",
        ],
        [
            "processor" => "AMD EPYC 7443P 24 Cores",
            "clock" => "2.85GHz Base / 4.00GHz Turbo",
            "ram" => "256 GB DDR4 ECC",
            "storage" => "8 TB NVMe SSD",
            "bandwidth" => "Unlimited",
            "ips" => "1 IPv4",
            "price" => 18999,
            "popular" => false,
            "location" => "Germany - Frankfurt",
        ],
        [
            "processor" => "Intel Xeon Gold 5418Y 24 Cores",
            "clock" => "2.00GHz Base / 4.10GHz Turbo",
            "ram" => "512 GB DDR5 ECC",
            "storage" => "16 TB NVMe SSD",
            "bandwidth" => "Unlimited",
            "ips" => "1 IPv4",
            "price" => 24999,
            "popular" => false,
            "location" => "Netherlands - Amsterdam",
        ],
        [
            "processor" => "AMD EPYC 7763 64 Cores",
            "clock" => "2.45GHz Base / 3.50GHz Turbo",
            "ram" => "1 TB DDR4 ECC",
            "storage" => "32 TB NVMe SSD",
            "bandwidth" => "Unlimited",
            "ips" => "1 IPv4",
            "price" => 35999,
            "popular" => false,
            "location" => "France - Paris",
        ],
        [
            "processor" => "Dual Intel Xeon Gold 6448Y 64 Cores",
            "clock" => "2.10GHz Base / 4.20GHz Turbo",
            "ram" => "1 TB DDR5 ECC",
            "storage" => "64 TB NVMe SSD",
            "bandwidth" => "Unlimited",
            "ips" => "5 IPv4",
            "price" => 49999,
            "popular" => false,
            "location" => "Switzerland - Zurich",
        ],
        [
            "processor" => "Dual AMD EPYC 9654 192 Cores",
            "clock" => "2.40GHz Base / 3.70GHz Turbo",
            "ram" => "2 TB DDR5 ECC",
            "storage" => "128 TB NVMe SSD",
            "bandwidth" => "Unlimited",
            "ips" => "10 IPv4",
            "price" => 79999,
            "popular" => false,
            "location" => "Singapore",
        ],
        [
            "processor" => "Quad Intel Xeon Platinum 8490H 240 Cores",
            "clock" => "1.90GHz Base / 3.50GHz Turbo",
            "ram" => "4 TB DDR5 ECC",
            "storage" => "256 TB NVMe SSD",
            "bandwidth" => "Unlimited",
            "ips" => "25 IPv4",
            "price" => 149999,
            "popular" => false,
            "location" => "Japan - Tokyo",
        ],
    ];
@endphp

<div id="india" class="min-h-screen bg-gradient-to-br from-[#dff6fd] to-[#f7fafe] p-4 sm:p-6">
    <div class="max-w-7xl mx-auto">
        {{-- Header --}}
        <div class="text-center text-blue-600 mb-6">
            <div class="flex flex-col items-center gap-3 mb-4">
                <h1 class="text-xl sm:text-2xl lg:text-3xl font-extrabold text-blue-500 drop-shadow-sm tracking-tight text-center">
                    India's Best Linux / Windows Dedicated Servers at Affordable Prices
                </h1>
            </div>
        </div>

        {{-- Desktop Table --}}
        <div class="hidden lg:block">
            <div class="bg-sky-900 text-white rounded-t-lg">
                <div class="grid grid-cols-8 gap-6 p-4 font-semibold text-sm lg:text-base">
                    <div>Dedicated Processors</div>
                    <div>Clock Speed</div>
                    <div>RAM</div>
                    <div>Storage</div>
                    <div>Bandwidth</div>
                    <div>IPs</div>
                    <div>Price/Month</div>
                    <div>Order</div>
                </div>
            </div>

            <div class="bg-white rounded-b-lg shadow-lg overflow-hidden">
                @foreach ($servers as $server)
                    <div class="grid grid-cols-8 gap-4 p-4 border-b border-slate-100 hover:bg-slate-50 transition-colors {{ $server['popular'] ? 'bg-blue-50 border-l-4 border-l-blue-500' : '' }}">
                        <div class="font-medium text-slate-700">
                            {{ $server['processor'] }}
                            @if ($server['popular'])
                                <span class="ml-2 px-2 py-1 bg-blue-500 text-white text-xs rounded-full">
                                    Popular
                                </span>
                            @endif
                        </div>
                        <div class="text-slate-600 text-sm">{{ $server['clock'] }}</div>
                        <div class="text-slate-600 text-sm">{{ $server['ram'] }}</div>
                        <div class="text-slate-600 text-sm">{{ $server['storage'] }}</div>
                        <div class="text-slate-600 text-sm">{{ $server['bandwidth'] }}</div>
                        <div class="text-slate-600 text-sm">{{ $server['ips'] }}</div>
                        <div class="text-slate-600 text-sm" x-data>
                            <span x-text="window.convertPrice({{ $server['price'] }})"></span>
                        </div>
                        <div>
                            <a href="{{ url('/billing') }}?plan={{ urlencode(json_encode(array_merge($server, ['category' => 'D-India Hosting', 'type' => 'monthly']))) }}"
                                class="bg-sky-900 hover:bg-teal-600 text-white px-4 py-2 rounded-md transition-colors text-sm font-medium">
                                Buy Now
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Mobile Card View --}}
        <div class="lg:hidden space-y-6">
            @foreach ($servers as $server)
                <div class="bg-white p-4 rounded-lg shadow-md border {{ $server['popular'] ? 'border-blue-500' : 'border-gray-200' }}">
                    <div class="mb-2">
                        <h2 class="text-base font-semibold text-slate-800">
                            {{ $server['processor'] }}
                        </h2>
                        <p class="text-sm text-sky-600">{{ $server['location'] }}</p>
                        @if ($server['popular'])
                            <span class="inline-block mt-1 px-2 py-1 text-xs text-white bg-blue-500 rounded-full">
                                Popular
                            </span>
                        @endif
                    </div>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>
                            <strong>Clock:</strong> {{ $server['clock'] }}
                        </li>
                        <li>
                            <strong>RAM:</strong> {{ $server['ram'] }}
                        </li>
                        <li>
                            <strong>Storage:</strong> {{ $server['storage'] }}
                        </li>
                        <li>
                            <strong>Bandwidth:</strong> {{ $server['bandwidth'] }}
                        </li>
                        <li>
                            <strong>IPs:</strong> {{ $server['ips'] }}
                        </li>
                        <li>
                            <strong>Price:</strong> ₹{{ number_format($server['price']) }}
                        </li>
                    </ul>
                    <div class="mt-4">
                        <a href="{{ url('/billing') }}?plan={{ urlencode(json_encode(array_merge($server, ['category' => 'D-India Hosting', 'type' => 'monthly']))) }}"
                            class="w-full bg-sky-900 hover:bg-teal-600 text-white py-2 rounded-md transition-colors text-sm font-medium">
                            Configure Now
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
