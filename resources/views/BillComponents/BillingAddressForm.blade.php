@extends('layouts.app')

@section('content')
    @php
        $countries = [
            "India", "United States", "United Kingdom", "Canada", "Australia",
            "Germany", "France", "Japan", "Singapore", "UAE"
        ];

        $indianStates = [
            "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh",
            "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jharkhand",
            "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur",
            "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Punjab",
            "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura",
            "Uttar Pradesh", "Uttarakhand", "West Bengal"
        ];
    @endphp

    <div class="bg-white rounded-lg shadow-sm p-6">
        <h2 class="text-2xl font-semibold text-gray-900 mb-6">Billing Address</h2>
        <form action="{{-- route('billing.submit') --}}" method="POST" class="space-y-6" x-data="{
            fullName: '{{-- old('fullName') --}}',
            email: '{{-- old('email') --}}',
            phone: '{{-- old('phone') --}}',
            streetAddress: '{{-- old('streetAddress') --}}',
            city: '{{-- old('city') --}}',
            state: '{{-- old('state') --}}',
            zipCode: '{{-- old('zipCode') --}}',
            country: '{{-- old('country') --}}',
            gstin: '{{-- old('gstin') --}}',
        }">
            @csrf

            {{-- Full Name --}}
            <div>
                <label for="fullName" class="block text-sm font-medium text-gray-700 mb-2">
                    Full Name *
                </label>
                <input
                    type="text"
                    id="fullName"
                    name="fullName"
                    x-model="fullName"
                    class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 {{-- $errors->has('fullName') ? 'border-red-500' : 'border-gray-300' --}}"
                    placeholder="Enter your full name"
                    required
                />
                @error('fullName')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            {{-- Email --}}
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                    Email Address *
                </label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    x-model="email"
                    class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 {{-- $errors->has('email') ? 'border-red-500' : 'border-gray-300' --}}"
                    placeholder="Enter your email"
                    required
                />
                @error('email')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            {{-- Phone --}}
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                    Phone Number *
                </label>
                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    x-model="phone"
                    class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 {{-- $errors->has('phone') ? 'border-red-500' : 'border-gray-300' --}}"
                    placeholder="Enter your phone number"
                    required
                />
                @error('phone')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            {{-- Street Address --}}
            <div>
                <label for="streetAddress" class="block text-sm font-medium text-gray-700 mb-2">
                    Street Address *
                </label>
                <input
                    type="text"
                    id="streetAddress"
                    name="streetAddress"
                    x-model="streetAddress"
                    class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 {{-- $errors->has('streetAddress') ? 'border-red-500' : 'border-gray-300' --}}"
                    placeholder="Enter your street address"
                    required
                />
                @error('streetAddress')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            {{-- City and State --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="city" class="block text-sm font-medium text-gray-700 mb-2">
                        City *
                    </label>
                    <input
                        type="text"
                        id="city"
                        name="city"
                        x-model="city"
                        class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 {{-- $errors->has('city') ? 'border-red-500' : 'border-gray-300' --}}"
                        placeholder="Enter city"
                        required
                    />
                    @error('city')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="state" class="block text-sm font-medium text-gray-700 mb-2">
                        State/Province *
                    </label>
                    <select
                        id="state"
                        name="state"
                        x-model="state"
                        class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 {{-- $errors->has('state') ? 'border-red-500' : 'border-gray-300' --}}"
                        required
                    >
                        <option value="">Select State</option>
                        @foreach ($indianStates as $stateOption)
                            <option value="{{ $stateOption }}">{{ $stateOption }}</option>
                        @endforeach
                    </select>
                    @error('state')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>
            </div>

            {{-- ZIP and Country --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="zipCode" class="block text-sm font-medium text-gray-700 mb-2">
                        ZIP/Postal Code *
                    </label>
                    <input
                        type="text"
                        id="zipCode"
                        name="zipCode"
                        x-model="zipCode"
                        class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 {{-- $errors->has('zipCode') ? 'border-red-500' : 'border-gray-300' --}}"
                        placeholder="Enter ZIP code"
                        required
                    />
                    @error('zipCode')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="country" class="block text-sm font-medium text-gray-700 mb-2">
                        Country *
                    </label>
                    <select
                        id="country"
                        name="country"
                        x-model="country"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        required
                    >
                        <option value="">Select Country</option>
                        @foreach ($countries as $countryOption)
                            <option value="{{ $countryOption }}">{{ $countryOption }}</option>
                        @endforeach
                    </select>
                    @error('country')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>
            </div>

            {{-- GSTIN (Optional) --}}
            <div>
                <label for="gstin" class="block text-sm font-medium text-gray-700 mb-2">
                    GSTIN Number (Optional)
                </label>
                <input
                    type="text"
                    id="gstin"
                    name="gstin"
                    x-model="gstin"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter GSTIN if available"
                />
                @error('gstin')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-3 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200 font-medium"
            >
                Continue to Invoice
            </button>
        </form>
    </div>
@endsection

