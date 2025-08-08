<div x-data="languageSwitcher()" x-init="init()" class="relative z-50" @click.away="isOpen = false">
  <button 
    @click="toggle()"
    class="cursor-pointer flex items-center  px-4 py-3 rounded-md text-sm"
    type="button"
    aria-haspopup="true"
    :aria-expanded="isOpen.toString()"
  >
    <img :src="currentLang.flag" :alt="currentLang.name" class="w-6 h-4 mr-2 object-cover" />
  </button>

  <template x-if="isOpen">
    <div
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0 -translate-y-2"
      x-transition:enter-end="opacity-100 translate-y-0"
      x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="opacity-100 translate-y-0"
      x-transition:leave-end="opacity-0 -translate-y-2"
      class="absolute top-full left-0 mt-2 pt-2 !bg-gray-50 rounded-md shadow-lg w-fit lg:w-36"
    >
      <div class="absolute -top-2 left-4 w-4 h-4 !bg-gray-50 transform rotate-45"></div>
      <template x-for="flag in flags" :key="flag.code">
    <button 
      @click="window.location.href = '{{ url('/lang') }}/' + flag.code" 
      class="cursor-pointer items-center w-full px-4 py-3 text-left hover:!bg-gray-100 text-sm flex"
      type="button"
    >
      <img :src="flag.flag" :alt="flag.name" class="w-6 h-4 mr-2 object-cover" />
      <span style="color: #7a3189" class="hidden lg:inline" x-text="flag.name"></span>
    </button>
</template>

    </div>
  </template>
</div>

<script>
  function languageSwitcher() {
    return {
      isOpen: false,
      flags: [
        { code: 'ar', name: 'اللغة العربية', flag: 'https://flagcdn.com/w40/ma.png' },
        { code: 'en', name: 'English', flag: 'https://flagcdn.com/w40/gb.png' },
      ],
      currentLang: { code: 'ar', name: 'اللغة العربية', flag: 'https://flagcdn.com/w40/ma.png' },
      init() {
        // Initialize currentLang from a global locale var or blade-provided value
        // For example, pass locale from controller as window.currentLocale
        let locale = "{{ app()->getLocale() }}";
        let found = this.flags.find(f => f.code === locale);
        if (found) this.currentLang = found;
      },
      toggle() {
        this.isOpen = !this.isOpen;
      },
      changeLanguage(code) {
        // Change language by redirecting to your Laravel lang switch route
      window.location.href = "/lang/" + code;

      }
    }
  }
</script>
