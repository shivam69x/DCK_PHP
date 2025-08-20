@extends('layouts.app')

@section('content')
    <div class='bg-gradient-to-br from-[#dff6fd] to-[#f7fafe]'>
        @include('vps.heroindia')
        <div class="max-w-[1200px] flex justify-center flex-col mx-auto px-0 py-1">
            @include('vps.planindia')
        </div>
        @include('vps.features')
        <div class="max-w-[1200px] flex justify-center flex-col mx-auto px-0 py-1">
            @include('components.faqsectionone')
        </div>
        <div class="mt-20">
            @include('components.clients')
        </div>
    </div>
@endsection
