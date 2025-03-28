@extends('layouts.master')

@php
    $comics = config('comics');
    var_dump($comics);
@endphp

@section('content')
    {{-- jumbo --}}
    @include('partials.jumbotron')
    
    {{-- main --}}
    <main class="bg-[#1c1c1c] pt-16 pb-8 text-white relative">
        {{-- badge --}}
        <div class="uppercase text-3xl font-semibold absolute top-0 -translate-y-1/2 -translate-x-4 bg-blue-600 py-3 px-8 rounded-sm">current series</div>


        {{-- cards --}}
        <div class="grid grid-cols-6 gap-x-8 gap-y-14">
            @foreach ($comics as $comic)
            <x-card>
                <x-slot:src>
                    {{$comic['thumb']}}
                </x-slot:src>
                <x-slot:alt>
                    {{$comic['title']}}
                </x-slot:alt>
                <x-slot:title>
                    {{$comic['title']}}
                </x-slot:title>
            </x-card>
            @endforeach
        </div>
        {{-- load more btn --}}
        <div class="text-center mt-12">
            <x-load-more-btn></x-load-more-btn>
        </div>
    </main>

    {{-- subfooter --}}
    @include('partials.subfooter')
@endsection
