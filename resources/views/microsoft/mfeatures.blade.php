@php
    $features = [
        [
            'icon' => 'mail',
            'title' => "Advanced Email Management",
            'description' => "Professional email hosting with advanced security, spam protection, and seamless integration across all devices."
        ],
        [
            'icon' => 'file-text',
            'title' => "Real-time Document Collaboration",
            'description' => "Create, edit, and share documents simultaneously with your team using Word, Excel, and PowerPoint online."
        ],
        [
            'icon' => 'calendar',
            'title' => "Intelligent Calendar Scheduling",
            'description' => "Smart scheduling with automated meeting coordination, room booking, and seamless calendar sharing capabilities."
        ],
        [
            'icon' => 'video',
            'title' => "HD Video Conferencing",
            'description' => "Host professional meetings with crystal-clear video, screen sharing, and recording features for up to 300 participants."
        ],
        [
            'icon' => 'shield',
            'title' => "Enterprise-Grade Security",
            'description' => "Advanced threat protection, data encryption, and compliance tools to keep your business data safe and secure."
        ],
        [
            'icon' => 'cloud',
            'title' => "Cloud Storage & Backup",
            'description' => "1TB+ of secure cloud storage per user with automatic backup, file versioning, and anywhere access to your files."
        ]
    ];
@endphp

<section class="bg-gradient-to-br from-sky-100 via-white to-indigo-100 py-16 px-8">
    <div class="max-w-7xl mx-auto px-8 sm:px-12">
        {{-- Section Header --}}
        <div class="text-center mb-12 ">
            <h2 class="text-2xl md:text-4xl font-bold text-[#0e3c47] mb-4">
                Microsoft 365 Features
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
                            @if ($feature['icon'] === 'mail')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.93 1.93 0 0 1-2.06 0L2 7"/></svg>
                            @elseif ($feature['icon'] === 'file-text')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                            @elseif ($feature['icon'] === 'calendar')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
                            @elseif ($feature['icon'] === 'video')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><path d="m22 8-6 4 6 4V8Z"/><rect width="14" height="12" x="1" y="6" rx="2" ry="2"/></svg>
                            @elseif ($feature['icon'] === 'shield')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            @elseif ($feature['icon'] === 'cloud')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600"><path d="M17.5 19H18a4 4 0 0 0 0-8h-.5A2.5 2.5 0 0 1 15 9.5a2.5 2.5 0 0 1 .4-1.2l.7-.7A3.5 3.5 0 0 0 12 4.5 3.5 3.5 0 0 0 7.5 7H7a4 4 0 0 0-4 4 4 4 0 0 0 .5 8H5"/></svg>
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
