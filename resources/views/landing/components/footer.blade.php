<footer class="px-6 py-12 sm:px-10 lg:px-20 space-y-12">
  <!-- Top: Logo + Newsletter + Social Icons -->
  <hr />
  <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-10">
    
    <!-- Logo + Description -->
    <div class="max-w-md space-y-4">
      <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-32" />
      <p class="text-gray-800 text-sm leading-relaxed">
        {{ __('translation.footer.title') }}
      </p>
    </div>

    <!-- Newsletter -->
    <div class="flex-2 space-y-4">
      <div class="text-sm text-[#000000] font-medium">
        {{ __('translation.footer.newsletterTitle') }}
      </div>
      <form class="flex flex-col sm:flex-row items-center gap-4" method="POST" action="#">
        @csrf
        <input
          type="email"
          name="email"
          placeholder="{{ __('translation.footer.placeholder') }}"
          class="px-4 py-2 w-full sm:w-72 rounded-full border bg-purple-50 border-purple-300 focus:outline-none text-black"
        />
        <button
          type="submit"
          class="bg-[#7a3189] text-white text-sm px-6 py-2 rounded-full hover:bg-[#7a3189cb] transition"
        >
          {{ __('translation.footer.subscribe') }}
        </button>
      </form>
      <p class="text-xs text-[#000000]">
        {{ __('translation.footer.privacy') }}
        <a href="#" class="underline text-[#7a3189]">
          {{ __('translation.footer.privacy1') }}
        </a>.
      </p>
    </div>
  </div>

  <!-- Bottom Grid Section: Links -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
    <!-- Solutions -->
    <div>
      <h4 class="font-semibold mb-4">{{ __('translation.footer.solutions.titre') }}</h4>
      <ul class="space-y-2 text-sm text-gray-600 font-medium">
        @foreach(range(1, 4) as $i)
          <li>{{ __('translation.footer.solutions.lien' . $i) }}</li>
        @endforeach
      </ul>
    </div>

    <!-- Informations -->
    <div>
      <h4 class="font-semibold mb-4">{{ __('translation.footer.informations.titre') }}</h4>
      <ul class="space-y-2 text-sm text-gray-600 font-medium">
        @foreach(range(1, 4) as $i)
          <li>{{ __('translation.footer.informations.lien' . $i) }}</li>
        @endforeach
      </ul>
    </div>

    <!-- Contact -->
    <div>
      <h4 class="font-semibold mb-4">{{ __('translation.footer.contact.titre') }}</h4>
      <ul class="space-y-2 text-sm text-gray-600 font-medium flex flex-col">
        {{-- <li><a href="{{ url('/help_center') }}">{{ __('translation.footer.contact.lien1') }}</a></li> --}}
        <li><a href="{{ url('/contact') }}">{{ __('translation.footer.contact.lien2') }}</a></li>
        <li><a href="https://wa.me/212656588699" target="_blank">{{ __('translation.footer.contact.lien3') }}</a></li>
        <li><a href="mailto:support@codrocket.com">{{ __('translation.footer.contact.lien4') }}</a></li>
      </ul>
    </div>
  </div>

  <hr />

  <!-- Copyright & Credits -->
  <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
    <p class="text-[#000000]">
      Designed & Developed by
      <a href="https://technopek.ma/" class="underline font-semibold">Technopek – Digital Agency</a>
    </p>
    <p class="text-[#000000]">© Cod Rocket 2025</p>
    <p class="text-[#000000]">{{ __('translation.footer.rights', [], 'All rights reserved.') }}</p>

    <!-- Social Icons -->
    <div class="flex gap-4 text-gray-600 font-medium">
      <a href="https://facebook.com/CODRocket">@svg('lucide-facebook', ['class' => 'w-5 h-5 hover:text-white', 'stroke' => '#7a3189'])</a>
      <a href="https://instagram.com/codrocket1">@svg('lucide-instagram', ['class' => 'w-5 h-5 hover:text-white', 'stroke' => '#7a3189'])</a>
      <a href="https://www.youtube.com/@codrocket">@svg('lucide-youtube', ['class' => 'w-5 h-5 hover:text-white', 'stroke' => '#7a3189'])</a>
      <a href="mailto:support@codrocket.com">@svg('lucide-mail', ['class' => 'w-5 h-5 hover:text-white', 'stroke' => '#7a3189'])</a>
    </div>
  </div>
</footer>
