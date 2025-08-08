<script src="//unpkg.com/alpinejs" defer></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

@extends('layouts.app') 

@section('content')
<!-- Hero Section -->
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-8 items-center">
        <!-- Left Text -->
        <div>
            <h1 style="font-size: 50px" class="text-gray-700 font-bold text-2xl md:text-3xl leading-tight mb-4">
                Master Your <span class="!text-[#7a3189]">Operations</span>
            </h1>
            <p class="text-lg text-gray-600 mb-6">
                Centralize order tracking, task assignment, and expense monitoring in real-time 
                for efficient business operations.
            </p>
            <div class="flex gap-4">
                <a href="#features" class="bg-[#7a3189] text-white px-6 py-3 rounded-full font-semibold hover:bg-indigo-700 transition">
                    Get Started
                </a>
                <a href="#learn-more" class="border border-gray-300 text-gray-800 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                    Learn More
                </a>
            </div>
        </div>

        <!-- Right Image -->
        <div>
            <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786" 
                 alt="Operations Dashboard" 
                 class="rounded-xl shadow-lg w-full">
        </div>
    </div>
</section>

<!-- Trusted By Section -->
<section class="bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-gray-500 uppercase tracking-wide text-sm mb-6">Trusted by Leading Brands</p>
        <div class="flex flex-wrap justify-center items-center gap-8">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Y_Combinator_logo.svg" class="h-8" alt="Y Combinator">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/HubSpot_Logo.svg" class="h-8" alt="HubSpot">
            <img src="https://dummyimage.com/100x40/cccccc/000.png&text=Nexus" class="h-8" alt="Nexus">
            <img src="https://dummyimage.com/100x40/cccccc/000.png&text=Hustle+Fund" class="h-8" alt="Hustle Fund">
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center mb-12">Streamline, Track, and Grow Your Business</h2>

        <div class="flex flex-col sm:flex-row  gap-8">
            <!-- Feature Card -->
            <div class="p-6 border rounded-lg hover:shadow-lg transition">
                <div class="text-indigo-600 text-3xl mb-4">
                    <i class="fas fa-box"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Track Orders in Real Time</h3>
                <p class="text-gray-600">
                    Always know the status of every order — from placement to delivery — with instant updates.
                </p>
            </div>

            <div class="p-6 border rounded-lg hover:shadow-lg transition">
                <div class="text-indigo-600 text-3xl mb-4">
                    <i class="fas fa-tasks"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Assign and Manage Tasks Effortlessly</h3>
                <p class="text-gray-600">
                    Keep your team on track by assigning tasks, setting deadlines, and monitoring progress in one place.
                </p>
            </div>
            
            <div class="p-6 border rounded-lg hover:shadow-lg transition">
                <div class="text-indigo-600 text-3xl mb-4">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Monitor Expenses and Budgets</h3>
                <p class="text-gray-600">
                    Gain full visibility into spending and keep your finances under control.
                </p>
            </div>
        </div>
    </div>

<section class="bg-white py-12 text-center">
    <h2 class="text-2xl font-bold mb-2">LLC or C-Corp?</h2>
    <p class="text-gray-600 mb-6">We’ll Help You Decide.</p>

    <!-- Selector -->
    <div class="flex justify-center gap-8 mb-10">
        <button class="flex flex-col items-center text-indigo-600 font-medium">
            <span class="text-lg">LLC</span>
            <div class="w-8 h-1 bg-indigo-600 mt-1 rounded-full"></div>
        </button>
        <button class="flex flex-col items-center text-gray-500 hover:text-indigo-600 transition">
            <span class="text-lg">C-Corp</span>
        </button>
    </div>
</section>

<!-- LLC Info Section -->
<section class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-8 items-center">
        <!-- Left: Image with Caption -->
        <div class="relative">
            <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6" 
                 alt="Entrepreneur" 
                 class="rounded-lg shadow-lg">
            <div class="absolute bottom-4 left-4 bg-black/70 text-white text-sm px-3 py-2 rounded">
                Siddharth is an Amazon Seller who started a US LLC from India.
            </div>
        </div>

        <!-- Right: Info -->
        <div>
            <h3 class="text-xl font-semibold mb-4">Limited Liability Companies (LLC)</h3>
            <p class="text-gray-600 mb-4">
                A Limited Liability Company (LLC) is a flexible business structure in the U.S. 
                that blends elements of partnerships and corporations. It’s popular among small businesses 
                for its simplicity and tax flexibility.
            </p>
            <ul class="space-y-3 text-gray-700">
                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Limited liability protection for owners.</li>
                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Simple management structure and easy to operate.</li>
                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Unlimited owners (LLCs are unincorporated).</li>
                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> LLCs don’t issue stock.</li>
                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Ownership represented by members.</li>
            </ul>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<div class="bg-purple-100 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 !lg:px-8 grid md:!grid-cols-2 gap-8 items-center">
        <!-- Left Text -->
        <div>
            <h3 class="text-2xl font-bold mb-4">What If Today Was The Day?</h3>
            <p class="text-gray-700 mb-6">
                Formation in minutes. If you’re ready to get started, we’ll get you going!
            </p>
            <a href="#start" class="bg-black text-white px-6 py-3 rounded-full font-semibold hover:bg-gray-800 transition">
                Start Filing
            </a>
        </div>

        <!-- Right Pricing Card -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h4 class="font-bold text-lg mb-2">Starter</h4>
            <p class="text-sm text-gray-600 mb-4">
                Formation + Registered Agent. 1 year of Registered Agent service is included 
                to receive important government and tax documents for your business.
            </p>
            <div class="text-2xl font-bold mb-4">$297<span class="text-base font-normal">/yr</span></div>
            <a href="#choose-plan" class="block text-center bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                Choose Plan
            </a>
        </div>
    </div>
</div>
</section>
@endsection
