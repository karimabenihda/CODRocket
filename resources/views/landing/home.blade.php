<script src="//unpkg.com/alpinejs" defer></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

@extends('layouts.app') 
@section('content')

<div class="bg-[#7a3189] overflow-x-hidden !px-[10px] md:px-[45px] pb-20">
  <div class="flex items-center pt-2 justify-center">
    {{-- <div class="flex flex-row-reverse md:flex-row items-center max-w-[1340px] w-full gap-9"> --}}
      <div class="flex !flex-col-reverse px-[20px]  md:!flex-row items-center max-w-[1340px] !w-full gap-9">

      <!-- Left Text Section -->
      <div class="pl-5 md:-pl-3 lg:-pl-13 !pt-10 w-full md:w-[55%] z-10">
        <h1 style="font-size: 50px" class="text-white font-bold text-2xl md:text-3xl leading-tight mb-4">
          {{ __('translation.home.title') }}
        </h1>
        <p class="text-base text-white font-normal mb-6 leading-relaxed">
          {{ __('translation.home.paragraph') }}
        </p>

        <div class="!w-full flex md:!flex-row !flex-col gap-4">
          <button class="!w-[300px] sm:w-auto bg-transparent border border-white text-white font-medium px-3 py-3 rounded-full hover:bg-white hover:text-[#7a3189] transition">
            {{ __('translation.home.button1') }}
          </button>    
    <a href="https://www.youtube.com/watch?v=JJHlN2W2dRQ" 
   class="!w-[300px] sm:w-auto !bg-white !text-[#7a3189] font-medium px-3 py-3 rounded-full !flex items-center justify-center gap-2 hover:!bg-purple-100 transition glightbox"
   data-gallery="video-gallery" 
   data-type="video">
    <span>{{ __('translation.home.button2') }}</span>
    <x-heroicon-o-play class="w-5 h-5" stroke="#7a3189" />
</a>



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
  {{-- @include('landing.components.prices') --}}
  {{-- @include('components.about') --}}

</div>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            autoplayVideos: true
        });
    });
</script>
