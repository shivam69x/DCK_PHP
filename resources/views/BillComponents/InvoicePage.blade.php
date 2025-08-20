@extends('layouts.app')

@section('content')
    @php
        // Assuming $plan and $billing are passed from the Laravel controller
        $plan = $plan ?? null;
        $billing = $billing ?? null;

        if (!$plan || !$billing) {
            // Redirect or show an error if data is missing
            // For now, a simple message
            echo '<div class="text-center mt-20 text-xl text-gray-700">No invoice data found. Please go back and complete your order.</div>';
            return;
        }

        $basePrice = (int)$plan['price'];
        $gst = round($basePrice * 0.18);
        $total = $basePrice + $gst;

        $invoice = [
            'number' => 'INV-' . time(),
            'date' => date('M d, Y'),
            'dueDate' => date('M d, Y'),
            'status' => 'UNPAID',
        ];

        // Placeholder for currency conversion. In a real app, this would be a global JS function or handled server-side.
        // For demonstration, let's define a simple PHP function that mimics it.
        function convertPriceBlade($price) {
            $currency = 'INR'; // Default currency for linter. In runtime, this should be handled by a proper Laravel session access.
            if ($currency === 'USD') {
                return '$' . number_format($price / 83, 2);
            }
            return '₹' . number_format($price, 2);
        }
    @endphp

    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-4xl mx-auto px-4">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden print:shadow-none print:rounded-none">
                <div class="p-8">
                    {{-- Invoice Header --}}
                    <div class="relative">
                        <div class="absolute -top-[160px] -right-[130px] z-10">
                            <div class="transform rotate-45 origin-bottom-left px-14 py-1 text-white font-bold text-sm tracking-wider {{ $invoice['status'] === 'PAID' ? 'bg-green-500' : 'bg-red-500' }}">
                                {{ $invoice['status'] }}
                            </div>
                        </div>

                        <div class="flex justify-between items-start mb-8 border-b pb-4 mt-12">
                            <div class="flex items-start space-x-4">
                                <img src="{{ asset('assets/DCK - Footer.png') }}" alt="Company Logo" class="w-40 h-auto mb-2" />
                                <div>
                                    <h2 class="text-lg font-semibold text-gray-800 mb-2">
                                        Digital Cloud Keepers Pvt. Ltd.
                                    </h2>
                                    <div class="text-sm text-gray-600 space-y-1">
                                        <p>Vijay Path, Mansarovar, Jaipur, India</p>
                                        <p>GSTIN: 07ABCDE1234F2Z5</p>
                                        <p>Email: info@dckeepers.com</p>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <h1 class="text-2xl font-bold text-gray-800 mb-2">Invoice</h1>
                                <div class="text-sm text-gray-600 space-y-1">
                                    <p>Invoice Date: {{ $invoice['date'] }}</p>
                                    <p>Invoice No: {{ $invoice['number'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Invoice Details --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">Bill To:</h3>
                            <div class="text-sm space-y-1 text-gray-700">
                                <p class="font-medium">{{ $billing['fullName'] }}</p>
                                <p>{{ $billing['email'] }}</p>
                                <p>{{ $billing['phone'] }}</p>
                                <p>
                                    {{ $billing['streetAddress'] }}, {{ $billing['city'] }}, {{ $billing['state'] }},
                                    {{ $billing['zipCode'] }}, {{ $billing['country'] }}
                                </p>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">
                                Plan Details:
                            </h3>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-medium text-gray-900 mb-1">{{ $plan['name'] }}</h4>
                                <p class="text-sm text-gray-600 mb-3">{{ $plan['subtitle'] ?? 'N/A' }}</p>

                                @if (isset($plan['features']) && count($plan['features']) > 0)
                                    <div>
                                        <h5 class="text-sm font-medium text-gray-800 mb-2">
                                            Included Features:
                                        </h5>
                                        <ul class="list-disc pl-5 text-sm text-gray-700 space-y-1">
                                            @foreach ($plan['features'] as $feature)
                                                <li>{{ $feature }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- Invoice Table --}}
                    <div class="mb-6">
                        <table class="w-full text-sm border-collapse">
                            <thead>
                                <tr class="bg-gray-100 text-left">
                                    <th class="p-2 border">Service</th>
                                    <th class="p-2 border">Price</th>
                                    <th class="p-2 border">GST (18%)</th>
                                    <th class="p-2 border">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2 border">{{ $plan['name'] }}</td>
                                    <td class="p-2 border">{{ convertPriceBlade($basePrice) }}</td>
                                    <td class="p-2 border">{{ convertPriceBlade($gst) }}</td>
                                    <td class="p-2 border font-medium">{{ convertPriceBlade($total) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Transactions Section --}}
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Transactions</h3>
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse border border-gray-300">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="border border-gray-300 p-3 text-left text-sm font-semibold">
                                            Transaction Date
                                        </th>
                                        <th class="border border-gray-300 p-3 text-left text-sm font-semibold">
                                            Gateway
                                        </th>
                                        <th class="border border-gray-300 p-3 text-left text-sm font-semibold">
                                            Transaction ID
                                        </th>
                                        <th class="border border-gray-300 p-3 text-right text-sm font-semibold">
                                            Amount
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4" class="border border-gray-300 p-3 text-sm text-center text-gray-500">
                                            No Related Transactions Found
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td colspan="3" class="border border-gray-300 p-3 text-sm font-medium text-right">
                                            Balance
                                        </td>
                                        <td class="border border-gray-300 p-3 text-sm text-right font-bold">
                                            {{ convertPriceBlade($total) }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- Payment Method --}}
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Payment Method
                        </h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                {{-- Online Payment --}}
                                <div>
                                    <p class="text-sm text-gray-700 mb-4 font-medium">
                                        Online via UPI / Card
                                    </p>

                                    {{-- UPI QR Code Section - Only show for INR --}}
                                    <div class="bg-white p-4 rounded-lg border border-gray-200 w-full max-w-xs mx-auto">
                                        <h4 class="text-sm font-semibold text-gray-800 mb-3 text-center">
                                            Pay using UPI:
                                        </h4>
                                        <div class="flex justify-center mb-3">
                                            <img class="w-24 h-24 object-contain" src="{{ asset('assets/scannerdck.png') }}" alt="UPI QR Code" />
                                        </div>
                                        <p class="text-xs text-gray-600 text-center">
                                            Scan QR code with any UPI app to pay {{ convertPriceBlade($total) }}
                                        </p>
                                    </div>
                                    
                                    @php $currentCurrency = session('currency', 'INR'); @endphp
                                    {{-- International Payment Message for USD (Conditional, will require JS for dynamic currency) --}}
                                    @if ($currentCurrency === 'USD')
                                        <div class="bg-white p-4 rounded-lg border border-gray-200 w-full max-w-xs mx-auto mt-4">
                                            <h4 class="text-sm font-semibold text-gray-800 mb-3 text-center">
                                                International Payment
                                            </h4>
                                            <p class="text-xs text-gray-600 text-center">
                                                Use Credit/Debit Card or International Wire Transfer
                                            </p>
                                            <p class="text-sm font-semibold text-gray-800 mt-2 text-center">
                                                Amount: {{ convertPriceBlade($total) }}
                                            </p>
                                        </div>
                                    @endif
                                </div>

                                {{-- Bank Transfer Details --}}
                                <div>
                                    <div class="border-t border-gray-200 pt-4 lg:border-t-0 lg:pt-0">
                                        <h4 class="text-sm font-semibold text-gray-800 mb-3">
                                            Bank Account Details:
                                        </h4>
                                        <div class="space-y-2 text-sm text-gray-700">
                                            <div class="flex justify-between">
                                                <span class="font-medium">Bank Name:</span>
                                                <span class="font-medium">HDFC Bank</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="font-medium">
                                                    Account/Payee Name:
                                                </span>
                                                <span class="font-medium">
                                                    Site Worx Infotech
                                                </span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="font-medium">Account No.:</span>
                                                <span class="font-medium">50200057304581</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="font-medium">
                                                    RTGS/NEFT IFSC Code:
                                                </span>
                                                <span class="font-medium">HDFC0003922</span>
                                            </div>
                                            @php $currentCurrency = session('currency', 'INR'); @endphp
                                            @if ($currentCurrency === 'USD')
                                                <div class="flex justify-between">
                                                    <span class="font-medium">SWIFT Code:</span>
                                                    <span class="font-medium">HDFCINBBXXX</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Payment Section (Stripe integration will go here) --}}
                    <div class="border-t pt-6 mt-8">
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-lg mb-6 print:hidden">
                            <div class="flex flex-col lg:flex-row items-center justify-between gap-4">
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                        <span class="text-sm font-medium text-gray-700">
                                            Secure Payment Gateway
                                        </span>
                                    </div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-1">
                                        Total Amount: {{ convertPriceBlade($total) }}
                                    </h4>
                                    <p class="text-sm text-gray-600">
                                        Includes GST • 30-day money-back guarantee • Instant
                                        activation
                                    </p>
                                </div>

                                <div class="flex justify-between items-center mt-8 gap-4 flex-wrap">
                                    {{-- Stripe Payment Button --}}
                                    <button
                                        id="stripe-payment-button"
                                        class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700 transition"
                                        type="button"
                                    >
                                        Pay Now
                                    </button>

                                    {{-- Download Invoice Button --}}
                                    <button
                                        onclick="window.print()"
                                        class="flex items-center gap-2 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700"
                                        type="button"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download w-4 h-4"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="15" y2="3"/></svg>
                                        Download Invoice
                                    </button>
                                </div>
                            </div>

                            {{-- Security Badges --}}
                            <div class="flex items-center justify-center gap-4 mt-4 pt-4 border-t border-blue-100">
                                <div class="flex items-center gap-1 text-xs text-gray-600">
                                    <svg
                                        class="w-3 h-3 text-green-500"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    256-bit SSL Secured
                                </div>
                                <div class="flex items-center gap-1 text-xs text-gray-600">
                                    <svg
                                        class="w-3 h-3 text-blue-500"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    PCI DSS Compliant
                                </div>
                                <div class="flex items-center gap-1 text-xs text-gray-600">
                                    <svg
                                        class="w-3 h-3 text-purple-500"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    Bank Grade Security
                                </div>
                            </div>
                        </div>

                        {{-- Footer --}}
                        <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-center md:text-left">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">
                                    Thank you for your business!
                                </p>
                                <p class="text-xs text-gray-500">
                                    Need help? Contact us at info@dckeepers.com
                                </p>
                            </div>
                            <div class="text-xs text-gray-500">
                                Invoice generated on {{ date('M d, Y H:i:s') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- JavaScript for Stripe integration --}}
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stripeButton = document.getElementById('stripe-payment-button');
            if (stripeButton) {
                stripeButton.addEventListener('click', async function() {
                    console.log("Initiating Stripe payment...");

                    const plan = @json($plan);
                    const billing = @json($billing);
                    const total = {{ $total }};
                    const currency = "{{ session('currency', 'INR') }}"; // Get currency from session

                    // Convert price to appropriate currency for Stripe
                    // If USD, convert the total, if INR keep as is
                    const paymentAmount = currency === 'USD' ? Math.round(total / 83) : total;
                    const paymentCurrency = currency === 'USD' ? 'usd' : 'inr';

                    try {
                        const response = await fetch("/create-checkout-session", { // Laravel route for checkout session
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": "{{ csrf_token() }}" // CSRF token for Laravel
                            },
                            body: JSON.stringify({
                                email: billing.email,
                                planName: plan.name,
                                price: paymentAmount,
                                currency: paymentCurrency,
                            }),
                        });

                        const session = await response.json();
                        console.log("Stripe session response:", session);

                        if (session.id) {
                            const stripe = await Stripe('{{ config('services.stripe.key') }}'); // Use Laravel config for Stripe Key
                            console.log("Redirecting to Stripe Checkout...");
                            await stripe.redirectToCheckout({ sessionId: session.id });
                        } else {
                            console.error("Stripe session creation failed:", session);
                            alert("Failed to initiate payment. Please try again.");
                        }
                    } catch (err) {
                        console.error("Payment error:", err);
                        alert("An error occurred during payment. Please try again.");
                    }
                });
            }
        });
    </script>
@endsection
