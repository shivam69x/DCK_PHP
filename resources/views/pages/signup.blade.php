@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white">
        <form action="{{-- route('register.post') --}}" method="POST" x-data="{
            firstName: '{{-- old('firstName') --}}',
            lastName: '{{-- old('lastName') --}}',
            email: '{{-- old('email') --}}',
            phoneNumber: '{{-- old('phoneNumber') --}}',
            countryCode: '{{-- old('countryCode', '+1') --}}', // Default to +1
            gstin: '{{-- old('gstin') --}}',
            streetAddress: '{{-- old('streetAddress') --}}',
            city: '{{-- old('city') --}}',
            state: '{{-- old('state') --}}',
            postalCode: '{{-- old('postalCode') --}}',
            country: '{{-- old('country', 'US') --}}', // Default to US
            password: '',
            confirmPassword: '',
            showPassword: false,
            showConfirmPassword: false,
            loading: false,

            // Password Strength Logic
            getPasswordStrength() {
                if (!this.password) return { text: '', color: '' };
                if (this.password.length < 7) return { text: 'Weak', color: 'text-red-500' };
                if (this.password.length < 9) return { text: 'Fair', color: 'text-orange-500' };
                if (this.password.length >= 9 && /[A-Z]/.test(this.password) && /[0-9]/.test(this.password) && /[!@#$%^&*]/.test(this.password)) {
                    return { text: 'Strong', color: 'text-green-500' };
                }
                if (this.password.length >= 8) return { text: 'Good', color: 'text-blue-500' };
                return { text: 'Fair', color: 'text-orange-500' };
            },
            get passwordsMatch() {
                return this.password && this.confirmPassword && this.password === this.confirmPassword;
            },
            get passwordsDontMatch() {
                return this.password && this.confirmPassword && this.password !== this.confirmPassword;
            },
            // Country Data
            countries: @json([
                ['code' => 'US', 'name' => 'United States', 'dialCode' => '+1', 'flagUrl' => 'https://flagcdn.com/us.svg'],
                ['code' => 'IN', 'name' => 'India', 'dialCode' => '+91', 'flagUrl' => 'https://flagcdn.com/in.svg'],
                ['code' => 'GB', 'name' => 'United Kingdom', 'dialCode' => '+44', 'flagUrl' => 'https://flagcdn.com/gb.svg'],
                ['code' => 'FR', 'name' => 'France', 'dialCode' => '+33', 'flagUrl' => 'https://flagcdn.com/fr.svg'],
                ['code' => 'DE', 'name' => 'Germany', 'dialCode' => '+49', 'flagUrl' => 'https://flagcdn.com/de.svg'],
                ['code' => 'CN', 'name' => 'China', 'dialCode' => '+86', 'flagUrl' => 'https://flagcdn.com/cn.svg'],
                ['code' => 'JP', 'name' => 'Japan', 'dialCode' => '+81', 'flagUrl' => 'https://flagcdn.com/jp.svg'],
                ['code' => 'KR', 'name' => 'South Korea', 'dialCode' => '+82', 'flagUrl' => 'https://flagcdn.com/kr.svg'],
                ['code' => 'AU', 'name' => 'Australia', 'dialCode' => '+61', 'flagUrl' => 'https://flagcdn.com/au.svg'],
                ['code' => 'BR', 'name' => 'Brazil', 'dialCode' => '+55', 'flagUrl' => 'https://flagcdn.com/br.svg'],
                ['code' => 'CA', 'name' => 'Canada', 'dialCode' => '+1', 'flagUrl' => 'https://flagcdn.com/ca.svg'],
                ['code' => 'MX', 'name' => 'Mexico', 'dialCode' => '+52', 'flagUrl' => 'https://flagcdn.com/mx.svg'],
                ['code' => 'ES', 'name' => 'Spain', 'dialCode' => '+34', 'flagUrl' => 'https://flagcdn.com/es.svg'],
                ['code' => 'IT', 'name' => 'Italy', 'dialCode' => '+39', 'flagUrl' => 'https://flagcdn.com/it.svg'],
                ['code' => 'RU', 'name' => 'Russia', 'dialCode' => '+7', 'flagUrl' => 'https://flagcdn.com/ru.svg'],
            ]),
            updateCountryCode(event) {
                const selectedCountry = this.countries.find(c => c.code === event.target.value);
                if (selectedCountry) {
                    this.countryCode = selectedCountry.dialCode;
                }
            }
        }" @submit="loading = true">
            @csrf

            <h2 class="text-2xl font-bold mb-2">Create account</h2>

            {{-- Show Server-side Validation Errors --}}
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Personal Information --}}
            <section class="border border-gray-200 rounded-lg p-6">
                <h2 class="text-lg font-semibold mb-6 text-gray-800">
                    Personal Information
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="firstName" class="sr-only">
                            First Name
                        </label>
                        <input
                            type="text"
                            id="firstName"
                            name="firstName"
                            placeholder="First Name"
                            x-model="firstName"
                            required
                            class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                        />
                        @error('firstName')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="lastName" class="sr-only">
                            Last Name
                        </label>
                        <input
                            type="text"
                            id="lastName"
                            name="lastName"
                            placeholder="Last Name"
                            x-model="lastName"
                            required
                            class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                        />
                        @error('lastName')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="email" class="sr-only">
                            Email Address
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Email Address"
                            x-model="email"
                            required
                            class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                        />
                        @error('email')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    {{-- Phone Number with Country Code (simplified) --}}
                    <div class="relative">
                        <label for="phoneNumber" class="sr-only">
                            Phone Number
                        </label>
                        <div class="absolute left-3 top-1/2 transform -translate-y-1/2 flex items-center z-10 pointer-events-none">
                            <img x-bind:src="countries.find(c => c.code === country)?.flagUrl || ''" class="mr-2 w-5 h-5 inline-block" alt="Country Flag" />
                            <span class="text-gray-700" x-text="countryCode"></span>
                        </div>
                        <input
                            type="tel"
                            id="phoneNumber"
                            name="phoneNumber"
                            placeholder="Phone Number"
                            x-model="phoneNumber"
                            required
                            class="w-full p-3 pl-20 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                        />
                        @error('phoneNumber')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
            </section>

            {{-- Address Information --}}
            <section class="border border-gray-200 rounded-lg p-6">
                <h2 class="text-lg font-semibold mb-6 text-gray-800">
                    Address Information
                </h2>
                <div class="space-y-4">
                    <div>
                        <label for="streetAddress" class="sr-only">
                            Street Address
                        </label>
                        <input
                            type="text"
                            id="streetAddress"
                            name="streetAddress"
                            placeholder="Street Address"
                            x-model="streetAddress"
                            required
                            class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                        />
                        @error('streetAddress')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="city" class="sr-only">
                                City
                            </label>
                            <input
                                type="text"
                                id="city"
                                name="city"
                                placeholder="City"
                                x-model="city"
                                required
                                class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                            />
                            @error('city')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="state" class="sr-only">
                                State/Province
                            </label>
                            <input
                                type="text"
                                id="state"
                                name="state"
                                placeholder="State/Province"
                                x-model="state"
                                required
                                class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                            />
                            @error('state')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                        <div>
                            <label for="postalCode" class="sr-only">
                                Postal Code
                            </label>
                            <input
                                type="text"
                                id="postalCode"
                                name="postalCode"
                                placeholder="Postal Code"
                                x-model="postalCode"
                                required
                                class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                            />
                            @error('postalCode')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        {{-- Country Select (simplified) --}}
                        <div>
                            <label for="country" class="sr-only">Country</label>
                            <select
                                id="country"
                                name="country"
                                x-model="country"
                                @change="updateCountryCode($event)"
                                required
                                class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                            >
                                <template x-for="countryOption in countries" :key="countryOption.code">
                                    <option :value="countryOption.code" x-text="countryOption.name"></option>
                                </template>
                            </select>
                            @error('country')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    {{-- GSTIN Field --}}
                    <div>
                        <label for="gstin" class="sr-only">
                            GSTIN
                        </label>
                        <input
                            type="text"
                            id="gstin"
                            name="gstin"
                            placeholder="Enter your GSTIN (if any)"
                            x-model="gstin"
                            class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                        />
                        <p class="text-sm text-gray-500 mt-1">
                            GSTIN is optional. Format: 15 characters (e.g., 22AAAAA0000A1Z5)
                        </p>
                        @error('gstin')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
            </section>

            {{-- Account Security --}}
            <section class="border border-gray-200 rounded-lg p-6">
                <h2 class="text-lg font-semibold mb-6 text-gray-800">
                    Account Security
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="password" class="sr-only">
                            Password
                        </label>
                        <div class="relative">
                            <input
                                :type="showPassword ? 'text' : 'password'"
                                id="password"
                                name="password"
                                placeholder="Password"
                                x-model="password"
                                @input="passwordStrength = getPasswordStrength(password)"
                                required
                                class="w-full p-3 pr-10 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                            />
                            <button
                                type="button"
                                @click="showPassword = !showPassword"
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 focus:outline-none"
                                :aria-label="showPassword ? 'Hide password' : 'Show password'"
                            >
                                <template x-if="showPassword">
                                    {{-- EyeOff icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-off"><path d="M9.88 8.05a3 3 0 0 1 4.24 4.24"/><path d="M10.5 12.5L2 22l1.09-1.09c.92-.92 1.39-2.22 1.48-3.52.28-4.22 2.6-8.22 5.9-10.59"/><path d="M6.9 6.9 12 2l4.89 4.89c.92.92 1.39 2.22 1.48 3.52.28 4.22-2.6 8.22-5.9 10.59"/><line x1="2" x2="22" y1="2" y2="22"/></svg>
                                </template>
                                <template x-if="!showPassword">
                                    {{-- Eye icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                                </template>
                            </button>
                        </div>
                        <div class="mt-2 text-sm" x-show="password">
                            Password Strength:
                            <span class="ml-1 font-medium" :class="getPasswordStrength().color" x-text="getPasswordStrength().text"></span>
                        </div>
                        @error('password')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="confirmPassword" class="sr-only">
                            Confirm Password
                        </label>
                        <div class="relative">
                            <input
                                :type="showConfirmPassword ? 'text' : 'password'"
                                id="confirmPassword"
                                name="confirmPassword"
                                placeholder="Confirm Password"
                                x-model="confirmPassword"
                                required
                                class="w-full p-3 pr-10 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                                :class="{
                                    'border-red-300 bg-red-50': passwordsDontMatch,
                                    'border-green-300 bg-green-50': passwordsMatch,
                                    'border-gray-300': !passwordsMatch && !passwordsDontMatch
                                }"
                            />
                            <button
                                type="button"
                                @click="showConfirmPassword = !showConfirmPassword"
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 focus:outline-none"
                                :aria-label="showConfirmPassword ? 'Hide confirm password' : 'Show confirm password'"
                            >
                                <template x-if="showConfirmPassword">
                                    {{-- EyeOff icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-off"><path d="M9.88 8.05a3 3 0 0 1 4.24 4.24"/><path d="M10.5 12.5L2 22l1.09-1.09c.92-.92 1.39-2.22 1.48-3.52.28-4.22 2.6-8.22 5.9-10.59"/><path d="M6.9 6.9 12 2l4.89 4.89c.92.92 1.39 2.22 1.48 3.52.28 4.22-2.6 8.22-5.9 10.59"/><line x1="2" x2="22" y1="2" y2="22"/></svg>
                                </template>
                                <template x-if="!showConfirmPassword">
                                    {{-- Eye icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                                </template>
                            </button>
                        </div>
                        <div class="mt-2 text-sm" x-show="confirmPassword">
                            <template x-if="passwordsMatch">
                                <span class="text-green-600">✓ Passwords match</span>
                            </template>
                            <template x-if="passwordsDontMatch">
                                <span class="text-red-600">✗ Passwords don't match</span>
                            </template>
                        </div>
                        @error('confirmPassword')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
            </section>

            {{-- Submit Button --}}
            <div class="flex justify-center">
                <button
                    type="submit"
                    :disabled="loading"
                    class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors font-medium disabled:opacity-50 disabled:cursor-not-allowed"
                >
                    <span x-show="!loading">Register</span>
                    <span x-show="loading">Registering...</span>
                </button>
            </div>
        </form>
    </div>
@endsection
