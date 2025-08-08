@php
    $isRTL = app()->getLocale() === 'ar'; // or use config('app.locale') if needed
    $alignment = $isRTL ? 'text-right' : 'text-left';
@endphp

<div class="!my-[90px] max-w-[1440px] px-[10px] md:px-[70px] mx-auto flex items-center justify-center " dir="{{ $isRTL ? 'rtl' : 'ltr' }}">
    <div class="bg-[#7a3189] flex flex-row  items-center justify-between rounded-3xl !px-10 shadow-md !w-full max-w-4xl">
        <div class="md:w-1/2 {{ $alignment }} space-y-6 !mb-6 md:!mb-0">
           
            <h1 class="!text-3xl font-bold !pt-4 text-white mb-2">
                {{ __('translation.footer.card.title') }}
            </h1>
            <p class="!text-white text-lg">
                {{ __('translation.footer.card.p') }}
            </p>
            <button class="sm:w-auto !mt-5 bg-transparent border !border-white !text-white font-medium px-6 !py-3 !rounded-full hover:!bg-white hover:!text-[#7a3189] transition">
                {{ __('translation.home.button1') }}
            </button>
        </div>
        <div class="md:w-1/2 flex justify-center">
            <img src="{{ asset('images/analytics.png') }}" alt="Analytics" class="w-full max-w-xs md:max-w-md">
        </div>
    </div>
</div>
