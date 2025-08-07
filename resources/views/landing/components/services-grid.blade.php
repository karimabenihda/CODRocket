@php
    $isRTL = app()->getLocale() === 'ar'; // or use config('app.locale')
    $chevronDirection = $isRTL ? 'chevron-left' : 'chevron-right';

    $cards = [
        [
            'icon' => 'lucide-store',
            'bg' => 'bg-yellow-100',
            'textColor' => 'text-yellow-700',
            'section' => 'section1',
            'link' => '#'
            // 'link' => route('features.features') 
        ],
        [
            'icon' => 'lucide-briefcase-business',
            'bg' => 'bg-pink-100',
            'textColor' => 'text-pink-700',
            'section' => 'section2',
            'link' => '#'
        ],
        [
            'icon' => 'lucide-chart-line',
            'bg' => 'bg-green-100',
            'textColor' => 'text-green-700',
            'section' => 'section3',
            'link' => '#'
        ],
        [
            'icon' => 'lucide-rocket',
            'bg' => 'bg-blue-100',
            'textColor' => 'text-blue-700',
            'section' => 'section4',
            'link' => '#'
        ],
        [
            'icon' => 'lucide-sparkles',
            'bg' => 'bg-[#f3eae1]',
            'textColor' => 'text-[#825426]',
            'section' => 'section5',
            'link' => '#'
        ],
        [
            'icon' => 'lucide-circle-play',
            'bg' => 'bg-purple-100',
            'textColor' => 'text-purple-700',
            'section' => 'section6',
            'link' => '#'
        ]
    ];
@endphp

<div  class="px-[10px] md:px-[70px] max-w-[1340px] mx-auto">
    <div class="py-5 px-4 text-center">
        <h1 style="font-size: 45px" class="text-[#7a3189] font-bold  mb-2">
            {{ __('translation.services.title') }}
        </h1>
        <p class="text-gray-600 text-sm mb-6">
            {{ __('translation.services.paragraph') }}
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
           <button style="background-color: #78328a ;color:" class=" hover:bg-fuchsia-700 text-white font-medium px-6 py-2 rounded-full flex items-center justify-center gap-2 transition-colors">
  <span>{{ __('translation.home.button1') }}</span>
</button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 !pb-10">
        @foreach ($cards as $card)
            <div class="rounded-xl p-6 shadow-sm {{ $card['bg'] }} flex flex-col justify-between">
                <div>
                    {{-- Lucide Icon --}}
                    {{-- <x-dynamic-component :component="$card['icon']" class="w-6 h-6" /> --}}

                    <h3 class="font-semibold text-base pt-3">
                        {{ __('translation.services.' . $card['section'] . '.titre') }}
                    </h3>

                    <p class="text-[13px] text-gray-700 mt-2 mb-4">
                        {{ __('translation.services.' . $card['section'] . '.p') }}
                    </p>
                </div>

                <div class="mt-8 inline-flex items-center {{ $card['textColor'] }} text-sm font-medium">
                    <a href="{{ $card['link'] }}" class="mr-1">
                        {{ __('translation.services.' . $card['section'] . '.a') }}
                    </a>
                    {{-- <x-lucide-icon :name="$chevronDirection" class="w-4 h-4" /> --}}
                </div>
            </div>
        @endforeach
    </div>
</div>
