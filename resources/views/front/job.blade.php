@extends('layouts.master')

@section('content')

    <x-nav/>

    <section id="Latest" class="py-16 sm:py-24">
        <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-blue-900 sm:text-4xl mb-8">
                Lowongan Terbaru
            </h2>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @forelse($jobs as $job)
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="{{ Storage::url($job->company->logo) }}" alt="{{ $job->company->name }}">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-blue-600">
                                    {{ $job->company->name }}
                                </p>
                                <a href="{{ route('front.details', $job->slug) }}" class="block mt-2">
                                    <p class="text-xl font-semibold text-blue-900">{{ $job->name }}</p>
                                    <p class="mt-3 text-base text-gray-500">{{ Str::limit($job->description, 100) }}</p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="flex-shrink-0">
                                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                        {{ $job->type }}
                                    </span>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">
                                        Rp {{ number_format($job->salary, 0, ',', '.') }}/month
                                    </p>
                                    <p class="text-sm text-gray-500">
                                        {{ $job->location }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-center col-span-full">No new job listings available at the moment.</p>
                @endforelse
            </div>
        </div>
    </section>
    <x-footer/>
@endsection