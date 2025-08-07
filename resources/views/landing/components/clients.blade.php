@php
    $testimonials = [
        [
            'id' => 1,
            'name' => __('translation.clients.client1.name'),
            'role' => __('translation.clients.client1.role'),
            'quote' => __('translation.clients.client1.quote'),
            'company' => __('translation.clients.client1.company'),
            'image' => asset('images/p4.webp'),
            'bgColor' => '#9d174d', // Tailwind bg-pink-800
            'textColor' => '#ffffff',
        ],
        [
            'id' => 2,
            'name' => __('translation.clients.client2.name'),
            'role' => __('translation.clients.client2.role'),
            'quote' => __('translation.clients.client2.quote'),
            'company' => __('translation.clients.client2.company'),
            'image' => asset('images/p1.webp'),
            'bgColor' => '#fb923c', // Tailwind bg-orange-400
            'textColor' => '#000000',
        ],
        [
            'id' => 3,
            'name' => __('translation.clients.client3.name'),
            'role' => __('translation.clients.client3.role'),
            'quote' => __('translation.clients.client3.quote'),
            'company' => __('translation.clients.client3.company'),
            'image' => asset('images/p2.webp'),
            'bgColor' => '#27272a', // Tailwind bg-zinc-800
            'textColor' => '#ffffff',
        ],
        [
            'id' => 4,
            'name' => __('translation.clients.client4.name'),
            'role' => __('translation.clients.client4.role'),
            'quote' => __('translation.clients.client4.quote'),
            'company' => __('translation.clients.client4.company'),
            'image' => asset('images/p3.webp'),
            'bgColor' => '#0d9488', // Tailwind bg-teal-600
            'textColor' => '#ffffff',
        ],
    ];
@endphp
<div x-data="{ activeId: 3 }" class="px-2 max-w-[1340px] mx-auto">
   
    <h1 class="text-4xl text-[#7a3189] font-bold text-center " style="font-size: 45px">
          {{ __('translation.clients.sectionTitle') }} 
        </h1>
        <p class="text-gray-600 py-4 text-center">{{ __('translation.clients.p') }}</p>

    {{-- Mobile View --}}
{{-- Mobile View --}}
<div class="flex flex-col md:hidden gap-4 mb-10">
    @foreach ($testimonials as $testimonial)
        <button
            x-on:click="activeId = {{ $testimonial['id'] }}"
            class="rounded-xl overflow-hidden shadow-md transition-all duration-300 w-full text-left"
            :class="activeId === {{ $testimonial['id'] }} ? 'h-[570px] opacity-100' : 'h-40 opacity-60'"
            :style="activeId === {{ $testimonial['id'] }} 
                ? 'background-color: {{ $testimonial['bgColor'] }}; color: {{ $testimonial['textColor'] }};' 
                : ''"
        >
            <template x-if="activeId === {{ $testimonial['id'] }}">
                <div class="flex flex-col gap-4 !h-[500px] p-6">
                    <img
                        src="{{ $testimonial['image'] }}"
                        alt="{{ $testimonial['name'] }}"
                        class="!w-full !h-48 rounded-2xl !object-cover self-center"
                    />
                    <div class="flex flex-col justify-center flex-grow mt-4">
                        <div class="mb-3">
                            {{-- Inline Quote SVG --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 13H5v-2a4 4 0 014-4h1m9 6h-4v-2a4 4 0 014-4h1" />
                            </svg>
                        </div>
                        <p class="text-lg font-medium mb-4">{{ $testimonial['quote'] }}</p>
                        <div>
                            <p class="font-bold">{{ $testimonial['name'] }}</p>
                            <p class="text-sm opacity-70">{{ $testimonial['role'] }}</p>
                        </div>
                    </div>
                </div>
            </template>

            <template x-if="activeId !== {{ $testimonial['id'] }}">
                <img
                    src="{{ $testimonial['image'] }}"
                    alt="{{ $testimonial['name'] }}"
                    class="object-cover w-full h-full"
                />
            </template>
        </button>
    @endforeach
</div>


 {{-- Desktop View --}}
<div class="hidden md:flex flex-row gap-4 justify-center mb-10">
    @foreach ($testimonials as $testimonial)
        <div
            x-on:click="activeId = {{ $testimonial['id'] }}"
            class="relative rounded-xl overflow-hidden shadow-md transition-all duration-300 cursor-pointer"
            :style="activeId === {{ $testimonial['id'] }} 
                ? 'background-color: {{ $testimonial['bgColor'] }}; color: {{ $testimonial['textColor'] }}; width: 660px; opacity: 1;' 
                : 'width: 150px; opacity: 0.9;'"
            style="height: 570px;"
        >
            <!-- Always show image -->
            <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}"
                 class="absolute top-0 left-0 !w-[300px] !h-full !object-cover z-0" />

            <!-- Active content -->
            <div
                x-show="activeId === {{ $testimonial['id'] }}"
                class="relative z-10 !h-[500px] flex gap-4 "
                x-transition
            >
                <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}"
                     class="!w-[300px] h-full rounded-2xl !object-cover self-center" />
                <div class="flex flex-col justify-center flex-grow">
                    <div class="mb-3"></div>
                    <p class="text-lg font-medium mb-4 text-left">{{ $testimonial['quote'] }}</p>
                    <div>
                        <p class="font-bold text-left">{{ $testimonial['name'] }}</p>
                        <p class="text-sm opacity-70 pb-6 text-left">{{ $testimonial['role'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>


</div>
