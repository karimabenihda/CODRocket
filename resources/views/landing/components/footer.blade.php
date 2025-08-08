<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

<footer class="px-12 max-w-[1340px] mx-auto py-12 sm:px-10 lg:px-20">
    <hr class="mb-6">

    <!-- Main Footer Grid -->
    <div class="grid !grid-cols-1 lg:!grid-cols-4 !gap-8 items-start lg:items-center pb-6">

        <!-- Logo + Description -->
        <div class="space-y-4">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-32">
            <p class="text-gray-800 text-sm leading-relaxed">
                {{ __('translation.footer.title') }}
            </p>
        </div>
      

        <!-- Solutions -->
        <div>
            <h4 class="font-semibold mb-4">{{ __('translation.footer.solutions.titre') }}</h4>
            <ul class="space-y-2 text-sm text-gray-600 font-medium">
                <li>{{ __('translation.footer.solutions.lien1') }}</li>
                <li>{{ __('translation.footer.solutions.lien2') }}</li>
                <li>{{ __('translation.footer.solutions.lien3') }}</li>
                <li>{{ __('translation.footer.solutions.lien4') }}</li>
            </ul>
        </div>

        <!-- Informations -->
        <div>
            <h4 class="font-semibold mb-4">{{ __('translation.footer.informations.titre') }}</h4>
            <ul class="space-y-2 text-sm text-gray-600 font-medium">
                <li><a href="{{ url('/pricing') }}">{{ __('translation.footer.informations.lien1') }}</a> </li>
                <li>{{ __('translation.footer.informations.lien2') }}</li>
                <li>{{ __('translation.footer.informations.lien3') }}</li>
                <li>{{ __('translation.footer.informations.lien4') }}</li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h4 class="font-semibold mb-4">{{ __('translation.footer.contact.titre') }}</h4>
            <ul class="space-y-2 text-sm text-gray-600 font-medium">
                <li><a href="{{ url('/help_center') }}">{{ __('translation.footer.contact.lien1') }}</a></li>
                <li><a href="{{ url('/contact') }}">{{ __('translation.footer.contact.lien2') }}</a></li>
                <li><a href="https://wa.me/212656588699" target="_blank">{{ __('translation.footer.contact.lien3') }}</a></li>
                <li><a href="mailto:support@codrocket.com">{{ __('translation.footer.contact.lien4') }}</a></li>
            </ul>
        </div>

    </div>

    <hr class="my-6">

    <!-- Footer Bottom -->
    <div class="flex flex-col lg:flex-row justify-between items-center gap-4 text-sm text-gray-400 pt-6">
       <p class="flex items-center gap-2 text-[#000000]">
    Designed & Developed by
    <a href="https://technopek.ma/" class="font-semibold !flex items-center">
        <img src="https://technopek.ma/wp-content/uploads/2023/01/logo-07.svg" alt="Technopek" class="h-6 pb-1" />
    </a>
</p>

        <p class="text-[#000000]">©Cod Rocket 2025</p>
        <p class="text-[#000000]">{{ __('translation.footer.rights') }}</p>
        <div class="flex gap-4 text-gray-600 font-medium">
            <a href="https://facebook.com/CODRocket">
                <i class="fab fa-facebook-f w-5 h-5 text-[#7a3189]"></i>
            </a>
            <a href="https://instagram.com/codrocket1" >
                <i class="fab fa-instagram w-5 h-5 text-[#7a3189]"></i>
            </a>
            <a href="https://www.youtube.com/@codrocket">
                <i class="fab fa-youtube w-5 h-5 text-[#7a3189]"></i>
            </a>
            <a href="mailto:Support@codrocket.com">
                <i class="fas fa-envelope w-5 h-5 text-[#7a3189]"></i>
            </a>
        </div>
    </div>
</footer>
