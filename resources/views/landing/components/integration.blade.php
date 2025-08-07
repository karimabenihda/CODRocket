<div class="bg-slate-50">
    <div class="max-w-3xl mx-auto px-6 py-10 text-center">
        {{-- Translated paragraph --}}
        <h1 class="font-medium text-base text-gray-900 mb-6">
            {{ __('translation.home.p') }}
        </h1>

        {{-- Images container --}}
        <div class="flex flex-wrap justify-center gap-6 items-center">
            @php
                $images = [
                    asset('images/woo.png'),
                    asset('images/html.png'),
                    asset('images/shopify.png'),
                    asset('images/youcan.png')
                ];
            @endphp

            @foreach ($images as $index => $img)
                <div 
                    class="rounded-xl overflow-hidden transition-transform transform scale-95 hover:scale-100 duration-300" 
                    style="max-width: 250px; flex: 1 0 120px;"
                >
                    <img src="{{ $img }}" alt="integration-{{ $index }}" class="rounded-xl w-full h-auto" />
                </div>
            @endforeach
        </div>
    </div>
</div>
