<div class="bg-white py-16 px-2 sm:px-3 lg:px-4 border-slate-300 rounded-2xl mt-16 bg-gradient-to-t from-sky-200 shadow-md backdrop-blur-3xl">
    <div class="max-w-7xl mx-auto">
        {{-- Hero Content --}}
        <div class="text-center mb-16">
            <h1 class="text-2xl md:text-5xl lg:text-3xl font-light text-[#0e3c47] mb-6">
                Everything you need to
                <br />
                <span class="font-medium">build your business online</span>
            </h1>
            <p class="text-lg text-[#0e3c47c0] max-w-3xl mx-auto mb-8">
                Get started with professional web hosting, domain registration,
                and all the tools you need to create a successful online presence.
            </p>
        </div>

        {{-- Feature Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">
            @php
                $features = [
                    [
                        'title' => 'All-in-one',
                        'description' => 'All the tools you need to manage your business, from website creation to personalized email.',
                        'bgColor' => 'bg-blue-500',
                        'iconBg' => 'bg-blue-100',
                        'icon' => 'assets/all.png',
                    ],
                    [
                        'title' => 'Secure',
                        'description' => 'Keep yourself safe with an included SSL certificate, malware protection, and daily backups.',
                        'bgColor' => 'bg-green-500',
                        'iconBg' => 'bg-green-100',
                        'icon' => 'assets/shield.png',
                    ],
                    [
                        'title' => 'Lightning fast',
                        'description' => 'Benefit from ultra-fast load times and unlimited data traffic.',
                        'bgColor' => 'bg-orange-500',
                        'iconBg' => 'bg-orange-100',
                        'icon' => 'assets/lighting.png',
                    ],
                    [
                        'title' => 'Free domain',
                        'description' => 'Get your domain for free for the first year on <span class="underline decoration-2 underline-offset-2">select TLDs</span> when you buy a hosting plan.',
                        'bgColor' => 'bg-green-500',
                        'iconBg' => 'bg-green-100',
                        'icon' => 'assets/domain.png',
                    ],
                ];
            @endphp
            @foreach ($features as $feature)
                <div class="rounded-xl p-4 text-center shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-50 border-t-slate-300 border-s-slate-300 border-e-slate-300 bg-white/40 backdrop-blur-md">
                    {{-- Icon Container --}}
                    <div class="relative mb-6 flex justify-center">
                        <div class="w-16 h-16 {{ $feature['iconBg'] }} rounded-2xl flex items-center justify-center relative">
                            {{-- Image --}}
                            <img src="{{ asset($feature['icon']) }}" alt="{{ $feature['title'] }}" class="w-10 object-contain" />

                            {{-- Small colored circle accent --}}
                            <div class="absolute -top-1 -right-1 w-5 h-5 {{ $feature['bgColor'] }} rounded-full flex items-center justify-center">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                            </div>
                        </div>
                    </div>

                    {{-- Content --}}
                    <h3 class="text-lg font-medium text-[#0e3c47] mb-4">
                        {{ $feature['title'] }}
                    </h3>
                    <p class="text-[#0e3c47e1] leading-relaxed text-sm font-normal">
                        {!! $feature['description'] !!} {{-- Use {!! !!} for raw HTML output --}}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</div>
