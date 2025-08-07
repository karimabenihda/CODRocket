@php
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
            'price' => __('translation.pricing.cards.card3.Custom'),
            'isCustom' => true,
        ],
    ];
@endphp

<section x-data="{ isAnnual: true }" class="bg-purple-50 py-12">
    <div class="text-center max-w-[1340px] mx-auto px-[10px] md:px-[70px]">
        <h1 class="text-4xl font-bold text-gray-900" style="font-size: 45px">
            {{ __('translation.pricing.title.do') }}
            <span class="text-[#7a3189]">{{ __('translation.pricing.title.item1') }}</span>
        </h1>
        <p class="text-gray-600 py-4">{{ __('translation.pricing.p') }}</p>

        <!-- Toggle -->
        <div class="flex justify-center items-center gap-4 mb-10">
            <span class="text-gray-600">{{ __('translation.pricing.type2') }}</span>
            <label class="inline-flex relative items-center cursor-pointer">
                <input type="checkbox" x-model="isAnnual" class="sr-only peer">
                <div class="w-11 h-6 !bg-gray-200 rounded-full peer peer-checked:!bg-[#7a3189] !transition-colors"></div>
                <div class="absolute left-0.5 top-0.5 w-5 h-5 !bg-white rounded-full shadow-md transform !transition-transform !peer-checked:translate-x-full"></div>
            </label>
            <span class="text-gray-600">{{ __('translation.pricing.type1') }}</span>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($cards as $card)
                @php
                    $isCustom = $card['isCustom'];
                    $cardData = __('translation.pricing.cards.' . $card['id']);
                    $items = __('translation.pricing.cards.' . $card['id'] . '.items');
                    $items = is_array($items) ? $items : [];

                    $priceAnnually = $card['priceAnnually'] ?? null;
                    $priceMonthly = $card['priceMonthly'] ?? null;
                @endphp

                <div
                    class="relative flex flex-col h-full mb-8 border rounded-3xl p-6 shadow-sm hover:shadow-md transition
                    {{ $isCustom ? 'bg-[#7a3189] text-white border-[#7a3189]' : 'bg-white text-black' }}"
                >
                    <h3 class="text-xl font-semibold text-start py-3 mb-1 {{ $isCustom ? 'text-white' : 'text-[#7a3189]' }}">
                        {{ $cardData['title'] ?? '' }}
                    </h3>

                    <div class="text-start mb-2">
                        <strong class="text-3xl font-bold {{ $isCustom ? 'text-white' : 'text-black' }}">
                            <span x-text="isAnnual ? '{{ $isCustom ? $card['price'] : '$' . $priceAnnually }}' : '{{ $isCustom ? $card['price'] : '$' . $priceMonthly }}'"></span>
                            @unless($isCustom)
                                <span class="text-sm font-normal text-gray-500" x-text="isAnnual ? '{{ __('translation.pricing.t1') }}' : '{{ __('translation.pricing.t2') }}'"></span>
                            @endunless
                        </strong>

                        @if (!$isCustom)
                            <div class="text-sm text-gray-500 mt-1 py-3" x-show="isAnnual">
                                @if ($card['id'] === 'card1') per month – $190 per year @endif
                                @if ($card['id'] === 'card2') per month – $590 per year @endif
                            </div>
                        @endif
                    </div>

                    <p class="text-md mb-4 text-left {{ $isCustom ? 'text-purple-100' : 'text-gray-500' }}">
                        {{ $cardData['p'] ?? '' }}
                    </p>

                    <ul class="text-sm mb-6 space-y-2 pb-4 {{ $isCustom ? 'text-purple-100' : 'text-gray-600' }}">
                        @foreach ($items as $item)
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 {{ $isCustom ? 'text-white' : 'text-[#7a3189]' }}" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>

                    <button class="absolute bottom-1 mb-6 w-[90%] mx-auto py-2 rounded transition
                        {{ $isCustom
                            ? '!bg-white !text-[#7a3189] hover:!bg-purple-100'
                            : '!bg-[#7a3189] !text-white hover:!bg-[#7a3189d0]' }}">
                        {{ $cardData['button'] ?? '' }}
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('pricing', () => ({
            isAnnual: true,
        }));
    });
</script>