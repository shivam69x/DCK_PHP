@php
    // Assuming $plan is passed from the Laravel controller
    $plan = $plan ?? null;

    if (!$plan) {
        echo '<p>No plan selected.</p>';
        return;
    }

    $basePrice = (float)$plan['price'];
    $gst = round($basePrice * 0.18);
    $total = $basePrice + $gst;

    // Reusing the convertPriceBlade function defined in InvoicePage.blade.php or a global helper
    // For now, defining it here for self-containment, but ideally it would be a shared helper.
    if (!function_exists('convertPriceBlade')) {
        function convertPriceBlade($price) {
            // $currency = session('currency', 'INR'); // Assuming currency is stored in session
            $currency = 'INR'; // Default currency for linter. In runtime, this should be handled by a proper Laravel session access.
            if ($currency === 'USD') {
                return '$' . number_format($price / 83, 2);
            }
            return '₹' . number_format($price, 2);
        }
    }
@endphp

<div class="bg-white rounded-lg shadow-sm p-6 sticky top-8">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
        Order Summary
    </h2>

    {{-- Plan Info --}}
    <div class="mb-6">
        <div class="flex justify-between items-start">
            <div class="flex-1">
                <h3 class="text-lg font-medium text-gray-900">{{ $plan['name'] }}</h3>
                <p class="text-sm text-gray-500">{{ $plan['subtitle'] ?? 'N/A' }}</p>
            </div>
            <div class="text-right">
                <p class="text-lg font-semibold text-gray-900">
                    {{ convertPriceBlade($basePrice) }}
                </p>
                <span class="text-xs text-gray-500">per month</span>
            </div>
        </div>

        {{-- Features List --}}
        @if (isset($plan['features']) && count($plan['features']) > 0)
            <ul class="mt-4 list-disc pl-5 text-sm text-gray-700 space-y-1">
                @foreach ($plan['features'] as $feature)
                    <li>{{ $feature }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    {{-- Price Breakdown --}}
    <div class="border-t border-gray-200 pt-4 space-y-3">
        <div class="flex justify-between text-sm">
            <span class="text-gray-600">Subtotal</span>
            <span class="text-gray-900">{{ convertPriceBlade($basePrice) }}</span>
        </div>

        <div class="flex justify-between text-sm">
            <span class="text-gray-600">Taxes (GST 18%)</span>
            <span class="text-gray-900">{{ convertPriceBlade($gst) }}</span>
        </div>

        <div class="border-t border-gray-200 pt-3">
            <div class="flex justify-between text-lg font-semibold">
                <span class="text-gray-900">Total</span>
                <span class="text-gray-900">{{ convertPriceBlade($total) }}</span>
            </div>
        </div>
    </div>

    {{-- Guarantee --}}
    <div class="mt-6 p-3 bg-blue-50 rounded-md">
        <div class="flex items-center">
            <svg
                class="w-5 h-5 text-blue-600 mr-2"
                fill="currentColor"
                viewBox="0 0 20 20"
            >
                <path
                    fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"
                />
            </svg>
            <span class="text-sm text-blue-800 font-medium">
                10-day money-back guarantee
            </span>
        </div>
    </div>
</div>
