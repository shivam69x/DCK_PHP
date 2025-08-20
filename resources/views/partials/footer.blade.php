<footer class="bg-gray-800 text-white py-8 px-5 sm:px-8 md:px-12 relative overflow-hidden -mt-[1px]">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 sm:gap-16 lg:gap-20">
            {{-- Company Info --}}
            <div>
                <div class="flex items-center w-32 sm:w-40 pt-2">
                    <img
                        class="bg-gray-100 p-3 rounded-2xl"
                        src="{{ asset('assets/DCK - Footer.png') }}"
                        alt="Company Logo"
                    />
                </div>
                <p class="text-sm leading-relaxed opacity-80 mt-5 max-w-xs sm:max-w-sm">
                    Complete solution for online businesses including Domain
                    Registration, Web Development, Hosting, VPS Server, and more.
                    Working 24/7 at your service.
                </p>
            </div>

            {{-- Services --}}
            <div class="sm:pl-5">
                <h3 class="text-sm font-bold mb-3 border-b border-teal-600 pb-1">
                    SERVICES
                </h3>
                @php
                    $services = [
                        "Dedicated Hosting",
                        "Email Marketing Server",
                        "Cloud Hosting",
                        "VPS",
                        "Reseller Hosting",
                        "Shared Hosting",
                    ];
                @endphp
                <ul class="space-y-2" role="list">
                    @foreach ($services as $service)
                        <li class="text-xs hover:text-teal-200 cursor-pointer transition-colors hover:translate-x-1 transform duration-200">
                            <span class="hover:border-b border-teal-200">
                                {{ $service }}
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Products & Legal --}}
            <div class="">
                <h3 class="text-sm font-bold mb-3 border-b border-teal-600 pb-1">
                    PRODUCTS
                </h3>
                @php
                    $products = ["Google Workspace", "Licenses"];
                @endphp
                <ul class="space-y-2 mb-6" role="list">
                    @foreach ($products as $product)
                        <li class="text-xs hover:text-teal-200 cursor-pointer transition-colors hover:translate-x-1 transform duration-200">
                            <span class="hover:border-b border-teal-200">
                                {{ $product }}
                            </span>
                        </li>
                    @endforeach
                </ul>

                <h3 class="text-sm font-bold mb-3 border-b border-teal-600 pb-1">
                    LEGAL
                </h3>
                @php
                    $legal = ["Terms & Conditions", "Privacy policy", "Refund policy"];
                @endphp
                <ul class="space-y-2" role="list">
                    @foreach ($legal as $item)
                        <li class="text-xs hover:text-teal-200 cursor-pointer transition-colors hover:translate-x-1 transform duration-200">
                            <span class="hover:border-b border-teal-200">{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <a href="{{ url('/Contact-us') }}">
                    <h3 class="text-sm font-bold mb-3 border-b border-teal-600 pb-1">
                        CONTACT US
                    </h3>
                </a>

                <div class="space-y-3">
                    <div class="flex items-center gap-2 group">
                        {{-- Phone icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone text-gray-400 flex-shrink-0 group-hover:text-teal-300 transition-colors"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-3.1-8.63A2 2 0 0 1 4.11 2H7c.43 0 .85.11 1.18.34l1.63 1.25a2 2 0 0 1 .31 2.53L8.13 14.82a14.5 14.5 0 0 0 7.07 7.07l3.94-1.29a2 2 0 0 1 2.53.31l1.25 1.63c.23.33.34.75.34 1.18z"/></svg>
                        <a href="{{ url('/Contact-us') }}">
                            <div class="text-xs text-gray-300 hover:text-teal-200 transition-colors">
                                +91 9119359554
                            </div>
                        </a>
                    </div>

                    <div class="flex items-center gap-2 group">
                        {{-- Mail icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail text-gray-400 flex-shrink-0 group-hover:text-teal-300 transition-colors"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-10 7L2 7"/></svg>
                        <a href="{{ url('/Contact-us') }}">
                            <div class="text-xs text-gray-300 hover:text-teal-200 transition-colors break-all">
                                info@dckeepers.com
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="{{ url('/Contact-us') }}">
                            <button class="bg-sky-700 hover:bg-cyan-500 text-white px-3 py-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out transform hover:scale-105 flex items-center gap-2 text-sm font-medium mt-6">
                                {{-- Chat bubble icon --}}
                                <svg class="w-5 h-5"
                                     fill="currentColor"
                                     viewBox="0 0 20 20">
                                    <path
                                        fill-rule="evenodd"
                                        d="M18 10c0 3.866-3 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                Contact Us
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Payments & Socials --}}
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center text-xs text-gray-400 mt-10 gap-6">
            {{-- Payment Methods --}}
            <div>
                <h4 class="font-medium mb-2 text-sm">Payments We Accept</h4>
                <div class="flex flex-wrap gap-3 items-center">
                    @php
                        $paymentMethods = ["mastercard", "rupay", "paypal", "upi"];
                    @endphp
                    @foreach ($paymentMethods as $type)
                        <img
                            src="https://www.siteworx.in/images/{{ $type }}.svg"
                            alt="{{ $type }}"
                            class="h-5 w-auto bg-white rounded p-1 shadow-sm hover:scale-105 transition-transform"
                        />
                    @endforeach
                </div>
            </div>

            {{-- Social Media Icons --}}
            <div class="">
                <h4 class="font-medium mb-3 text-sm">Follow Us</h4>
                <div class="flex gap-3 flex-wrap">
                    @php
                        $socialMedia = [
                            ['name' => 'WhatsApp', 'color' => 'hover:text-green-500', 'url' => '#', 'icon_path' => '<path d=\"M17.439 6.273A8.47 8.47 0 0 0 12.001 3.5c-4.624 0-8.384 3.76-8.384 8.385 0 1.487.397 2.915 1.156 4.16L3.001 21l4.24-1.115c1.18.665 2.518 1.025 3.882 1.025h.004c4.624 0 8.384-3.76 8.384-8.385-.001-1.488-.398-2.915-1.157-4.16zM12.001 19.5c-1.166 0-2.316-.316-3.303-.925l-.237-.142-2.454.646.66-2.378-.158-.25C5.086 14.07 4.5 12.427 4.5 10.74c0-3.877 3.163-7.04 7.04-7.04s7.04 3.163 7.04 7.04-3.163 7.04-7.04 7.04zm3.5-4.5c-.192 0-.352-.064-.528-.192-.176-.128-.352-.192-.528-.192h-.032c-.16 0-.288.064-.448.192-.16.128-.288.192-.448.192-.352 0-.64-.288-.64-.64V9.695c0-.16-.064-.288-.192-.448-.128-.16-.192-.352-.192-.528 0-.176.064-.352.192-.528.128-.176.192-.352.192-.528.256-.48.64-.704 1.184-.704.544 0 1.024.192 1.408.576.384.384.576.864.576 1.408 0 .544-.192 1.024-.576 1.408-.384.384-.864.576-1.408.576h-.064c-.16 0-.288-.064-.448.192-.16-.128-.288-.192-.448-.192-.352 0-.64.288-.64.64v3.52c0 .16.064.288.192.448.128.16.192.352.192.528 0 .176-.064.352-.192.528-.128.176-.192.352-.192.528-.256.48-.64.704-1.184.704-.544 0-1.024-.192-1.408-.576-.384-.384-.864.576-1.408.576z\" fill=\"#4CAF50\" />'],
                            ['name' => 'Instagram', 'color' => 'hover:text-pink-500', 'url' => 'https://www.instagram.com/dckeepers/', 'icon_path' => '<path d=\"M12 2C8.13 2 5 5.13 5 9c0 3.2 2.1 6.1 5 7.23V20h4v-3.77c2.9-1.13 5-4.03 5-7.23 0-3.87-3.13-7-7-7zM12 4c2.76 0 5 2.24 5 5s-2.24 5-5 5-5-2.24-5-5 2.24-5 5-5zm0 2c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z\"/>'],
                            ['name' => 'LinkedIn', 'color' => 'hover:text-blue-600', 'url' => '#', 'icon_path' => '<path d=\"M20.447 20.452h-3.554V14.12c0-1.57-.557-2.64-1.954-2.64-1.062 0-1.693.72-1.972 1.41-.097.247-.122.584-.122.92v6.662H9.297V9.01H12.7c.026.54.088 1.066.216 1.58L12.923 11c1.238-1.096 2.053-2.527 2.053-4.116 0-3.05-2.074-5.064-4.834-5.064-.712 0-1.353.155-1.93.41L11.5 5.617c.56-.254 1.166-.39 1.83-.39 2.035 0 3.42 1.385 3.42 3.42 0 1.25-.66 2.37-1.928 2.94L14.7 13.92H20.447V20.452zM6.549 7.957h-3.556V20.452h3.556V7.957zM4.773 4.417c-1.226 0-2.227 1.001-2.227 2.227 0 1.225 1.001 2.227 2.227 2.227s2.227-1.002 2.227-2.227c0-1.226-1.001-2.227-2.227-2.227z\" />'],
                        ];
                    @endphp
                    @foreach ($socialMedia as $social)
                        <a
                            href="{{ $social['url'] }}"
                            class="text-gray-400 {{ $social['color'] }} transition-all duration-300 hover:scale-110 transform"
                            title="{{ $social['name'] }}"
                            aria-label="Follow us on {{ $social['name'] }}"
                        >
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                {!! $social['icon_path'] !!}
                            </svg>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="text-xs opacity-60 border-t border-gray-700 pt-3 mt-8 text-center sm:text-left">
            © 2025 DCKeepers. All rights reserved.
        </div>
    </div>
</footer>
