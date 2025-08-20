<section class="bg-gradient-to-br from-sky-100 via-white to-indigo-100 py-16 px-8">
    <div class="max-w-7xl mx-auto px-8 sm:px-12">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-4xl font-bold text-[#0e3c47] mb-4">
                Powerful Reseller Features
            </h2>
            <p class="text-[18px] text-[#0e3c47ca] max-w-2xl mx-auto">
                Everything you need to start and scale your hosting business with professional-grade reseller tools and support.
                "Build your hosting empire with our comprehensive reseller platform."
            </p>
        </div>

        {{-- Features Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $features = [
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-server w-10 h-10 text-green-600"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><path d="M6 6h.01"/><path d="M6 18h.01"/></svg>',
                        'title' => 'White Label Hosting',
                        'description' => 'Brand your hosting service with your own company name, logo, and custom control panel interface.',
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-10 h-10 text-green-600"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
                        'title' => 'Unlimited Client Accounts',
                        'description' => 'Create and manage unlimited hosting accounts for your clients with full administrative control.',
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card w-10 h-10 text-green-600"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>',
                        'title' => 'Integrated Billing System',
                        'description' => 'Streamline your business with built-in WHMCS integration for automated invoicing and payments.',
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge w-10 h-10 text-green-600"><path d="m12 14v4"/><path d="M12 2a10 10 0 0 0-9.63 12.45L2 22l6-1.55a10 10 0 1 0 4-18.45z"/></svg>',
                        'title' => 'Resource Monitoring',
                        'description' => 'Track bandwidth, disk usage, and performance metrics across all your client accounts in real-time.',
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings w-10 h-10 text-green-600"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.78 1.25a2 2 0 0 0 .73 2.73l.04.03a2 2 0 0 1 0 2.73l-.04.03a2 2 0 0 0-.73 2.73l.78 1.25a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.78-1.25a2 2 0 0 0-.73-2.73l-.04-.03a2 2 0 0 1 0-2.73l.04-.03a2 2 0 0 0 .73-2.73l-.78-1.25a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>',
                        'title' => 'Full Root Access',
                        'description' => 'Complete server control with root access, custom configurations, and software installation privileges.',
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-10 h-10 text-green-600"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 22 12 17 17 22 15.79 13.89"/></svg>',
                        'title' => 'Priority Support',
                        'description' => 'Get dedicated reseller support with priority ticket handling and technical assistance for your business.',
                    ],
                ];
            @endphp
            @foreach ($features as $feature)
                <div class="bg-white/50 rounded-lg p-8 shadow-sm hover:shadow-xl transition-all duration-200 hover:bg-white/80 border border-slate-200 backdrop-blur-xl">
                    <div class="flex flex-col items-center text-center">
                        <div class="mb-6 p-4 bg-blue-50 rounded-full">
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
