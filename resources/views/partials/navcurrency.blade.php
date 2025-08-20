<div class="flex items-center space-x-1 px-[1px]">
    <div class="relative" x-data="{
        isCurrencyOpen: false,
        currencies: [
            { code: 'INR', name: '₹ INR', flag: '🇮🇳' },
            { code: 'USD', name: '$ USD', flag: '🇺🇸' },
        ],
        selectedCurrency: 'INR', // Default or set from backend if available
        get currentCurrency() {
            return this.currencies.find(c => c.code === this.selectedCurrency);
        }
    }" @click.away="isCurrencyOpen = false">
        <button
            @click="isCurrencyOpen = !isCurrencyOpen"
            :class="{
                'bg-blue-100 text-blue-800 border-blue-300': selectedCurrency === 'USD',
                'bg-white text-gray-700 border-gray-300': selectedCurrency !== 'USD'
            }"
            class="relative left-[10px] flex items-center pl-[16px] px-[1px] py-[8px] text-[16px] font-medium rounded-md hover:bg-gray-50 hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 min-w-[80px] justify-between hover:text-blue-500 w-[90px]"
        >
            <div class="flex items-center justify-center gap-1 truncate">
                <span x-text="currentCurrency?.name"></span>
            </div>
            {{-- ChevronDown icon --}}
            <svg :class="{ 'rotate-180': isCurrencyOpen }"
                 class="ml-1 h-4 w-4 transition-transform duration-200"
                 fill="none"
                 stroke="currentColor"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </button>

        <div x-show="isCurrencyOpen" x-cloak
             class="absolute -right-[105px] lg:right-0 mt-2 w-40 bg-white border border-gray-200 rounded-md shadow-lg z-50 py-1">
            <template x-for="currency in currencies" :key="currency.code">
                <button
                    @click="selectedCurrency = currency.code; isCurrencyOpen = false;"
                    :class="{
                        'bg-blue-50 text-blue-700': selectedCurrency === currency.code,
                        'text-gray-700 hover:bg-gray-100': selectedCurrency !== currency.code
                    }"
                    class="w-full text-left px-4 py-2 text-sm flex items-center space-x-3 transition-colors duration-150"
                >
                    <span x-text="currency.flag"></span>
                    <span x-text="currency.name"></span>
                </button>
            </template>
        </div>
    </div>
</div>
