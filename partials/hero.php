<!-- Hero Section -->
<section id="home" class="relative h-screen w-full overflow-hidden flex items-center justify-center">
    <div class="absolute inset-0 z-0">
        <img src="./bg.jpg" alt="Wedding Background"
            class="w-full h-full object-cover object-[center_20%] opacity-90 scale-110 transition-transform duration-[2s] ease-linear"
            id="hero-bg">
        <div class="absolute inset-0 bg-gradient-to-b from-white/[0.0] via-transparent to-pearl"></div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute top-1/4 left-10 w-32 h-32 border border-white/40 rounded-full animate-float hidden lg:block">
    </div>
    <div class="absolute bottom-1/4 right-10 w-48 h-48 border border-ocean-200/50 rounded-full animate-float hidden lg:block"
        style="animation-delay: 2s;"></div>

    <div class="hero-content">
                <p class="font-serif font-bold animate-fade-in-up" id="weddingof" style="animation-delay: 0.8s;">THE WEDDING OF</p>
        <h1 class="wedding-font animate-fade-in-up" style="animation-delay: 0.8s;">Marvin & Cherry</h1>
        <p class="font-serif font-bold animate-fade-in-up" style="animation-delay: 0.8s;" id="marrydate">MAY 9 <sup> th </sup> 2026
        </p>
    </div>


    <!-- Scroll Indicator -->
    <div class="absolute bottom-5  transform -translate-x-1/2 animate-bounce text-ocean-800 text-center">
        <span><?= $scriptName == "uploader.php" ? 'scroll down to upload' : '' ?></span> <br>
        <i class="fas fa-chevron-down text-xl"></i>
    </div>
</section>