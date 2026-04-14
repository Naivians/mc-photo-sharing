

<section id="party" class="py-24 px-6 lg:px-20 bg-ocean-50 relative">


    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20 " data-aos="fade-up">
            <span class="text-ocean-500 uppercase tracking-widest text-xs font-bold">The Wedding Party</span>
            <h2 class="text-5xl md:text-6xl font-serif text-ocean-900 mt-2 mb-6">Best Man & Maid of Honor</h2>
            <div class="w-24 h-1 bg-ocean-200 mx-auto"></div>
        </div>

        <div class="relative min-h-[600px] max-w-5xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center justify-items-center">
                <div class="group relative overflow-hidden rounded-2xl cursor-pointer w-full max-w-sm"
                    data-aos="fade-up">
                    <div class="aspect-[4/5] overflow-hidden">
                        <img src="./assets/img/grooms/Erwin.png" alt="Maid of Honor"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-ocean-900/95 to-transparent">
                        <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Best Man</p>
                        <h3 class="text-white text-3xl font-serif">Erwin Madera</h3>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl cursor-pointer w-full max-w-sm"
                    data-aos="fade-up">
                    <div class="aspect-[4/5] overflow-hidden">
                        <img src="./assets/img/bridesmaid/beamay.png" alt="Best Man"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-ocean-900/95 to-transparent">
                        <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Maid of Honor</p>
                        <h3 class="text-white text-3xl font-serif">Beamay Nonoy</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center my-12" data-aos="fade-up">
            <h2 class="text-5xl md:text-6xl font-serif text-ocean-900 mt-2 mb-6">Bridesmaids & Groomsmen</h2>
            <div class="w-24 h-1 bg-ocean-200 mx-auto"></div>
        </div>

        <div class="relative min-h-[500px] md:min-h-[550px] lg:min-h-[600px] mt-12">
            <div id="grid-bridesmaids" class="transition-all duration-500 opacity-100 absolute w-full top-0 left-0"
                data-aos="fade-up">
                <div class="text-center mb-8">
                    <h3 class="text-2xl md:text-3xl font-serif text-ocean-800 italic">Bride's Entourage</h3>
                    <div class="w-16 h-0.5 bg-ocean-300 mx-auto mt-2"></div>
                </div>

                <div class="relative md:px-16">
                    <button onclick="scrollBridesmaids(-1)"
                        class="absolute left-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/80 hover:bg-white shadow-lg flex items-center justify-center text-ocean-800 transition-all hover:scale-110">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button onclick="scrollBridesmaids(1)"
                        class="absolute right-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/80 hover:bg-white shadow-lg flex items-center justify-center text-ocean-800 transition-all hover:scale-110">
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <div id="bridesmaids-track" class="scrollbar-hide flex gap-4 md:gap-6 overflow-x-auto snap-x snap-mandatory scrollbar-hide scroll-smooth pb-4">

                    </div>

                    <div class="flex justify-center gap-2 mt-4" id="bridesmaids-dots">
                    </div>
                </div>
            </div>
        </div>

        <div class="relative min-h-[500px] md:min-h-[550px] lg:min-h-[600px] mt-12">

            <div id="grid-groomsmen" aos="fade-up"
                class="transition-all duration-500 opacity-0 pointer-events-none absolute w-full top-0 left-0">
                <div class="text-center mb-8">
                    <h3 class="text-2xl md:text-3xl font-serif text-ocean-800 italic">Groom's Entourage</h3>
                    <div class="w-16 h-0.5 bg-ocean-300 mx-auto mt-2"></div>
                </div>

                <div class="relative md:px-16">
                    <button onclick="scrollGroomsmen(-1)"
                        class="absolute left-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/80 hover:bg-white shadow-lg flex items-center justify-center text-ocean-800 transition-all hover:scale-110">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button onclick="scrollGroomsmen(1)"
                        class="absolute right-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/80 hover:bg-white shadow-lg flex items-center justify-center text-ocean-800 transition-all hover:scale-110">
                        <i class="fas fa-chevron-right"></i>
                    </button>


                    <div id="groomsmen-track"
                        class="flex gap-4 md:gap-6 overflow-x-auto snap-x snap-mandatory scrollbar-hide scroll-smooth pb-4"
                        style="scrollbar-width: none; -ms-overflow-style: none;">
                    </div>

                    <div class="flex justify-center gap-2 mt-4" id="groomsmen-dots">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>