<script src="//unpkg.com/alpinejs" defer></script>
@extends('layouts.app') 

@section('content')
<div class="bg-[#7a3189] overflow-x-hidden px-[10px] md:px-[45px] pb-20">
  <div class="flex items-center pt-2 justify-center">
    {{-- <div class="flex flex-row-reverse md:flex-row items-center max-w-[1340px] w-full gap-9"> --}}
      <div class="flex !flex-col-reverse px-[20px]  md:!flex-row items-center max-w-[1340px] !w-full gap-9">

      <!-- Left Text Section -->
      <div class="pl-5 md:-pl-3 lg:-pl-13 w-full md:w-[55%] z-10">
        <h1 style="font-size: 50px" class="text-white font-bold text-2xl md:text-3xl leading-tight mb-4">
          {{ __('translation.home.title') }}
        </h1>
        <p class="text-base text-white font-normal mb-6 leading-relaxed">
          {{ __('translation.home.paragraph') }}
        </p>

        <div class="flex flex-col sm:flex-row gap-4">
          <button class="w-full sm:w-auto bg-transparent border border-white text-white font-medium px-3 py-3 rounded-full hover:bg-white hover:text-[#7a3189] transition">
            {{ __('translation.home.button1') }}
          </button>
         <div x-data="{ showVideo: false }" class="relative z-10">
    <!-- Button -->
    <button
        @click="showVideo = true"
        style="color:#7a3189"
        class="w-full sm:w-auto bg-white text-[#7a3189] font-medium px-3 py-3 rounded-full flex items-center justify-center gap-2 hover:bg-purple-100 transition"
    >
        <span>{{ __('translation.home.button2') }}</span>
        <x-heroicon-o-play class="w-5 h-5" stroke="#7a3189" />
    </button>

    <!-- Video Modal -->
    <div
        x-show="showVideo"
        x-cloak
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
    >
        <div class="bg-white rounded-lg overflow-hidden shadow-lg max-w-3xl w-full relative">
            <!-- Close Button -->
            <button
                @click="showVideo = false"
                class="absolute top-2 right-2 text-gray-600 hover:text-gray-900 text-2xl font-bold"
            >
                &times;
            </button>

            <!-- Video iframe -->
            <div class="aspect-w-16 aspect-h-9 -z-400">
                <iframe
                    src="https://youtu.be/JJHlN2W2dRQ?si=o4kCV8ZWyhbSDW_v" 
                    title="Video"
                    frameborder="0"
                    allowfullscreen
                    class="w-full h-full "
                ></iframe>
            </div>
        </div>
    </div>
</div>

        </div>
      </div>

      <!-- Right Image Section -->
      <div class="w-full md:w-[40%] flex justify-center items-center relative h-[500px]">
        <div class="absolute w-[420px] h-[420px] bg-yellow-200 rounded-full z-0 overflow-hidden bottom-0">
          <img id="toggleImage" src="{{ asset('images/man.png') }}" alt="Illustration" class="w-full h-full pt-8 object-contain z-10 translate-y-12">
        </div>

        <!-- Floating Labels -->
        <div class="absolute top-20 left-1 mt-4 bg-white px-3 py-1.5 rounded-full shadow-md z-20 animate-bounce">
          <h4 class="text-sm font-bold flex justify-between gap-2 text-gray-600">
            {{-- @svg('lucide-shield', ['stroke' => '#7a3189']) --}}
            <x-feathericon-shield class="w-5 h-5" stroke="#7a3189"/>
            {{ __('translation.home.features.f4') }}
          </h4>
        </div>

        <div class="absolute top-12 -right-2 bg-pink-100 px-3 py-1.5 rounded-full shadow-md z-20 animate-pulse">
          <h4 class="text-sm font-bold flex justify-between gap-2 text-gray-600">
            {{-- @svg('lucide-truck', ['stroke' => '#7a3189']) --}}
            <x-heroicon-o-truck  class="w-5 h-5" stroke="#7a3189"/>
            {{ __('translation.home.features.f3') }}
          </h4>
        </div>

        <div class="absolute bottom-6 left-6 bg-blue-50 px-3 py-1.5 rounded-full shadow-md z-20 animate-bounce">
          <h4 class="text-sm font-bold flex justify-between gap-2 text-gray-600">
            {{-- @svg('lucide-rotate-cw', ['stroke' => '#7a3189']) --}}
            <x-feathericon-rotate-cw class="w-5 h-5" stroke="#7a3189"/>
            {{ __('translation.home.features.f2') }}
          </h4>
        </div>

        <div class="absolute bottom-20 -right-1 bg-green-100 px-3 py-1.5 rounded-full shadow-md z-20 animate-pulse">
          <h4 class="text-sm font-bold flex justify-between gap-2 text-gray-600">
            {{-- @svg('custom-chart-icon') --}}
            {{-- <x-fas-chart-line /> --}}
            <x-simpleline-chart  class="w-5 h-5" stroke="#7a3189"/>
            {{ __('translation.home.features.f1') }}
          </h4>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Other Sections -->
<div class="space-y-[100px]">
  @include('landing.components.integration')
  @include('landing.components.services-grid')
  {{-- @include('components.about') --}}
  @include('landing.components.prices')
  @include('landing.components.clients')
  @include('landing.components.faqs')
  @include('landing.components.card')
</div>
@endsection
