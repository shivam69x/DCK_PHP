@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md bg-white p-8 rounded shadow-md">
            <h2 class="text-2xl font-bold mb-4">Login</h2>

            @if ($errors->any())
                <div class="mb-4 text-red-600 text-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST" x-data="{ showPassword: false, loading: false }" @submit="loading = true">
                @csrf

                {{-- Email Field --}}
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1" for="email">Email</label>
                    <div class="flex items-center border border-gray-300 rounded">
                        <span class="px-3 text-gray-600">
                            {{-- User icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </span>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            placeholder="Enter email"
                            class="w-full px-3 py-2 focus:outline-none"
                            value="{{ old('email') }}"
                            required
                        />
                    </div>
                </div>

                {{-- Password Field --}}
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1" for="password">Password</label>
                    <div class="flex items-center border border-gray-300 rounded">
                        <span class="px-3 text-gray-600">
                            {{-- KeyRound icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-key-round"><path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h3v-3h3v-3h3V3c0-.6-.4-1-1-1H3c-.6 0-1 .4-1 1z"/><path d="M7 11h.01"/><path d="M11 7h.01"/></svg>
                        </span>
                        <input
                            id="password"
                            name="password"
                            :type="showPassword ? 'text' : 'password'"
                            placeholder="Enter password"
                            class="w-full px-3 py-2 focus:outline-none"
                            required
                        />
                        <span
                            class="px-3 cursor-pointer text-gray-600"
                            @click="showPassword = !showPassword"
                        >
                            <template x-if="showPassword">
                                {{-- EyeOff icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-off"><path d="M9.88 8.05a3 3 0 0 1 4.24 4.24"/><path d="M10.5 12.5L2 22l1.09-1.09c.92-.92 1.39-2.22 1.48-3.52.28-4.22 2.6-8.22 5.9-10.59"/><path d="M6.9 6.9 12 2l4.89 4.89c.92.92 1.39 2.22 1.48 3.52.28 4.22-2.6 8.22-5.9 10.59"/><line x1="2" x2="22" y1="2" y2="22"/></svg>
                            </template>
                            <template x-if="!showPassword">
                                {{-- Eye icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                            </template>
                        </span>
                    </div>
                    <div class="text-right mt-1 text-sm">
                        <a href="#" class="text-blue-500 hover:underline">Forgot Password?</a>
                    </div>
                </div>

                <button
                    type="submit"
                    :disabled="loading"
                    class="w-full py-2 rounded text-white"
                    :class="loading ? 'bg-blue-300' : 'bg-blue-600 hover:bg-blue-700'"
                >
                    <span x-show="!loading">Login</span>
                    <span x-show="loading">Logging in...</span>
                </button>
            </form>

            <div class="mt-6 text-center text-sm">
                Not registered?
                <a href="{{ url('/signup') }}" class="font-semibold text-blue-600 hover:underline">
                    Create account
                </a>
            </div>
        </div>
    </div>
@endsection
