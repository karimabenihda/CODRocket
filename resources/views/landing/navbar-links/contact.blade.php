<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    
@extends('layouts.app') 
@section('content')
@php
    $isRTL = app()->getLocale() === 'ar';
@endphp

<section class="flex items-center justify-center bg-white relative px-4 !my-10 !mb-20 sm:px-6 lg:px-8">
    {{-- Decorative Background (Purple Shape) --}}
    <div class="
        absolute bottom-0 h-full bg-[#7a3189] z-0
        @if(!$isRTL) right-0 w-40 sm:w-52 rounded-l-3xl 
        @else left-0 w-40 sm:w-52 rounded-l-none rounded-r-3xl @endif
    "></div>

    <div class="w-full max-w-6xl grid grid-cols-1 md:grid-cols-2 gap-6 z-5">
        
        {{-- Contact Form --}}
        <div class="bg-white rounded-2xl p-4 z-10 border">
            <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-[#7a3189] {{ $isRTL ? 'text-right' : '' }}">
                {{ __('translation.contact.title') }}
            </h2>

            <form class="space-y-5" dir="{{ $isRTL ? 'rtl' : 'ltr' }}">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-800">
                            {{ __('translation.contact.form.firstname') }}
                        </label>
                        <input type="text" placeholder="{{ __('translation.contact.form.firstname') }}"
                            class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#7a3189]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-800">
                            {{ __('translation.contact.form.lastname') }}
                        </label>
                        <input type="text" placeholder="{{ __('translation.contact.form.lastname') }}"
                            class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#7a3189]">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-800">
                        {{ __('translation.contact.form.email') }}
                    </label>
                    <input type="email" placeholder="{{ __('translation.contact.form.email') }}"
                        class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#7a3189]">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-800">
                        {{ __('translation.contact.form.message') }}
                    </label>
                    <textarea rows="4" placeholder="{{ __('translation.contact.form.message') }}"
                        class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#7a3189]"></textarea>
                </div>

                <button type="submit"
                    class="bg-gray-950 text-white px-6 py-3 rounded-md hover:bg-gray-800 transition w-full">
                    {{ __('translation.contact.form.button') }}
                </button>
            </form>
        </div>

        {{-- Info Box --}}
        <div class="bg-gray-950 relative text-white p-6 sm:p-8 rounded-2xl overflow-hidden" dir="{{ $isRTL ? 'rtl' : 'ltr' }}">
            <h3 class="text-2xl sm:text-3xl font-semibold mb-6">
                {{ __('translation.contact.info') }}
            </h3>
            <p class="text-purple-50 mb-8 text-sm sm:text-base">
                {{ __('translation.contact.p') }}
            </p>

            <div class="space-y-5 text-sm sm:text-base md:text-lg">
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <i class="fa-regular fa-envelope text-[#7a3189] text-lg"></i>
                        <span class="text-purple-100 break-words">support@codrocket.com</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <i class="fa-solid fa-phone text-[#7a3189] text-lg"></i>
                        <span class="text-purple-100 break-words">+212 6 56 58 86 99</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <i class="fa-solid fa-location-dot text-[#7a3189] text-lg"></i>
                        <span class="text-purple-100 break-words">
                            {{ __('translation.contact.location') }}
                        </span>
                    </div>

                    {{-- Social Links --}}
                    <div class="flex pt-6 gap-4 absolute bottom-8 font-medium 
                        {{ !$isRTL ? 'right-12 justify-end' : 'left-12 justify-start flex-row-reverse' }}">
                        <a href="https://facebook.com/CODRocket">
                            <i class="fa-brands fa-facebook-f text-[#7a3189] hover:text-white text-lg"></i>
                        </a>
                        <a href="https://instagram.com/codrocket1">
                            <i class="fa-brands fa-instagram text-[#7a3189] hover:text-white text-lg"></i>
                        </a>
                        <a href="https://www.youtube.com/@codrocket">
                            <i class="fa-brands fa-youtube text-[#7a3189] hover:text-white text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
