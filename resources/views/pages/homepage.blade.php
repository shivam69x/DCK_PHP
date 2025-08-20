@extends('layouts.app')

@section('content')
    <div class="bg-slate-200 -mt-[1px] relative">
        @include('components.hero')
        @include('components.faqnav')
        @include('components.dck')

        <div class="max-w-[1400px] flex justify-center flex-col mx-auto px-0 py-1">
            @include('components.midhero')
            @include('components.offers')
            @include('components.products')
            @include('components.aboutus')
            @include('components.whyus')
            @include('components.aim')
        </div>
        @include('components.faqsectionone')
        <div class="mt-20">
            @include('components.clients')
        </div>
    </div>
@endsection
