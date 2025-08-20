@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-sky-100 via-white to-indigo-100 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            {{-- Header Section --}}
            <div class="text-start mb-12">
                <h1 class="text-lg sm:text-4xl font-bold text-[#0e3c47] mb-4">
                    Get In Touch, We're here to help 24/7
                </h1>
                <p class="text-start text-lg text-[#0e3c47]/80">
                    We'd love to hear from you. Send us a message and we'll respond as soon as possible.
                </p>
            </div>

            {{-- Main Content Grid --}}
            <div class="grid lg:grid-cols-3 gap-8 lg:gap-12">
                {{-- Contact Form --}}
                <div class="lg:col-span-2">
                    <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg p-6 sm:p-8">
                        <h2 class="text-2xl font-semibold text-[#0e3c47] mb-6">
                            Send us a message
                        </h2>

                        @if (session('success'))
                            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                                <ul class="list-disc list-inside">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6" x-data="{ isSubmitting: false }" @submit="isSubmitting = true">
                            @csrf

                            {{-- Full Name --}}
                            <div>
                                <label for="fullName" class="block text-sm font-medium text-[#0e3c47] mb-2">
                                    Full Name *
                                </label>
                                <div class="relative">
                                    {{-- User icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user absolute left-3 top-1/2 transform -translate-y-1/2 text-[#0e3c47]/60 w-5 h-5"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                    <input
                                        type="text"
                                        id="fullName"
                                        name="fullName"
                                        value="{{ old('fullName') }}"
                                        required
                                        class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 text-[#0e3c47] placeholder-gray-400"
                                        placeholder="Enter your full name"
                                    />
                                    @error('fullName')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                                </div>
                            </div>

                            {{-- Email --}}
                            <div>
                                <label for="email" class="block text-sm font-medium text-[#0e3c47] mb-2">
                                    Email Address *
                                </label>
                                <div class="relative">
                                    {{-- AtSign icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-at-sign absolute left-3 top-1/2 transform -translate-y-1/2 text-[#0e3c47]/60 w-5 h-5"><circle cx="12" cy="12" r="4"/><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-4 8"/></svg>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 text-[#0e3c47] placeholder-gray-400"
                                        placeholder="Enter your email address"
                                    />
                                    @error('email')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                                </div>
                            </div>

                            {{-- Subject --}}
                            <div>
                                <label for="subject" class="block text-sm font-medium text-[#0e3c47] mb-2">
                                    Subject <span class="text-gray-400">(optional)</span>
                                </label>
                                <div class="relative">
                                    {{-- FileText icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text absolute left-3 top-1/2 transform -translate-y-1/2 text-[#0e3c47]/60 w-5 h-5"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                                    <input
                                        type="text"
                                        id="subject"
                                        name="subject"
                                        value="{{ old('subject') }}"
                                        class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 text-[#0e3c47] placeholder-gray-400"
                                        placeholder="What's this about?"
                                    />
                                    @error('subject')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                                </div>
                            </div>

                            {{-- Message --}}
                            <div>
                                <label for="message" class="block text-sm font-medium text-[#0e3c47] mb-2">
                                    Message *
                                </label>
                                <div class="relative">
                                    {{-- MessageSquare icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square absolute left-3 top-4 text-[#0e3c47]/60 w-5 h-5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                                    <textarea
                                        id="message"
                                        name="message"
                                        value="{{ old('message') }}"
                                        required
                                        rows="5"
                                        class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 text-[#0e3c47] placeholder-gray-400 resize-none"
                                        placeholder="Tell us how we can help you..."
                                    ></textarea>
                                    @error('message')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                                </div>
                            </div>

                            {{-- Submit Button --}}
                            <button
                                type="submit"
                                :disabled="isSubmitting"
                                class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium py-3 px-6 rounded-lg hover:from-blue-700 hover:to-indigo-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transform hover:scale-[1.02] transition-all duration-200 flex items-center justify-center gap-2 disabled:opacity-70 disabled:cursor-not-allowed disabled:transform-none"
                            >
                                <template x-if="isSubmitting">
                                    <div class="w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin"></div>
                                    <span>Sending...</span>
                                </template>
                                <template x-if="!isSubmitting">
                                    {{-- Send icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send w-5 h-5"><path d="m22 2-7 7m-1.5 8.5L2 22l7-7m7.5-7.5L22 2"/></svg>
                                    <span>Send Message</span>
                                </template>
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Contact Information --}}
                <div class="lg:col-span-1 space-y-6">
                    {{-- Contact Details Card --}}
                    <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg p-6">
                        <h3 class="text-xl font-semibold text-[#0e3c47] mb-6">
                            Contact Information
                        </h3>

                        <div class="space-y-4">
                            {{-- Phone --}}
                            <div class="flex items-center gap-4 p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg">
                                <div class="bg-blue-100 p-3 rounded-full">
                                    {{-- Phone icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-5 h-5 text-blue-600"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.63A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-[#0e3c47]/80 mb-1">Phone</p>
                                    <a
                                        href="tel:+919119359554"
                                        class="text-[#0e3c47] font-medium hover:text-blue-600 transition-colors duration-200"
                                    >
                                        +91 9119359554
                                    </a>
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="flex items-center gap-4 p-4 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-lg">
                                <div class="bg-indigo-100 p-3 rounded-full">
                                    {{-- Mail icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-5 h-5 text-indigo-600"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-[#0e3c47]/80 mb-1">Email</p>
                                    <a
                                        href="mailto:info@dckeepers.com"
                                        class="text-[#0e3c47] font-medium hover:text-indigo-600 transition-colors duration-200"
                                    >
                                        info@dckeepers.com
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Additional Info Card --}}
                    <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg p-6">
                        <h3 class="text-xl font-semibold text-[#0e3c47] mb-4">
                            Response Time
                        </h3>
                        <p class="text-[#0e3c47]/80 text-sm leading-relaxed">
                            We typically respond to all inquiries within 24 hours during business days.
                            For urgent matters, please call us directly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
