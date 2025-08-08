@php
    $faqs = [];
    for ($i = 1; $i <= 10; $i++) {
        $faqs[] = [
            'question' => __("translation.faq.question{$i}.question"),
            'answer' => __("translation.faq.question{$i}.answer"),
        ];
    }
@endphp

<div x-data="{ active: null, showAll: false }" class="bg-purple-50 !py-[90px]">
    <div class="max-w-4xl mx-auto px-4 ">
          <h1 style="font-size: 45px" class="text-[#7a3189] text-center font-bold  mb-2">
       FAQs
        </h1>
        <p class="text-gray-600 text-center text-sm mb-6">
{{ __('translation.faq.p') }}        </p>
   
        <div class="space-y-4">
            @foreach ($faqs as $index => $faq)
                <div
                    x-show="{{ $index < 4 ? 'true' : 'showAll' }}"
                    x-transition
                    class="bg-white shadow-md rounded-2xl p-4 border border-gray-200"
                >
                    <div
                        class="flex justify-between items-center cursor-pointer"
                        @click="active === {{ $index }} ? active = null : active = {{ $index }}"
                    >
                        <h3 class="text-[16px] font-semibold">{{ $faq['question'] }}</h3>
                        <template x-if="active === {{ $index }}">
                            <svg class="text-[#7a3189] w-5 h-5" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </template>
                        <template x-if="active !== {{ $index }}">
                            <svg class="text-[#7a3189] w-5 h-5" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4v16m8-8H4"></path>
                            </svg>
                        </template>
                    </div>

                    <div
                        x-show="active === {{ $index }}"
                        x-transition
                        class="text-gray-800 mt-3 text-[14px]"
                    >
                        {{ $faq['answer'] }}
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Show More / Less Toggle --}}
        @if (count($faqs) > 4)
            <div class="flex justify-center mt-6">
                <button
                    @click="showAll = !showAll"
style="background-color: #78328a " class=" hover:bg-fuchsia-700 !text-white font-medium px-6 py-2 rounded-full flex items-center justify-center gap-2 transition-colors"              
                    <span x-text="showAll ? '{{ __('translation.faq.showLess') }}' : '{{ __('translation.faq.showMore') }}'"></span>
                    <svg
                        :class="showAll ? 'transform rotate-180' : ''"
                        class="w-5 h-5 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
        @endif
    </div>
</div>
