<nav x-data="{ activeDropdown: null, activeSubDropdown: null, mobileMenuOpen: false }"
     @scroll.window="activeDropdown = null; activeSubDropdown = null; mobileMenuOpen = false;"
     class="bg-cyan-100 border-b border-cyan-200 z-50 sticky top-0">
    <div class="max-w-[2800px] mx-auto px-4">
        {{-- Top bar container --}}
        <div class="flex items-center justify-between h-11">
            {{-- Logo --}}
            <a href="{{ url('/homepage') }}" class="w-[160px] flex-shrink-0">
                {{-- Assuming DCK - Footer.png is in public/assets --}}
                <img src="{{ asset('assets/DCK - Footer.png') }}" alt="Logo" />
            </a>

            {{-- Desktop Menu --}}
            <div class="hidden lg:flex items-center flex-grow ml-6 space-x-2">
                @php
                    $menuItems = [
                        ['name' => 'Hosting', 'hasDropdown' => true],
                        ['name' => 'Servers', 'hasDropdown' => true],
                        ['name' => 'Forex Servers', 'hasDropdown' => false, 'link' => '/forex-servers'],
                        ['name' => 'Proxy Servers', 'hasDropdown' => false, 'link' => '/proxy-servers'],
                        ['name' => 'Bulk Email', 'hasDropdown' => false, 'link' => '/bulk-email'],
                        ['name' => 'Google Workspace', 'hasDropdown' => false, 'link' => '/google-workspace'],
                        ['name' => 'Microsoft 365', 'hasDropdown' => false, 'link' => '/microsoft-365'],
                        ['name' => 'LICENSE', 'hasDropdown' => false, 'link' => '/license'],
                        ['name' => 'About us', 'hasDropdown' => false, 'link' => '/about-us'],
                    ];

                    $dropdownContent = [
                        'Hosting' => [
                            ['name' => 'Shared Hosting', 'link' => '/shared-hosting'],
                            ['name' => 'Reseller Hosting', 'link' => '/reseller-hosting'],
                            ['name' => 'Python', 'link' => '/python-hosting'],
                        ],
                        'Servers' => [
                            [
                                'name' => 'Dedicated Servers',
                                'hasSubMenu' => true,
                                'subItems' => [
                                    ['name' => 'India', 'link' => '/dedicatedserver/india'],
                                    ['name' => 'Foreign', 'link' => '/dedicatedserver/foreign'],
                                ],
                            ],
                            [
                                'name' => 'VPS',
                                'hasSubMenu' => true,
                                'subItems' => [
                                    ['name' => 'India', 'link' => '/vps/india'],
                                    ['name' => 'Foreign', 'link' => '/vps/foreign'],
                                ],
                            ],
                            [
                                'name' => 'Cloud Servers',
                                'hasSubMenu' => true,
                                'subItems' => [
                                    ['name' => 'India', 'link' => '/cloud/india'],
                                    ['name' => 'Foreign', 'link' => '/cloud/foreign'],
                                ],
                            ],
                        ],
                    ];
                @endphp

                @foreach ($menuItems as $item)
                    <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        @if (isset($item['link']) && !$item['hasDropdown'])
                            <a href="{{ url($item['link']) }}"
                               class="uppercase flex items-center px-2 py-2 text-[14px] font-bold text-[#075466] hover:text-cyan-600 hover:bg-cyan-50 rounded-lg transition-colors duration-200">
                                {{ $item['name'] }}
                            </a>
                        @else
                            <button @click="open = !open"
                                    class="uppercase flex items-center px-2 py-2 text-[14px] font-bold text-[#075466] hover:text-cyan-600 hover:bg-cyan-50 rounded-lg transition-colors duration-200">
                                {{ $item['name'] }}
                                <svg :class="{ 'rotate-180': open }"
                                     class="ml-2 w-4 h-4 transition-transform"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>

                            {{-- Desktop Dropdown --}}
                            <div x-show="open" x-cloak
                                 class="absolute top-full left-0 mt-2 w-56 bg-white rounded-md shadow-xl border z-50">
                                @if (isset($dropdownContent[$item['name']]))
                                    @foreach ($dropdownContent[$item['name']] as $subItem)
                                        <div class="relative" x-data="{ subOpen: false }" @mouseenter="subOpen = true" @mouseleave="subOpen = false">
                                            @if (isset($subItem['hasSubMenu']) && $subItem['hasSubMenu'])
                                                <button @click="subOpen = !subOpen"
                                                        class="flex justify-between items-center w-full px-4 py-2 text-sm font-semibold text-gray-800 hover:bg-cyan-50">
                                                    {{ $subItem['name'] }}
                                                    <svg :class="{ 'rotate-180': subOpen }"
                                                         class="ml-2 w-4 h-4 transition-transform"
                                                         fill="none"
                                                         stroke="currentColor"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                                    </svg>
                                                </button>

                                                <div x-show="subOpen" x-cloak
                                                     class="absolute top-0 left-full mt-0 ml-1 w-48 bg-white border rounded-md shadow-xl z-50">
                                                    @foreach ($subItem['subItems'] as $child)
                                                        <a href="{{ url($child['link']) }}"
                                                           class="block px-4 py-2 text-sm font-medium text-gray-800 hover:bg-cyan-50">
                                                            {{ $child['name'] }}
                                                        </a>
                                                    @endforeach
                                                </div>
                                            @else
                                                <a href="{{ url($subItem['link']) }}"
                                                   class="block px-4 py-2 text-sm font-semibold text-gray-800 hover:bg-cyan-50">
                                                    {{ $subItem['name'] }}
                                                </a>
                                            @endif
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>

            {{-- Currency Button (Desktop) --}}
            <div class="hidden lg:block ml-auto">
                @include('partials.navcurrency')
            </div>

            {{-- Hamburger Icon (Mobile) --}}
            <div class="lg:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="text-[#075466] focus:outline-none">
                    <svg class="w-6 h-6"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              :d="mobileMenuOpen ? 'M6 18L18 6M6 6l12 12' : 'M4 6h16M4 12h16M4 18h16'"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div x-show="mobileMenuOpen" x-cloak
             class="lg:hidden flex flex-col space-y-1 py-2">
            @foreach ($menuItems as $item)
                <div class="relative" x-data="{ mobileOpen: false }" :class="{ 'bg-cyan-50': mobileOpen && mobileMenuOpen }">
                    @if (isset($item['link']) && !$item['hasDropdown'])
                        <a href="{{ url($item['link']) }}"
                           class="block px-4 py-2 text-sm font-semibold text-[#075466] hover:bg-cyan-50">
                            {{ $item['name'] }}
                        </a>
                    @else
                        <button @click="mobileOpen = !mobileOpen"
                                class="w-full text-left px-4 py-2 text-sm font-bold text-[#075466] hover:bg-cyan-50">
                            {{ $item['name'] }}
                            <svg :class="{ 'rotate-180': mobileOpen }"
                                 class="ml-2 w-4 h-4 transition-transform"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <div x-show="mobileOpen" x-cloak class="pl-4">
                            @if (isset($dropdownContent[$item['name']]))
                                @foreach ($dropdownContent[$item['name']] as $subItem)
                                    <div class="relative" x-data="{ mobileSubOpen: false }" :class="{ 'bg-cyan-100': mobileSubOpen && mobileOpen && mobileMenuOpen }">
                                        @if (isset($subItem['hasSubMenu']) && $subItem['hasSubMenu'])
                                            <button @click="mobileSubOpen = !mobileSubOpen"
                                                    class="w-full text-left px-4 py-2 text-sm font-medium text-gray-800 hover:bg-cyan-50">
                                                {{ $subItem['name'] }}
                                                <svg :class="{ 'rotate-180': mobileSubOpen }"
                                                     class="ml-2 w-4 h-4 transition-transform"
                                                     fill="none"
                                                     stroke="currentColor"
                                                     viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                                </svg>
                                            </button>
                                            <div x-show="mobileSubOpen" x-cloak class="pl-4">
                                                @foreach ($subItem['subItems'] as $child)
                                                    <a href="{{ url($child['link']) }}"
                                                       class="block px-4 py-2 text-sm text-gray-800 hover:bg-cyan-50">
                                                        {{ $child['name'] }}
                                                    </a>
                                                @endforeach
                                            </div>
                                        @else
                                            <a href="{{ url($subItem['link']) }}"
                                               class="block px-4 py-2 text-sm text-gray-800 hover:bg-cyan-50">
                                                {{ $subItem['name'] }}
                                            </a>
                                        @endif
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    @endif
                </div>
            @endforeach
            <div class="px-4 pt-4">
                @include('partials.navcurrency')
            </div>
        </div>
    </div>
</nav>

{{-- Overlay --}}
<div x-show="activeDropdown || mobileMenuOpen" x-cloak
     @click="activeDropdown = null; mobileMenuOpen = false"
     class="fixed inset-0 z-40 bg-black opacity-0"></div>
