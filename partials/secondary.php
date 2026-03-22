    <section id="party" class="py-24 px-6 lg:px-20 bg-pearl relative">

        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20 " data-aos="fade-up">
                <span class="text-ocean-500 uppercase tracking-widest text-xs font-bold">The Wedding Party</span>
                <h2 class="text-5xl md:text-6xl font-serif text-ocean-900 mt-2 mb-6">Best Man & Maid of Honor</h2>
                <div class="w-24 h-1 bg-ocean-200 mx-auto"></div>
            </div>

            <div class="relative min-h-[700px] max-w-5xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center justify-items-center">
                    <div class="group relative overflow-hidden rounded-2xl cursor-pointer reveal w-full max-w-sm"
                        data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="aspect-[4/5] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=800&q=80"
                                alt="Maid of Honor"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-ocean-900/95 to-transparent">
                            <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Best Man</p>
                            <h3 class="text-white text-3xl font-serif">Erwin Madera</h3>
                        </div>
                    </div>

                    <div class="group relative overflow-hidden rounded-2xl cursor-pointer reveal w-full max-w-sm"
                        data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="aspect-[4/5] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80"
                                alt="Best Man"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-ocean-900/95 to-transparent">
                            <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Maid of Honor</p>
                            <h3 class="text-white text-3xl font-serif">Beamay Nonoy</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mb-16" id="enttourage-toggle" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <div class="bg-white p-1 rounded-full shadow-lg border border-ocean-100 inline-flex">
                    <button id="btn-bridesmaids"
                        class="px-8 py-3 rounded-full text-sm uppercase tracking-widest transition-all duration-300 bg-ocean-800 text-white shadow-md">
                        Bridesmaids
                    </button>
                    <button id="btn-groomsmen"
                        class="px-8 py-3 rounded-full text-sm uppercase tracking-widest transition-all duration-300 text-ocean-600 hover:text-ocean-900">
                        Groomsmen
                    </button>
                </div>
            </div>

            <div class="text-center mb-20" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <h2 class="text-5xl md:text-6xl font-serif text-ocean-900 mt-2 mb-6">Bridesmaids & Groomsmen</h2>
                <div class="w-24 h-1 bg-ocean-200 mx-auto"></div>
            </div>

            <div class="relative min-h-[500px] md:min-h-[550px] lg:min-h-[600px]">

                <div id="grid-bridesmaids" class="transition-all duration-500 opacity-100 absolute w-full top-0 left-0"
                    data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl md:text-3xl font-serif text-ocean-800 italic">Bride's Entourage</h3>
                        <div class="w-16 h-0.5 bg-ocean-300 mx-auto mt-2"></div>
                    </div>

                    <div class="relative  md:px-16">
                        <button onclick="scrollBridesmaids(-1)"
                            class="absolute left-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/80 hover:bg-white shadow-lg flex items-center justify-center text-ocean-800 transition-all hover:scale-110">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button onclick="scrollBridesmaids(1)"
                            class="absolute right-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/80 hover:bg-white shadow-lg flex items-center justify-center text-ocean-800 transition-all hover:scale-110">
                            <i class="fas fa-chevron-right"></i>
                        </button>

                        <!-- Carousel Track -->
                        <div id="bridesmaids-track"
                            class="flex gap-4 md:gap-6 overflow-x-auto snap-x snap-mandatory scrollbar-hide scroll-smooth pb-4"
                            style="scrollbar-width: none; -ms-overflow-style: none;">

                            <!-- Maid of Honor -->
                            <div
                                class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center reveal">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80"
                                        alt="Maid of Honor"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Maid of Honor</p>
                                    <h3 class="text-white text-2xl font-serif">Sarah Jenkins</h3>
                                </div>
                            </div>

                            <!-- Bridesmaid 2 -->
                            <div class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center reveal"
                                style="transition-delay: 50ms;">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=800&q=80"
                                        alt="Bridesmaid"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Bridesmaid</p>
                                    <h3 class="text-white text-2xl font-serif">Emily Rose</h3>
                                </div>
                            </div>

                            <!-- Bridesmaid 3 -->
                            <div class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center reveal"
                                style="transition-delay: 100ms;">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=800&q=80"
                                        alt="Bridesmaid"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Bridesmaid</p>
                                    <h3 class="text-white text-2xl font-serif">Jessica Lee</h3>
                                </div>
                            </div>

                            <!-- Bridesmaid 4 -->
                            <div class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center reveal"
                                style="transition-delay: 150ms;">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?auto=format&fit=crop&w=800&q=80"
                                        alt="Bridesmaid"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Bridesmaid</p>
                                    <h3 class="text-white text-2xl font-serif">Amanda Cole</h3>
                                </div>
                            </div>

                            <!-- Bridesmaid 5 -->
                            <div class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center reveal"
                                style="transition-delay: 200ms;">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=800&q=80"
                                        alt="Bridesmaid"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Bridesmaid</p>
                                    <h3 class="text-white text-2xl font-serif">Sophia Chen</h3>
                                </div>
                            </div>

                            <!-- Bridesmaid 6 -->
                            <div class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center reveal"
                                style="transition-delay: 250ms;">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?auto=format&fit=crop&w=800&q=80"
                                        alt="Bridesmaid"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Bridesmaid</p>
                                    <h3 class="text-white text-2xl font-serif">Olivia Martinez</h3>
                                </div>
                            </div>

                            <!-- Bridesmaid 7 -->
                            <div class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center reveal"
                                style="transition-delay: 300ms;">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?auto=format&fit=crop&w=800&q=80"
                                        alt="Bridesmaid"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Bridesmaid</p>
                                    <h3 class="text-white text-2xl font-serif">Isabella Thompson</h3>
                                </div>
                            </div>

                            <!-- Bridesmaid 8 -->
                            <div class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center reveal"
                                style="transition-delay: 350ms;">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?auto=format&fit=crop&w=800&q=80"
                                        alt="Bridesmaid"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Bridesmaid</p>
                                    <h3 class="text-white text-2xl font-serif">Mia Anderson</h3>
                                </div>
                            </div>

                            <!-- Bridesmaid 9 -->
                            <div class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center reveal"
                                style="transition-delay: 400ms;">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=800&q=80"
                                        alt="Bridesmaid"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Bridesmaid</p>
                                    <h3 class="text-white text-2xl font-serif">Charlotte Wilson</h3>
                                </div>
                            </div>

                            <!-- Bridesmaid 10 -->
                            <div class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center reveal"
                                style="transition-delay: 450ms;">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1485893086445-ed75865251e0?auto=format&fit=crop&w=800&q=80"
                                        alt="Bridesmaid"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Bridesmaid</p>
                                    <h3 class="text-white text-2xl font-serif">Ava Brown</h3>
                                </div>
                            </div>

                            <!-- Bridesmaid 11 -->
                            <div class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center reveal"
                                style="transition-delay: 500ms;">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1509967419530-da38b4704bc6?auto=format&fit=crop&w=800&q=80"
                                        alt="Bridesmaid"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Bridesmaid</p>
                                    <h3 class="text-white text-2xl font-serif">Lily Davis</h3>
                                </div>
                            </div>

                        </div>

                        <!-- Dots Indicator -->
                        <div class="flex justify-center gap-2 mt-4" id="bridesmaids-dots">
                            <!-- Dots generated by JS -->
                        </div>
                    </div>
                </div>

                <div id="grid-groomsmen"
                    class="transition-all duration-500 opacity-0 pointer-events-none absolute w-full top-0 left-0">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl md:text-3xl font-serif text-ocean-800 italic">Groom's Entourage</h3>
                        <div class="w-16 h-0.5 bg-ocean-300 mx-auto mt-2"></div>
                    </div>

                    <!-- Carousel Container -->
                    <div class="relative md:px-16">
                        <!-- Navigation Buttons -->
                        <button onclick="scrollGroomsmen(-1)"
                            class="absolute left-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/80 hover:bg-white shadow-lg flex items-center justify-center text-ocean-800 transition-all hover:scale-110">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button onclick="scrollGroomsmen(1)"
                            class="absolute right-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/80 hover:bg-white shadow-lg flex items-center justify-center text-ocean-800 transition-all hover:scale-110">
                            <i class="fas fa-chevron-right"></i>
                        </button>

                        <!-- Carousel Track -->
                        <div id="groomsmen-track"
                            class="flex gap-4 md:gap-6 overflow-x-auto snap-x snap-mandatory scrollbar-hide scroll-smooth pb-4"
                            style="scrollbar-width: none; -ms-overflow-style: none;">

                            <!-- Best Man -->
                            <div
                                class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=800&q=80"
                                        alt="Best Man"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Best Man</p>
                                    <h3 class="text-white text-2xl font-serif">Michael Ross</h3>
                                </div>
                            </div>

                            <!-- Groomsman 2 -->
                            <div
                                class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=80"
                                        alt="Groomsman"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Groomsman</p>
                                    <h3 class="text-white text-2xl font-serif">David Kim</h3>
                                </div>
                            </div>

                            <!-- Groomsman 3 -->
                            <div
                                class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=800&q=80"
                                        alt="Groomsman"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Groomsman</p>
                                    <h3 class="text-white text-2xl font-serif">Chris Evans</h3>
                                </div>
                            </div>

                            <!-- Groomsman 4 -->
                            <div
                                class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1504257432389-52343af06ae3?auto=format&fit=crop&w=800&q=80"
                                        alt="Groomsman"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Groomsman</p>
                                    <h3 class="text-white text-2xl font-serif">Ryan Cole</h3>
                                </div>
                            </div>

                            <!-- Groomsman 5 -->
                            <div
                                class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=800&q=80"
                                        alt="Groomsman"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Groomsman</p>
                                    <h3 class="text-white text-2xl font-serif">James Wilson</h3>
                                </div>
                            </div>

                            <!-- Groomsman 6 -->
                            <div
                                class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=80"
                                        alt="Groomsman"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Groomsman</p>
                                    <h3 class="text-white text-2xl font-serif">Daniel Lee</h3>
                                </div>
                            </div>

                            <!-- Groomsman 7 -->
                            <div
                                class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?auto=format&fit=crop&w=800&q=80"
                                        alt="Groomsman"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Groomsman</p>
                                    <h3 class="text-white text-2xl font-serif">Matthew Taylor</h3>
                                </div>
                            </div>

                            <!-- Groomsman 8 -->
                            <div
                                class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?auto=format&fit=crop&w=800&q=80"
                                        alt="Groomsman"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Groomsman</p>
                                    <h3 class="text-white text-2xl font-serif">Andrew Martinez</h3>
                                </div>
                            </div>

                            <!-- Groomsman 9 -->
                            <div
                                class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=800&q=80"
                                        alt="Groomsman"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Groomsman</p>
                                    <h3 class="text-white text-2xl font-serif">Joshua Anderson</h3>
                                </div>
                            </div>

                            <!-- Groomsman 10 -->
                            <div
                                class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=800&q=80"
                                        alt="Groomsman"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Groomsman</p>
                                    <h3 class="text-white text-2xl font-serif">Brandon Thomas</h3>
                                </div>
                            </div>

                            <!-- Groomsman 11 -->
                            <div
                                class="group relative overflow-hidden rounded-2xl cursor-pointer flex-shrink-0 w-[280px] md:w-[300px] lg:w-[320px] snap-center">
                                <div class="aspect-[3/4] overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1504257432389-52343af06ae3?auto=format&fit=crop&w=800&q=80"
                                        alt="Groomsman"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-ocean-900/90 via-ocean-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <p class="text-ocean-200 text-xs uppercase tracking-widest mb-1">Groomsman</p>
                                    <h3 class="text-white text-2xl font-serif">Kevin Garcia</h3>
                                </div>
                            </div>

                        </div>

                        <div class="flex justify-center gap-2 mt-4" id="groomsmen-dots">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>