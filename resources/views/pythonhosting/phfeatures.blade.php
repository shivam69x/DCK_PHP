@php
    $features = [
        [
            'icon' => 'settings',
            'title' => "Pre-configured Python Environment",
            'description' => "Deploy instantly with Python 3.8, 3.9, 3.10, and 3.11 support, plus popular frameworks like Django, Flask, and FastAPI pre-installed."
        ],
        [
            'icon' => 'zap',
            'title' => "Lightning-Fast Performance",
            'description' => "Optimized Python runtime with SSD storage, Redis caching, and CDN integration for maximum application speed."
        ],
        [
            'icon' => 'code',
            'title' => "Package Management",
            'description' => "Full pip and conda support with isolated virtual environments to manage dependencies without conflicts."
        ],
        [
            'icon' => 'server',
            'title' => "Scalable Infrastructure",
            'description' => "Auto-scaling Python applications with load balancing and horizontal scaling to handle traffic spikes seamlessly."
        ],
        [
            'icon' => 'git-branch',
            'title' => "Git Integration & CI/CD",
            'description' => "Deploy directly from GitHub, GitLab, or Bitbucket with automated builds and continuous deployment pipelines."
        ],
        [
            'icon' => 'activity',
            'title' => "Real-time Monitoring",
            'description' => "Monitor your Python applications with detailed logs, performance metrics, and error tracking dashboards."
        ]
    ];
@endphp

<section class="bg-gradient-to-br from-sky-100 via-white to-indigo-100 py-16 px-8">
    <div class="max-w-7xl mx-auto px-8 sm:px-12">
        {{-- Section Header --}}
        <div class="text-center mb-12 ">
            <h2 class="text-2xl md:text-4xl font-bold text-blue-600 mb-4">
                Python Server Hosting
                <span class="text-[#0e3c47]"> Features</span>
            </h2>
            <p class="text-[18px] text-[#0e3c47ca] max-w-2xl mx-auto">
                Everything you need to deploy and scale your Python applications with confidence, backed by enterprise-grade infrastructure.
                "Fast, reliable & fully optimized Python hosting for modern web applications."
            </p>
        </div>

        {{-- Features Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($features as $feature)
                <div class="bg-white/50 rounded-lg p-8 shadow-sm hover:shadow-xl transition-all duration-200 hover:bg-white/80 border border-slate-200 backdrop-blur-xl">
                    <div class="flex flex-col items-center text-center">
                        <div class="mb-6 p-4 bg-blue-50 rounded-full">
                            @if ($feature['icon'] === 'settings')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.08.15a2 2 0 0 1 0 2l-.08.15a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.38a2 2 0 0 0-.73-2.73l-.08-.15a2 2 0 0 1 0-2l.08-.15a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
                            @elseif ($feature['icon'] === 'zap')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><path d="M10 13v7l-7-7h7L13 4l7 7h-7l4 4"/></svg>
                            @elseif ($feature['icon'] === 'code')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                            @elseif ($feature['icon'] === 'server')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><line x1="6" x2="6.01" y1="6" y2="6"/><line x1="6" x2="6.01" y1="18" y2="18"/></svg>
                            @elseif ($feature['icon'] === 'git-branch')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><line x1="6" x2="6" y1="3" y2="15"/><circle cx="18" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><path d="M18 9a9 9 0 0 1-9 9"/></svg>
                            @elseif ($feature['icon'] === 'activity')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
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
