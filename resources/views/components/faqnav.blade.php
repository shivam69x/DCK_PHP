<div class="bg-white sticky z-40 top-11 bg-white/30 backdrop-blur-md shadow-md h-12 flex items-center">
    <div class="w-full px-4 sm:px-6 md:px-8">
        <div class="max-w-[600px] bg-gray-300 rounded-full py-1 px-4 flex items-center overflow-x-auto scrollbar-hide">
            {{-- Upward Arrow Icon --}}
            <div class="flex-shrink-0 mr-3">
                {{-- ChevronUp icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up w-5 text-gray-800"><path d="m18 15-6-6-6 6"/></svg>
            </div>

            {{-- Navigation Items --}}
            <div class="flex items-center space-x-4 sm:space-x-6 whitespace-nowrap">
                @php
                    $navItems = [
                        ['name' => 'Home', 'targetId' => 'home'],
                        ['name' => 'Offers', 'targetId' => 'offers'],
                        ['name' => 'Why DC keepers?', 'targetId' => 'whyDCkeepers'],
                        ['name' => 'FAQ', 'targetId' => 'faq'],
                    ];
                @endphp
                @foreach ($navItems as $item)
                    <button
                        onclick="handleScroll('{{ $item['targetId'] }}')"
                        class="text-gray-900 font-medium text-sm hover:text-gray-700 transition-colors duration-200 px-2 py-1"
                    >
                        {{ $item['name'] }}
                    </button>
                @endforeach
            </div>
        </div>
    </div>
</div>
