@extends('layouts.app')

@section('content')
    @php
        $features = [
            [
                'icon' => 'mail',
                'title' => 'Gmail',
                'description' => 'Professional email with custom domain',
                'color' => 'bg-red-500',
            ],
            [
                'icon' => 'video',
                'title' => 'Meet',
                'description' => 'Video meetings for up to 500 participants',
                'color' => 'bg-green-500',
            ],
            [
                'icon' => 'file-text',
                'title' => 'Docs',
                'description' => 'Real-time collaboration on documents',
                'color' => 'bg-blue-500',
            ],
            [
                'icon' => 'cloud',
                'title' => 'Drive',
                'description' => 'Secure cloud storage and file sharing',
                'color' => 'bg-yellow-500',
            ],
        ];

        $workspaceApps = [
            ['name' => 'Gmail', 'icon' => '📧', 'color' => 'bg-red-100 text-red-600'],
            ['name' => 'Calendar', 'icon' => '📅', 'color' => 'bg-blue-100 text-blue-600'],
            ['name' => 'Drive', 'icon' => '💾', 'color' => 'bg-yellow-100 text-yellow-600'],
            ['name' => 'Docs', 'icon' => '📄', 'color' => 'bg-blue-100 text-blue-600'],
            ['name' => 'Sheets', 'icon' => '📊', 'color' => 'bg-green-100 text-green-600'],
            ['name' => 'Slides', 'icon' => '🎨', 'color' => 'bg-orange-100 text-orange-600'],
            ['name' => 'Meet', 'icon' => '🎥', 'color' => 'bg-green-100 text-green-600'],
            ['name' => 'Chat', 'icon' => '💬', 'color' => 'bg-green-100 text-green-600'],
        ];
    @endphp

    <div class="min-h-screen bg-gradient-to-br from-sky-100 via-white to-purple-50 overflow-hidden">
        {{-- Floating Background Elements --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-10 w-64 h-64 bg-blue-200/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-200/20 rounded-full blur-3xl animate-pulse"
                style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 w-80 h-80 bg-green-200/20 rounded-full blur-3xl animate-pulse"
                style="animation-delay: 2s;"></div>
        </div>

        {{-- Header --}}
        {{-- Hero Section --}}
        <div class="mb-8 flex flex-col items-center justify-start pt-4 px-4 sm:pt-6 sm:mb-12">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-medium text-gray-700 text-center">
                <span class="text-blue-500">G</span>
                <span class="text-red-500">o</span>
                <span class="text-yellow-500">o</span>
                <span class="text-blue-500">g</span>
                <span class="text-green-500">l</span>
                <span class="text-red-500">e</span>
                <span class="text-gray-600 ml-1 sm:ml-2">Workspace</span>
            </h1>
        </div>

        <section class="relative z-10 px-6 py-10">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="mb-36">
                        <div class="transform transition-all duration-1000">
                            <h1 class="text-2xl lg:text-5xl font-bold text-[#0e3c47] leading-tight mb-4 ">
                                The everything
                                <span class="mb-4 block text-[#155666] ">
                                    workspace
                                </span>
                            </h1>
                        </div>

                        <div class="transform transition-all duration-1000" style="transition-delay: 200ms;">
                            <p class="text-lg text-[#024354d8] mb-8 leading-relaxed">
                                Transform the way your team works with AI-powered apps that
                                connect seamlessly across Google Workspace.
                            </p>
                        </div>

                        <div class="transform transition-all duration-1000" style="transition-delay: 400ms;">
                            <div class="flex flex-col sm:flex-row gap-4 mb-8">
                                <a href="{{ url('/googlew/googleplans') }}"
                                    class="group bg-[#126276] hover:bg-[#218aa4] text-white font-semibold px-5 py-3 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-2xl shadow-lg inline-flex items-center space-x-2 text-base"
                                    aria-label="View all hosting plans">
                                    <span>See All Plans</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                                </a>
                            </div>
                        </div>

                        <div class="transform transition-all duration-1000" style="transition-delay: 600ms;">
                            <div class="flex items-center space-x-6 text-sm text-gray-500">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-1 text-green-500"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                    Enterprise security
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-1 text-yellow-500"><path d="M10 13v7l-7-7h7L13 4l7 7h-7l4 4"/></svg>
                                    AI-powered
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-1 text-blue-500"><path d="M12 18.35l-5.69 3.01 1.09-6.36L.35 9.69l6.37-.92L12 .35l2.48 5.72 6.37.92-4.05 3.31 1.09 6.36L12 18.35z"/></svg>
                                    99.9% uptime
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Isometric Workspace Visualization --}}
                    <div class="relative">
                        <div class="transform transition-all duration-1000" style="transition-delay: 800ms;">
                            <div class="relative transform rotate-3 hover:rotate-0 transition-transform duration-700">
                                {{-- Main Workspace Container --}}
                                <div class="bg-white rounded-3xl shadow-2xl p-8 border border-gray-100 relative overflow-hidden">
                                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-500 via-green-500 to-yellow-500 to-red-500"></div>

                                    {{-- Floating Apps --}}
                                    <div class="grid grid-cols-4 gap-4 mb-6">
                                        @foreach ($workspaceApps as $appIndex => $app)
                                            <div
                                                class="{{ $app['color'] }} p-4 rounded-2xl cursor-pointer transition-all duration-300 hover:scale-110 hover:shadow-lg transform hover:-translate-y-2"
                                                style="animation-delay: {{ $appIndex * 100 }}ms;"
                                            >
                                                <div class="text-2xl mb-2">{{ $app['icon'] }}</div>
                                                <div class="font-medium text-xs">
                                                    {{ $app['name'] }}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    {{-- Collaboration Scene --}}
                                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-6 relative">
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="flex items-center space-x-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-blue-600"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                                <span class="font-medium text-gray-700">
                                                    Team Collaboration
                                                </span>
                                            </div>
                                            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                        </div>

                                        <div class="space-y-3">
                                            <div class="flex items-center space-x-3">
                                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                                    A
                                                </div>
                                                <div class="flex-1 bg-white rounded-lg p-2 shadow-sm">
                                                    <div class="h-2 bg-gray-200 rounded w-3/4"></div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                                    B
                                                </div>
                                                <div class="flex-1 bg-white rounded-lg p-2 shadow-sm">
                                                    <div class="h-2 bg-gray-200 rounded w-1/2"></div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                                    C
                                                </div>
                                                <div class="flex-1 bg-white rounded-lg p-2 shadow-sm">
                                                    <div class="h-2 bg-gray-200 rounded w-2/3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Floating Elements --}}
                                <div class="absolute -top-6 -right-6 w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center shadow-lg animate-bounce">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-white"><path d="M7.9 20A9.3 9.3 0 0 1 4 16.1L2 22l6-2Z"/><path d="M16.1 4A9.3 9.3 0 0 1 20 7.9L22 2l-6 2Z"/><path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"/></svg>
                                </div>
                                <div class="absolute -bottom-4 -left-4 w-12 h-12 bg-red-500 rounded-full flex items-center justify-center shadow-lg animate-pulse">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-white"><path d="M22 7.5V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v1.5"/><path d="M2 13.5V18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4.5"/><path d="M22 10 12 15 2 10"/></svg>
                                </div>
                                <div class="absolute top-1/2 -right-8 w-14 h-14 bg-green-500 rounded-full flex items-center justify-center shadow-lg animate-pulse"
                                    style="animation-delay: 1s;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-7 h-7 text-white"><path d="m22 8.5-4.43-3.65A2.43 2.43 0 0 0 16 3.7c-2.3-.5-4.5-.42-6.7.07-2.3.5-4.4.92-6.57 1.34A2 2 0 0 0 2 6.47v2.06c0 .7.3 1.37.83 1.83l3.68 3.03C7.5 14.1 8 14.6 8 15.3l1 5.4c.1.7.6 1.3 1.3 1.4.7.1 1.4-.2 1.9-.8l2.5-3.5c.6-.9 1.4-1.3 2.3-1.3H22a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2.5Z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('googlew.googleplans')

        {{-- Features Section --}}
        <section class="relative z-10 px-6 py-20">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">
                        Everything you need to
                        <span class="block text-blue-600">get work done</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Connect, create, and collaborate with Google Workspace's
                        integrated suite of AI-powered productivity tools.
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-8">
                    @foreach ($features as $featureIndex => $feature)
                        <div class="relative perspective-1000 group cursor-pointer hover:scale-105 transition-all duration-300 ease-out"
                            style="transition-delay: {{ $featureIndex * 200 }}ms;">
                            <div class="transform-gpu transition-all duration-300 group-hover:rotate-y-12 group-hover:rotate-x-6">
                                <div class="bg-white rounded-2xl shadow-xl p-6 border border-gray-100 relative overflow-hidden">
                                    <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-full -translate-y-10 translate-x-10"></div>
                                    <div class="flex items-start space-x-4">
                                        <div class="{{ $feature['color'] }} p-3 rounded-2xl text-white transform transition-all duration-300 group-hover:scale-110 group-hover:rotate-12">
                                            @if ($feature['icon'] === 'mail')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.93 1.93 0 0 1-2.06 0L2 7"/></svg>
                                            @elseif ($feature['icon'] === 'video')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8"><path d="m22 8-6 4 6 4V8Z"/><rect width="14" height="12" x="1" y="6" rx="2" ry="2"/></svg>
                                            @elseif ($feature['icon'] === 'file-text')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                                            @elseif ($feature['icon'] === 'cloud')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8"><path d="M17.5 19H18a4 4 0 0 0 0-8h-.5A2.5 2.5 0 0 1 15 9.5a2.5 2.5 0 0 1 .4-1.2l.7-.7A3.5 3.5 0 0 0 12 4.5 3.5 3.5 0 0 0 7.5 7H7a4 4 0 0 0-4 4 4 4 0 0 0 .5 8H5"/></svg>
                                            @endif
                                        </div>
                                        <div class="flex-1">
                                            <h3 class="text-xl font-bold text-gray-900 mb-2">
                                                {{ $feature['title'] }}
                                            </h3>
                                            <p class="text-gray-600 mb-4">
                                                {{ $feature['description'] }}
                                            </p>
                                            <button class="flex items-center text-blue-600 hover:text-blue-700 font-medium group/btn">
                                                Learn more
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 ml-1 transform transition-transform group-hover/btn:translate-x-1"><polyline points="9 18 15 12 9 6"/></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    @include('components.faqsectionone')
    <div class=" mt-20">
        @include('components.clients')
    </div>
@endsection
