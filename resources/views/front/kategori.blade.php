@extends('layouts.master')

@section('content')

    <x-nav/>

    <section id="Categories" class="bg-gradient-to-br from-blue-900 to-indigo-800 py-16 sm:py-24">
        <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    Jelajahi Kategori Pekerjaan
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-blue-200 sm:mt-4">
                    Temukan peluang karir di berbagai industri
                </p>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                @forelse ($catregories as $category)
                    <a href="{{ route('front.category', $category->slug) }}" class="group">
                        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden bg-white hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                            <div class="flex-shrink-0 bg-gradient-to-r from-blue-100 to-indigo-100 p-6">
                                <img class="h-16 w-16 mx-auto object-contain" src="{{ Storage::url($category->icon)}}" alt="{{ $category->name }}">
                            </div>
                            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                <div class="flex-1">
                                    <p class="text-xl font-bold text-indigo-900">{{ $category->name }}</p>
                                    <p class="mt-3 text-base text-gray-600">{{ $category->jobs->count() }} lowongan tersedia</p>
                                </div>
                                <div class="mt-4 flex flex-wrap items-center gap-2">
                                    @if($category->jobs->isNotEmpty())
                                        <div class="flex items-center">
                                            <span class="text-sm text-gray-600">{{ $category->jobs->first()->type }}</span>
                                        </div>
                                        <div class="flex items-center">
                                            {{-- <span class="text-sm text-gray-600">Rp {{  }}/bulan</span> --}}
                                        </div>
                                        <div class="flex items-center">
                                            <span class="text-sm text-gray-600">{{ $category->jobs->first()->location }}</span>
                                        </div>
                                    @else
                                        <span class="text-sm text-gray-600">Belum ada informasi pekerjaan</span>
                                    @endif
                                </div>
                                <div class="mt-6 flex items-center text-indigo-600 group-hover:text-indigo-500">
                                    <span class="text-sm font-medium">Jelajahi</span>
                                    <svg class="ml-2 w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="text-white text-center col-span-full">Belum ada kategori yang tersedia saat ini.</p>
                @endforelse
            </div>
        </div>
    </section>
    <x-footer/>
@endsection