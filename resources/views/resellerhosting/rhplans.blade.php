<section class="min-h-screen bg-gradient-to-br from-sky-100 via-white to-indigo-100 py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        {{-- Header --}}
        <div
            x-data="{ isVisible: false }"
            x-init="setTimeout(() => { isVisible = true }, 100)"
            :class="{ 'opacity-100 translate-y-0': isVisible, 'opacity-0 translate-y-8': !isVisible }"
            class="text-center mb-16 transition-all duration-1000"
        >
            <h2 class="text-2xl sm:text-[40px] font-bold text-[#0e3c47] mb-5">
                Choose Your Perfect
                <span class="text-blue-600"> Reseller Hosting Plan</span>
            </h2>
            <p class="text-sm text-[#0e3c47cc] max-w-3xl mx-auto leading-relaxed">
                Get started with complete confidence. Our 30-day money-back
                guarantee means it's risk-free.
            </p>

            {{-- OS Toggle --}}
            <div class="flex justify-center mt-6" x-data="{ selectedOS: 'linux' }">
                <div class="bg-gray-100 rounded-full p-1 shadow-lg">
                    <div class="flex">
                        <button
                            @click="selectedOS = 'linux'"
                            :class="{
                                'bg-blue-600 text-white shadow': selectedOS === 'linux',
                                'text-blue-700 hover:bg-blue-50': selectedOS !== 'linux'
                            }"
                            class="flex items-center gap-2 px-6 py-2 rounded-full font-medium text-sm transition-all duration-300"
                        >
                            Linux
                        </button>
                        <button
                            @click="selectedOS = 'windows'"
                            :class="{
                                'bg-blue-600 text-white shadow': selectedOS === 'windows',
                                'text-blue-700 hover:bg-blue-50': selectedOS !== 'windows'
                            }"
                            class="flex items-center gap-2 px-6 py-2 rounded-full font-medium text-sm transition-all duration-300"
                        >
                            Windows
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Plans Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
                $linuxPlans = [
                    [
                        'name' => 'Basic',
                        'price' => 799,
                        'originalPrice' => 1598,
                        'savings' => '50%',
                        'description' => 'Perfect for personal websites and blogs',
                        'features' => [
                            'Unlimited Website',
                            '25 GB Storage',
                            'Unlimited Bandwidth',
                            'Unlimited cPanel Accounts',
                            'Unlimited Email Accounts',
                            'Unlimited Sub Domains',
                            'Unlimited Mysql Database',
                            '99.9% Uptime Guarantee',
                        ],
                        'ctaText' => 'Buy Now',
                        'popular' => false,
                    ],
                    [
                        'name' => 'Professional',
                        'price' => 1299,
                        'originalPrice' => 2598,
                        'savings' => '50%',
                        'description' => 'Ideal for growing businesses and portfolios',
                        'features' => [
                            'Unlimited Website',
                            '50 GB Storage',
                            'Unlimited Bandwidth',
                            'Unlimited cPanel Accounts',
                            'Unlimited Email Accounts',
                            'Unlimited Sub Domains',
                            'Unlimited Mysql Database',
                            '99.9% Uptime Guarantee',
                        ],
                        'ctaText' => 'Buy Now',
                        'popular' => true,
                    ],
                    [
                        'name' => 'Business',
                        'price' => 1599,
                        'originalPrice' => 3198,
                        'savings' => '50%',
                        'description' => 'Advanced features for professional websites',
                        'features' => [
                            'Unlimited Website',
                            '100 GB Storage',
                            'Unlimited Bandwidth',
                            'Unlimited cPanel Accounts',
                            'Unlimited Email Accounts',
                            'Unlimited Sub Domains',
                            'Unlimited Mysql Database',
                            '99.9% Uptime Guarantee',
                        ],
                        'ctaText' => 'Buy Now',
                        'popular' => false,
                    ],
                    [
                        'name' => 'Enterprise',
                        'price' => 2199,
                        'originalPrice' => 4398,
                        'savings' => '50%',
                        'description' => 'Maximum performance for high-traffic sites',
                        'features' => [
                            'Unlimited Website',
                            '200 GB Storage',
                            'Unlimited Bandwidth',
                            'Unlimited cPanel Accounts',
                            'Unlimited Email Accounts',
                            'Unlimited Sub Domains',
                            'Unlimited Mysql Database',
                            '99.9% Uptime Guarantee',
                        ],
                        'ctaText' => 'Buy Now',
                        'popular' => false,
                    ],
                ];

                $windowsPlans = array_map(function($plan) {
                    $plan['name'] = $plan['name'] . ' Windows';
                    $plan['features'] = array_map(function($feature) {
                        return str_replace('cPanel', 'Plesk', $feature);
                    }, $plan['features']);
                    $plan['ctaText'] = 'Get Started';
                    return $plan;
                }, $linuxPlans);

                $currentPlans = ($selectedOS === 'linux') ? $linuxPlans : $windowsPlans;
            @endphp
            <template x-for="(plan, index) in {{ json_encode($currentPlans) }}" :key="plan.name">
                <div
                    :class="{
                        'ring-4 ring-green-500 ring-opacity-80': plan.popular,
                        'opacity-100 translate-y-0': isVisible,
                        'opacity-0 translate-y-8': !isVisible
                    }"
                    class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:scale-105"
                    :style="`transition-delay: ${index * 150}ms`"
                >
                    <template x-if="plan.popular">
                        <div class="absolute -top-7 left-1/2 transform -translate-x-1/2">
                            <div class="bg-gradient-to-r from-green-500 to-green-700 text-white px-6 py-1 rounded-full text-sm font-medium flex items-center gap-1 shadow-lg">
                                {{-- Star icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                Most Popular
                            </div>
                        </div>
                    </template>

                    <div class="p-8">
                        {{-- Plan Header --}}
                        <div class="text-center mb-8">
                            <h3 class="text-2xl font-bold text-[#0e3c47] mb-2" x-text="plan.name"></h3>
                            <p class="text-[#0e3c47da] text-sm mb-4" x-text="plan.description"></p>
                            <div class="mb-4">
                                <div class="flex items-center justify-center gap-2 mb-2">
                                    <span class="text-gray-400 text-lg line-through" x-text="window.convertPrice(plan.originalPrice)"></span>
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-semibold" x-text="'Save ' + plan.savings"></span>
                                </div>
                                <div class="flex items-baseline justify-center">
                                    <span class="text-4xl font-bold text-[#0e3c47]" x-text="window.convertPrice(plan.price)"></span>
                                    <span class="text-gray-600 ml-1">/month</span>
                                </div>
                            </div>
                        </div>

                        {{-- Features List --}}
                        <div class="mb-8">
                            <ul class="space-y-4">
                                <template x-for="(feature, featureIndex) in plan.features" :key="featureIndex">
                                    <li class="flex items-start gap-3">
                                        <div class="flex-shrink-0 w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mt-0.5">
                                            {{-- Check icon --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-3 h-3 text-green-600"><polyline points="20 6 9 17 4 12"/></svg>
                                        </div>
                                        <span class="text-gray-700 text-sm leading-relaxed" x-text="feature"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>

                        {{-- CTA Button --}}
                        <button
                            @click="window.location.href = '{{ url('/billing') }}?plan=' + encodeURIComponent(JSON.stringify({...plan, category: 'Reseller Hosting', type: 'monthly'}))"
                            :class="plan.popular
                                ? 'rounded-xl border border-white bg-gradient-to-r from-[#0e3c47] to-[#0040514d] text-white shadow-lg backdrop-blur-md hover:from-[#133c46] hover:to-[#0040515d] hover:shadow-xl'
                                : 'bg-gray-100 text-gray-900 hover:bg-blue-50 hover:text-blue-700 border-2 border-transparent hover:border-blue-200'
                            "
                            class="w-full py-4 px-6 rounded-xl font-semibold text-base transition-all duration-300 transform hover:scale-105"
                        >
                            <span x-text="plan.ctaText"></span>
                        </button>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>
