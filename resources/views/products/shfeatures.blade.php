<section class="bg-gradient-to-br from-sky-100 via-white to-indigo-100 py-16 px-8">
    <div class="max-w-7xl mx-auto px-8 sm:px-12">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-4xl font-bold text-[#0e3c47] mb-4">
                Powerful
                <span class="text-blue-600"> Shared Hosting Features</span>
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
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-10 h-10 text-green-600"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
                        'title' => 'Free SSL Certificate',
                        'description' => 'Secure your website with industry-standard SSL encryption to protect visitor data and boost SEO rankings.',
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-10 h-10 text-green-600"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
                        'title' => '99.9% Uptime Guarantee',
                        'description' => 'Keep your website online with our reliable infrastructure and comprehensive uptime monitoring.',
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-headphones w-10 h-10 text-green-600"><path d="M16 18a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2V7L4 10V4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v10h2V4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2z"/></svg>',
                        'title' => '24/7 Customer Support',
                        'description' => 'Get expert help anytime with our dedicated support team available via chat, email, and phone.',
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wifi w-10 h-10 text-green-600"><path d="M12 18h.01"/><path d="M2 8c.95-.5 2.17-.9 3.5-.9 1.48 0 2.8.5 4 1.4"/><path d="M19 8c-.95-.5-2.17-.9-3.5-.9-1.48 0-2.8.5-4 1.4"/><path d="M17 12h.01"/><path d="M7 12h.01"/><path d="M22 22L2 2"/><path d="M14 20h.01"/><path d="M10 20h.01"/><path d="M17 16h.01"/><path d="M7 16h.01"/><path d="M22 18v-2a2 2 0 0 0-2-2h-3"/><path d="M2 18v-2a2 2 0 0 1 2-2h3"/><path d="M12 12h.01"/></svg>',
                        'title' => 'Unlimited Bandwidth',
                        'description' => 'Handle traffic spikes without worry with our unmetered bandwidth and data transfer.',
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-database w-10 h-10 text-green-600"><path d="M12 12c.95 0 2-.45 2.4-1.35.4-1.05 0-2.15-1.4-2.15-.95 0-1.9.3-2.3 1.25-.4 1.05 0 2.15 1.4 2.15z"/><path d="M22 10a8 8 0 0 0-16 0"/><path d="M2 10a8 8 0 0 1 16 0"/><path d="M2 14a8 8 0 0 0 16 0"/><path d="M22 14a8 8 0 0 1-16 0"/><path d="M22 18a8 8 0 0 0-16 0"/><path d="M2 18a8 8 0 0 1 16 0"/><path d="M12 22a8 8 0 0 0 0-16z"/></svg>',
                        'title' => 'SSD Storage',
                        'description' => 'Experience faster loading times with high-performance solid-state drive storage technology.',
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock w-10 h-10 text-green-600"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>',
                        'title' => 'Daily Backups',
                        'description' => 'Protect your data with automated daily backups and easy one-click restore functionality.',
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
