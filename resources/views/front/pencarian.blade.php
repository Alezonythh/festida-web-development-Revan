@extends('layouts.master')
@section('content')
<body class="font-poppins text-blue-900 bg-gray-100">
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute top-1/4 right-0 w-96 h-96 bg-yellow-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-pink-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 -translate-y-1/2"></div>
    </div>
    <x-nav/>

    <header class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
        <div class="text-center">
        <h1 class="font-black text-[36px] leading-[50px] text-blue text-center">Explore 10,000 <br>Most Popular Jobs</h1>
            <div class="mt-8 sm:mt-12">
                <form method="GET" action="{{route('front.search')}}" class="sm:max-w-xl sm:mx-auto">
                    @csrf
                    <div class="sm:flex">
                        <div class="min-w-0 flex-1">
                            <label for="keyword" class="sr-only">Cari pekerjaan</label>
                            <input id="keyword" name="keyword" type="text"  placeholder="Cari cepat pekerjaan impian Anda..." class="block w-full px-4 py-3 rounded-md border border-gray-300 text-base leading-5 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <button type="submit" class="block w-full py-3 px-4 rounded-md shadow bg-blue-600 text-white font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 focus:ring-offset-gray-100">
                                Jelajahi Sekarang
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>

<x-footer/>
@endsection
