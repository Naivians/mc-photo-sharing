<!-- Hero Section -->
<section id="home" class="relative h-screen w-full overflow-hidden flex items-center justify-center">
    <div class="absolute inset-0 z-0">
        <img src="./bg.jpg" alt="Wedding Background"
            class="w-full h-full object-cover object-[center_17%] opacity-90 scale-110 transition-transform duration-[5s] ease-linear"
            id="hero-bg">
        <div class="absolute inset-0 bg-gradient-to-b from-white/[0.0] via-transparent to-pearl"></div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute top-1/4 left-10 w-32 h-32 border border-white/40 rounded-full animate-float hidden lg:block">
    </div>
    <div class="absolute bottom-1/4 right-10 w-48 h-48 border border-ocean-200/50 rounded-full animate-float hidden lg:block"
        style="animation-delay: 2s;"></div>

    <div class="hero-content">
        <p class="font-serif font-bold animate-fade-in-up" style="animation-delay: 0.8s;">THE WEDDING OF</p>
        <h1 class="font-serif animate-fade-in-up" style="animation-delay: 0.8s;">Marvin & Cherry</h1>
        <p class="font-serif font-bold animate-fade-in-up" style="animation-delay: 0.8s;">MAY 9 <sup> th </sup> 2026 </p>
    </div>

    <!-- Content -->
    <!-- <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <p class="text-ocean-800 uppercase tracking-[0.3em] text-sm mb-4 animate-fade-in-up"
            style="animation-delay: 0.5s;">We are getting married</p>
        <h1 class="text-6xl md:text-8xl lg:text-9xl wedding-font  mb-6 animate-fade-in-up"
            style="animation-delay: 0.7s;">
            Marvin <span class="text-4xl md:text-6xl italic">&</span> Cherry
        </h1>
        <div class="flex justify-center items-center space-x-4 mb-8 animate-fade-in-up" style="animation-delay: 0.9s;">
            <div class="h-px w-12 bg-ocean-400"></div>
            <p class="text-ocean-900 font-serif italic text-xl">May 9th, 2026</p>
            <div class="h-px w-12 bg-ocean-400"></div>
        </div>
        <p class="text-ocean-800 max-w-lg mx-auto leading-relaxed animate-fade-in-up" style="animation-delay: 1.1s;">
            As we join our lives together in marriage, we would be honored to have you witness our vows and share in
            the joy of our new beginning. Please join us for a celebration of love, laughter, and happily ever
            after.
        </p>

        <div class="mt-12 animate-fade-in-up" style="animation-delay: 1.3s;">
            <a href="#party"
                class="group relative inline-flex items-center justify-center px-8 py-3 overflow-hidden font-medium tracking-tighter text-white bg-ocean-800 rounded-full group">
                <span
                    class="absolute w-0 h-0 transition-all duration-500 ease-out bg-ocean-600 rounded-full group-hover:w-56 group-hover:h-56"></span>
                <span
                    class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-700"></span>
                <span class="relative">View Details</span>
            </a>
        </div>
    </div> -->

    <!-- Scroll Indicator -->
    <div class="absolute bottom-20  transform -translate-x-1/2 animate-bounce text-ocean-800 text-center">
    <span ><?= $scriptName == "uploader.php" ? 'scroll down to upload' : ''?></span> <br> 
    <i class="fas fa-chevron-down text-xl"></i>
    </div>
</section>