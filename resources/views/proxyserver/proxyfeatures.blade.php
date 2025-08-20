@php
    $features = [
        [
            'icon' => 'dollar-sign',
            'title' => "Affordable Proxy",
            'description' => 'Need lots of proxies within budget? Webshare Proxy is the perfect fit. Plans starting at <span x-data x-text="window.convertPrice(400)"></span>/mo.',
        ],
        [
            'icon' => 'zap',
            'title' => "Fast Proxy Servers",
            'description' => "Proxy servers are optimized to handle fast traffic from all around the world. All proxy servers have dedicated Gigabit line to connect to internet.",
        ],
        [
            'icon' => 'settings',
            'title' => "Fully Customizable",
            'description' => "Configure countries, bandwidth, threads and speed. Not sure? Start small and customize as you go. No commitments required.",
        ],
        [
            'icon' => 'shield',
            'title' => "Fully Private",
            'description' => "Your daily proxy activity is safe with us. Your private information is never shared with 3rd parties.",
        ],
    ];
@endphp

<div class="min-h-screen bg-gradient-to-b from-sky-50 to-white">
    {{-- Features Section --}}
    <div class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-[#0e3c47] mb-4">
                    Proxy Server Features
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    How are the proxy servers different from
                    <span class="text-green-600 font-medium">private proxy</span>
                    and
                    <span class="text-green-600 font-medium">
                        dedicated proxy
                    </span>
                    ?
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($features as $feature)
                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
                        <div class="bg-sky-50 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                            @if ($feature['icon'] === 'dollar-sign')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-green-600"><line x1="12" x2="12" y1="2" y2="22"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                            @elseif ($feature['icon'] === 'zap')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-green-600"><path d="M10 13v7l-7-7h7L13 4l7 7h-7l4 4"/></svg>
                            @elseif ($feature['icon'] === 'settings')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-green-600"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.08.15a2 2 0 0 1 0 2l-.08.15a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.38a2 2 0 0 0-.73-2.73l-.08-.15a2 2 0 0 1 0-2l.08-.15a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
                            @elseif ($feature['icon'] === 'shield')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-green-600"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            @endif
                        </div>
                        <h3 class="text-lg font-semibold text-[#0e3c47] mb-3">
                            {{ $feature['title'] }}
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            {!! $feature['description'] !!}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
