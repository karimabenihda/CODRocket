<nav x-data="{ isOpen: false }" class="bg-white border-b border-gray-100">
  <nav class="bg-white py-4 px-[10px] md:px-[55px] max-w-[1340px] mx-auto">
    <div class="flex items-center justify-between">

      <!-- Left: Logo -->
      <div>
        <a href="{{ url('/') }}">
          <img src="{{ asset('images/logo.png') }}" height="40" width="170" class="pl-[7px] md:pl-0" alt="Logo" />
        </a>
      </div>

      <!-- Center: Nav links -->
      <div class="flex-1 flex justify-center">
        <ul class="flex items-center gap-12" x-data="{ dropdownOpen: false }">
          <!-- Dropdown menu -->
          <li class="relative"
              @mouseenter="dropdownOpen = true" 
              @mouseleave="dropdownOpen = false"
          >
            <button
              @click="dropdownOpen = !dropdownOpen"
              class="flex items-center gap-1 text-gray-800 font-medium hover:text-[#7a3189]"
              type="button"
              aria-haspopup="true"
              :aria-expanded="dropdownOpen.toString()"
            >
              {{ __('translation.navbar.lien1') }}
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <ul
              x-show="dropdownOpen"
              x-transition
              style="width: 140px"
              class="absolute top-full left-0 mt-2 bg-white shadow-md rounded-md py-2  z-10"
              style="display: none;"
            >
              <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Service 1</li>
              <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Service 2</li>
              <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Service 3</li>
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
            <li >
              <a href="{{ url($link) }}" class="text-gray-800 hover:text-[#7a3189] px-6 cursor-pointer">
                {{ __('translation.navbar.' . $key) }}
              </a>
            </li>
          @endforeach
        </ul>
      </div>

      <!-- Right: Buttons -->
      <div class="flex gap-3 items-center">
        @include('landing.components.language-switcher')

        <button class="bg-purple-100 hover:bg-purple-300 border font-medium px-6 py-2 rounded-full text-[#7a3189] transition">
          {{ __('translation.home.button3') }}
        </button>

<button style="background-color: #78328a ;color:" class=" hover:bg-fuchsia-700 text-white font-medium px-6 py-2 rounded-full flex items-center justify-center gap-2 transition-colors">
  <span>{{ __('translation.home.button1') }}</span>
</button>
      </div>
    </div>
  </nav>
</nav>
