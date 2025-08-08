<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
@extends('layouts.app') 

@section('content')
@php
    $isRTL = app()->getLocale() === 'ar';

    $helpItems = [
        [
            'icon' => 'fa-solid fa-globe',
            'title' => __('translation.help_center.items.company_formation.title'),
            'description' => __('translation.help_center.items.company_formation.description'),
        ],
        [
            'icon' => 'fa-solid fa-globe',
            'title' => __('translation.help_center.items.ein_itin.title'),
            'description' => __('translation.help_center.items.ein_itin.description'),
        ],
        [
            'icon' => 'fa-solid fa-globe',
            'title' => __('translation.help_center.items.taxation_compliance.title'),
            'description' => __('translation.help_center.items.taxation_compliance.description'),
        ],
        [
            'icon' => 'fa-solid fa-globe',
            'title' => __('translation.help_center.items.misc_faqs.title'),
            'description' => __('translation.help_center.items.misc_faqs.description'),
        ],
        [
            'icon' => 'fa-solid fa-globe',
            'title' => __('translation.help_center.items.codrocket_analytics.title'),
            'description' => __('translation.help_center.items.codrocket_analytics.description'),
        ],
        [
            'icon' => 'fa-solid fa-globe',
            'title' => __('translation.help_center.items.compliance_filings.title'),
            'description' => __('translation.help_center.items.compliance_filings.description'),
        ],
    ];
@endphp

<section class="py-16">
    <div class="mx-auto text-center">

        {{-- Heading & Search --}}
        <div class="w-full bg-purple-100">
            <div class="max-w-2xl mx-auto mb-14 py-10 px-4">
                <h2 class="text-2xl md:text-3xl font-bold mb-6">
                    {{ __('translation.help_center.title') }}
                </h2>

                {{-- Input + Icon Wrapper --}}
                <div class="relative">
                    <input
                        type="text"
                        placeholder="{{ __('translation.help_center.search') }}"
                        class="w-full border border-gray-300 rounded-full py-3 px-5 {{ $isRTL ? 'pl-12 text-right' : 'pr-12 text-left' }} focus:outline-none focus:ring-2 focus:ring-purple-400"
                    >
                    {{-- Search Icon --}}
                    <button
                        type="button"
                        class="absolute top-1/2 -translate-y-1/2 bg-[#7a3189] p-2 rounded-full hover:bg-[#7a3189cf] transition {{ $isRTL ? 'left-3' : 'right-3' }}"
                    >
                        <i class="fa-solid fa-magnifying-glass text-white w-5 h-5"></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- Help Cards Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 px-[10px] md:px-[70px] max-w-7xl mx-auto">
            @foreach ($helpItems as $item)
                <div class="text-center p-6 hover:bg-[#faf5ff] bg-white border hover:shadow rounded-lg transition">
                    <i class="{{ $item['icon'] }} mx-auto mb-4 text-purple-500 text-3xl"></i>
                    <h3 class="font-semibold text-lg mb-2">{{ $item['title'] }}</h3>
                    <p class="text-sm text-gray-600">{{ $item['description'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>
@endsection
