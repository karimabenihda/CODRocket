<nav x-data="{ isOpen: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex items-center justify-between">
            <!-- Left: Logo -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" class="h-7 w-auto md:!pl-0 !pl-5" alt="Logo" />
                </a>
            </div>

            <!-- Center: Nav links (Hidden on mobile, shown on desktop) -->
            {{-- <div class="hidden lg:flex lg:flex-1 lg:justify-center">
            </div> --}}

            <!-- Right: Buttons and Language Switcher -->
            <div class="hidden lg:!flex !items-center gap-4">
               <ul class="flex items-center gap-8" x-data="{ dropdownOpen: false }">
                    <!-- Dropdown menu -->
                    <li class="relative"
                        @mouseenter="dropdownOpen = true"
                        @mouseleave="dropdownOpen = false">
                        <button
                            @click="dropdownOpen = !dropdownOpen"
                            class="flex items-center gap-1 !text-gray-800 font-medium hover:!text-[#7a3189d0] focus:outline-none"
                            type="button"
                            aria-haspopup="true"
                            :aria-expanded="dropdownOpen.toString()">
                            {{ __('translation.navbar.lien1') }}
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <ul
                            x-show="dropdownOpen"
                            x-transition
                            class="absolute top-full left-0 mt-2 w-36 bg-white shadow-lg rounded-md py-2 z-30">
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-sm text-gray-700">
                            <a href="{{ url('/operations') }}">Operations</a></li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-sm text-gray-700">Inventory Tracking</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-sm text-gray-700">Store And LandingPage</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-sm text-gray-700">Integrations</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-sm text-gray-700">Manage Delivery</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-sm text-gray-700">Analytics</li>
                        </ul>
                    </li>

                    <!-- Other nav links -->
                    @php
                        $navLinks = [
                            'lien2' => '/pricing',
                            'lien3' => '/contact',
                        ];
                    @endphp
                    @foreach($navLinks as $key => $link)
                        <li>
                            <a href="{{ url($link) }}"
                               class="!text-gray-800 hover:!text-[#7a3189] !font-medium !px-4 !transition-colors">
                                {{ __('translation.navbar.' . $key) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                @include('landing.components.language-switcher')
                <button class="!bg-purple-100 hover:!bg-purple-200 !text-[#7a3189] font-medium !px-6 !py-2 rounded-full transition-colors">
                    {{ __('translation.home.button3') }}
                </button>
                <button class="!bg-[#7a3189] hover:!bg-[#7a3189d0] !text-white font-medium !px-6 !py-2 rounded-full flex items-center gap-2 transition-colors">
                    <span>{{ __('translation.home.button1') }}</span>
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:!hidden flex items-center">
                <button @click="isOpen = !isOpen" class="text-gray-800 hover:text-[#7a3189d0] focus:outline-none">
                    <svg x-show="!isOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <svg x-show="isOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="isOpen" x-transition class="lg:hidden mt-4">
            <ul class="flex flex-col gap-4" x-data="{ dropdownOpen: false }">
                <!-- Dropdown menu -->
                <li>
                    <button
                        @click="dropdownOpen = !dropdownOpen"
                        class="flex items-center gap-1 text-gray-800 font-medium hover:text-[#7a3189d0] w-full text-left"
                        type="button"
                        aria-haspopup="true"
                        :aria-expanded="dropdownOpen.toString()">
                        {{ __('translation.navbar.lien1') }}
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul
                        x-show="dropdownOpen"
                        x-transition
                        class="mt-2 bg-white shadow-lg rounded-md py-2">
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-sm text-gray-700">Operations</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-sm text-gray-700">Inventory Tracking</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-sm text-gray-700">Store And LandingPage</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-sm text-gray-700">Integrations</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-sm text-gray-700">Manage Delivery</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-sm text-gray-700">Analytics</li>
                    </ul>
                </li>




                <!-- Other nav links -->
                @foreach($navLinks as $key => $link)
                    <li>
                        <a href="{{ url($link) }}"
                           class="text-gray-800 hover:!text-[#7a3189d0] font-medium block py-2">
                            {{ __('translation.navbar.' . $key) }}
                        </a>
                    </li>
                @endforeach
<div class="flex gap-2">
    <a href="{{ route('lang.switch', 'en') }}" class="!px-3 py-1 !text-black bg-gray-200 rounded">English</a>
    <a href="{{ route('lang.switch', 'ar') }}" class="!px-3 py-1 !text-black bg-gray-200 rounded">العربية</a>
</div>
                <!-- Language Switcher and Buttons -->
                <li>@include('landing.components.language-switcher')</li>
                <li class="flex">
                    <button class="bg-purple-100 hover:!bg-purple-200 text-[#7a3189d0] font-medium px-6 py-2 border rounded-full w-full text-left transition-colors">
                        {{ __('translation.home.button3') }}
                    </button>
               
                    <button class="!bg-[#7a3189] hover:!bg-[#7a3189d0] !text-white font-medium px-6 py-2 rounded-full w-full text-left flex items-center gap-2 transition-colors">
                        <span>{{ __('translation.home.button1') }}</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>