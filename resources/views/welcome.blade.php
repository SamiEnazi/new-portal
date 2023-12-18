@extends('layout.master')


@section('content')
    <div>
        <img class="w-[100%] -z-10" alt="SDL" src="{{ asset('imgs/Header2.png') }}" />
        @include('components.searchBox')
        @include('components.searchCategories')
        @php
            // Retrieve the flashed data from the session
            $flashedData = session('data');
        @endphp

        @if ($flashedData)
            <div class="flex flex-col w-full leading-loose mt-10">

                <h1 class='text-8xl text-center'>Search Results</h1>
                <p>Search Text: {{ $flashedData['searchText'] }}</p>
                <p>Search Prefix: {{ $flashedData['searchPrefix'] }}</p>
                <p>Search Filter: {{ $flashedData['searchFilter'] }}</p>
            </div>
        @endif
    </div>
@endsection
