@php
    $isAnnual = true; // You may control this via JS (like Alpine.js) if you want dynamic toggling

    $cards = [
        [
            'id' => 'card1',
            'priceMonthly' => 19,
            'priceAnnually' => 16,
            'isCustom' => false,
        ],
        [
            'id' => 'card2',
            'priceMonthly' => 59,
            'priceAnnually' => 49,
            'isCustom' => false,
        ],
        [
            'id' => 'card3',
            'price' => __('landing_page.pricing.cards.card3.Custom'),
            'isCustom' => true,
        ],
    ];
@endphp

<section class="bg-purple-50 py-12">
    <div class="text-center max-w-[1340px] mx-auto px-[10px] md:px-[70px]">
        <h1 class="text-4xl font-bold text-gray-900 mb-6">
            {{ __('landing_page.pricing.title.do') }}
            <span class="text-[#7a3189]">{{ __('landing_page.pricing.title.item1') }}</span>
        </h1>
        <p class="text-gray-600 mb-10">{{ __('landing_page.pricing.p') }}</p>

        {{-- Toggle (Static here — make dynamic with JS if needed) --}}
        <div class="flex justify-center items-center gap-4 mb-10">
            <span class="text-gray-600">{{ __('landing_page.pricing.type2') }}</span>
            <span class="bg-[#7a3189] text-white px-3 py-1 rounded-full text-sm">Toggle Placeholder</span>
            <span class="text-gray-600">{{ __('landing_page.pricing.type1') }}</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($cards as $card)
                @php
                    $isCustom = $card['isCustom'];
                    $cardData = __('landing_page.pricing.cards.' . $card['id']);
                    $price = $isCustom
                        ? $card['price']
                        : '$' . ($isAnnual ? $card['priceAnnually'] : $card['priceMonthly']);
                    $period = $isCustom
                        ? ''
                        : ($isAnnual
                            ? __('landing_page.pricing.t1')
                            : __('landing_page.pricing.t2'));
                    $items = __('landing_page.pricing.cards.' . $card['id'] . '.items');
                @endphp

                <div class="relative flex flex-col h-full border rounded-3xl p-6 shadow-sm hover:shadow-md transition {{ $isCustom ? 'bg-[#7a3189] text-white border-[#7a3189]' : 'bg-white text-black' }}">
                    <h3 class="text-xl font-semibold text-start py-3 mb-1 {{ $isCustom ? 'text-white' : 'text-[#7a3189]' }}">
                        {{ $cardData['title'] ?? '' }}
                    </h3>

                    <div class="text-start mb-2">
                        <strong class="text-3xl font-bold {{ $isCustom ? 'text-white' : 'text-black' }}">
                            {{ $price }}
                            @unless($isCustom)
                                <span class="text-sm font-normal text-gray-500">{{ $period }}</span>
                            @endunless
                        </strong>

                        @if ($isAnnual && !$isCustom)
                            <div class="text-sm text-gray-500 mt-1 py-3">
                                @if ($card['id'] === 'card1') per month – $190 per year @endif
                                @if ($card['id'] === 'card2') per month – $590 per year @endif
                            </div>
                        @endif
                    </div>

                    <p class="text-md mb-4 text-left {{ $isCustom ? 'text-purple-100' : 'text-gray-500' }}">
                        {{ $cardData['p'] ?? '' }}
                    </p>

                    <ul class="text-sm mb-6 space-y-2 {{ $isCustom ? 'text-purple-100' : 'text-gray-700' }}">
                        @foreach ($items as $item)
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 {{ $isCustom ? 'text-white' : 'text-[#7a3189]' }}" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>

                    <button class="mt-auto py-2 rounded transition {{ $isCustom ? 'bg-white text-[#7a3189] hover:bg-purple-100' : 'bg-[#7a3189] text-white hover:bg-[#7a3189d0]' }}">
                        {{ $cardData['button'] ?? '' }}
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</section>
