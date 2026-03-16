<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php include "./partials/headers.php"; ?>
<!--  -->

<body
    class="bg-pearl text-ocean-900 font-sans antialiased overflow-x-hidden selection:bg-ocean-200 selection:text-ocean-900">

    <?php include "./partials/loader.php"; ?>

    <?php include "./partials/nav.php"; ?>
    <?php include "./partials/hero.php"; ?>
    <?php include "./partials/timeline.php"; ?>



    <section class="py-24 px-6 lg:px-20 bg-white relative" id="clock-section">
        <center>
            <img src="./assets/img/clock.gif" alt="" width="200px" height="auto" data-aos="fade-up" data-aos-delay="25"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
        </center>
        <div class="countdown text-center" data-aos="fade-up" data-aos-delay="25" data-aos-duration="1000"
            data-aos-easing="ease-in-out">
            <div class="time-box">
                <div id="days" class="number text-ocean-950 font-serif">00</div>
                <div class="label text-ocean-950">Days</div>
            </div>

            <div class="time-box">
                <div id="hours" class="number text-ocean-950 font-serif">00</div>
                <div class="label text-ocean-950">Hours</div>
            </div>

            <div class="time-box">
                <div id="minutes" class="number text-ocean-950 font-serif">00</div>
                <div class="label text-ocean-950">Minutes</div>
            </div>

            <div class="time-box">
                <div id="seconds" class="number text-ocean-950 font-serif">00</div>
                <center>
                    <div class="label text-ocean-950">Seconds</div>
                </center>
            </div>
        </div>

        <p class="wedding-font text-center" data-aos="fade-up" data-aos-delay="25" data-aos-duration="1000"
            data-aos-easing="ease-in-out">Before we say I do</p>
    </section>


    <!-- The Wedding Party Section -->
    <section id="party" class="py-24 px-6 lg:px-20 bg-pearl relative">

        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-20 " data-aos="fade-up">
                <span class="text-ocean-500 uppercase tracking-widest text-xs font-bold">The Wedding Party</span>
                <h2 class="text-5xl md:text-6xl font-serif text-ocean-900 mt-2 mb-6">Best Man & Maid of Honor</h2>
                <div class="w-24 h-1 bg-ocean-200 mx-auto"></div>
            </div>

            <!-- Grid Container -->
            <div class="relative min-h-[700px] max-w-5xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center justify-items-center">
                    <!-- Maid of Honor -->
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

                    <!-- Maid of Honor -->
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

            <!-- Toggle Switch -->
            <div class="flex justify-center mb-16" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000"
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

            <!-- Grid Container -->
            <div class="relative min-h-[500px] md:min-h-[550px] lg:min-h-[600px]">

                <!-- Bridesmaids Carousel -->
                <div id="grid-bridesmaids" class="transition-all duration-500 opacity-100 absolute w-full top-0 left-0"
                    data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl md:text-3xl font-serif text-ocean-800 italic">Bride's Entourage</h3>
                        <div class="w-16 h-0.5 bg-ocean-300 mx-auto mt-2"></div>
                    </div>

                    <!-- Carousel Container -->
                    <div class="relative px-12 md:px-16">
                        <!-- Navigation Buttons -->
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

                <!-- Groomsmen Carousel (Hidden by default) -->
                <div id="grid-groomsmen"
                    class="transition-all duration-500 opacity-0 pointer-events-none absolute w-full top-0 left-0">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl md:text-3xl font-serif text-ocean-800 italic">Groom's Entourage</h3>
                        <div class="w-16 h-0.5 bg-ocean-300 mx-auto mt-2"></div>
                    </div>

                    <!-- Carousel Container -->
                    <div class="relative px-12 md:px-16">
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

    <!-- Principal Sponsors Section -->
    <section id="sponsors" class="py-24 bg-ocean-50 relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div
                class="absolute -top-20 -right-20 w-96 h-96 bg-ocean-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70">
            </div>
            <div
                class="absolute top-40 -left-20 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-3xl opacity-70">
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16 reveal">
                <span class="text-ocean-500 uppercase tracking-widest text-xs font-bold">Honored Guests</span>
                <h2 class="text-5xl md:text-6xl font-serif text-ocean-900 mt-2 mb-6">Principal Sponsors</h2>
                <p class="text-ocean-700 max-w-2xl mx-auto font-light">
                    We are deeply grateful to our Ninongs and Ninangs for their guidance, wisdom, and support as we
                    embark on this new journey together.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-12">
                <!-- Ninongs Column -->
                <div class="reveal">
                    <h3 class="text-2xl font-serif text-ocean-800 mb-8 text-center border-b border-ocean-200 pb-4">
                        Ninongs</h3>
                    <ul class="space-y-6 text-center">
                        <li class="group cursor-default">
                            <span
                                class="block text-xl text-ocean-900 font-medium group-hover:text-ocean-600 transition-colors">Mr.
                                Robert Williams</span>
                            <span class="text-sm text-ocean-500 uppercase tracking-wider">Family Friend</span>
                        </li>
                        <li class="group cursor-default">
                            <span
                                class="block text-xl text-ocean-900 font-medium group-hover:text-ocean-600 transition-colors">Dr.
                                James Anderson</span>
                            <span class="text-sm text-ocean-500 uppercase tracking-wider">Uncle of the Groom</span>
                        </li>
                        <li class="group cursor-default">
                            <span
                                class="block text-xl text-ocean-900 font-medium group-hover:text-ocean-600 transition-colors">Engr.
                                Richard Martinez</span>
                            <span class="text-sm text-ocean-500 uppercase tracking-wider">Godfather of the Bride</span>
                        </li>
                        <li class="group cursor-default">
                            <span
                                class="block text-xl text-ocean-900 font-medium group-hover:text-ocean-600 transition-colors">Atty.
                                Michael Chen</span>
                            <span class="text-sm text-ocean-500 uppercase tracking-wider">Family Friend</span>
                        </li>
                    </ul>
                </div>

                <!-- Ninangs Column -->
                <div class="reveal" style="transition-delay: 200ms;">
                    <h3 class="text-2xl font-serif text-ocean-800 mb-8 text-center border-b border-ocean-200 pb-4">
                        Ninangs</h3>
                    <ul class="space-y-6 text-center">
                        <li class="group cursor-default">
                            <span
                                class="block text-xl text-ocean-900 font-medium group-hover:text-ocean-600 transition-colors">Mrs.
                                Elizabeth Williams</span>
                            <span class="text-sm text-ocean-500 uppercase tracking-wider">Family Friend</span>
                        </li>
                        <li class="group cursor-default">
                            <span
                                class="block text-xl text-ocean-900 font-medium group-hover:text-ocean-600 transition-colors">Dra.
                                Susan Anderson</span>
                            <span class="text-sm text-ocean-500 uppercase tracking-wider">Aunt of the Groom</span>
                        </li>
                        <li class="group cursor-default">
                            <span
                                class="block text-xl text-ocean-900 font-medium group-hover:text-ocean-600 transition-colors">Mrs.
                                Maria Santos</span>
                            <span class="text-sm text-ocean-500 uppercase tracking-wider">Godmother of the Bride</span>
                        </li>
                        <li class="group cursor-default">
                            <span
                                class="block text-xl text-ocean-900 font-medium group-hover:text-ocean-600 transition-colors">Mrs.
                                Linda Chen</span>
                            <span class="text-sm text-ocean-500 uppercase tracking-wider">Family Friend</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- RSVP Section -->
    <section id="rsvp" class="py-24 px-6 relative bg-ocean-900 text-white overflow-hidden">
        <!-- Abstract Shapes -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-20">
            <div class="absolute top-10 left-10 w-64 h-64 border-[40px] border-white rounded-full"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 border-[60px] border-white rounded-full"></div>
        </div>

        <div class="max-w-3xl mx-auto relative z-10">
            <div class="text-center mb-12 reveal">
                <h2 class="text-5xl md:text-6xl font-serif mb-4">Join Us</h2>
                <p class="text-ocean-200 font-light">Please respond by May 1st, 2026</p>
            </div>

            <form id="rsvp-form" class="glass-dark p-8 md:p-12 rounded-3xl shadow-2xl reveal">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div class="relative">
                        <input type="text" id="name" required
                            class="peer w-full bg-transparent border-b border-ocean-400 py-2 text-white placeholder-transparent focus:outline-none focus:border-white transition-colors"
                            placeholder="Name">
                        <label for="name"
                            class="absolute left-0 -top-3.5 text-ocean-300 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-ocean-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-white peer-focus:text-sm">Full
                            Name</label>
                    </div>
                    <div class="relative">
                        <input type="email" id="email" required
                            class="peer w-full bg-transparent border-b border-ocean-400 py-2 text-white placeholder-transparent focus:outline-none focus:border-white transition-colors"
                            placeholder="Email">
                        <label for="email"
                            class="absolute left-0 -top-3.5 text-ocean-300 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-ocean-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-white peer-focus:text-sm">Email
                            Address</label>
                    </div>
                </div>

                <div class="mb-8">
                    <label class="block text-ocean-300 text-sm mb-3">Will you be attending?</label>
                    <div class="flex space-x-6">
                        <label class="flex items-center cursor-pointer group">
                            <input type="radio" name="attendance" value="yes" class="hidden peer" checked>
                            <div
                                class="w-5 h-5 border-2 border-ocean-400 rounded-full flex items-center justify-center peer-checked:border-white peer-checked:bg-white transition-all">
                                <div class="w-2 h-2 bg-ocean-900 rounded-full opacity-0 peer-checked:opacity-100"></div>
                            </div>
                            <span class="ml-2 text-ocean-200 group-hover:text-white transition-colors">Joyfully
                                Accept</span>
                        </label>
                        <label class="flex items-center cursor-pointer group">
                            <input type="radio" name="attendance" value="no" class="hidden peer">
                            <div
                                class="w-5 h-5 border-2 border-ocean-400 rounded-full flex items-center justify-center peer-checked:border-white peer-checked:bg-white transition-all">
                                <div class="w-2 h-2 bg-ocean-900 rounded-full opacity-0 peer-checked:opacity-100"></div>
                            </div>
                            <span class="ml-2 text-ocean-200 group-hover:text-white transition-colors">Regretfully
                                Decline</span>
                        </label>
                    </div>
                </div>

                <div class="mb-8 relative">
                    <input type="number" id="guests" min="1" max="5"
                        class="peer w-full bg-transparent border-b border-ocean-400 py-2 text-white placeholder-transparent focus:outline-none focus:border-white transition-colors"
                        placeholder="Number of Guests">
                    <label for="guests"
                        class="absolute left-0 -top-3.5 text-ocean-300 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-ocean-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-white peer-focus:text-sm">Number
                        of Guests (including yourself)</label>
                </div>

                <div class="mb-8 relative">
                    <textarea id="message" rows="3"
                        class="peer w-full bg-transparent border-b border-ocean-400 py-2 text-white placeholder-transparent focus:outline-none focus:border-white transition-colors resize-none"
                        placeholder="Dietary Restrictions"></textarea>
                    <label for="message"
                        class="absolute left-0 -top-3.5 text-ocean-300 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-ocean-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-white peer-focus:text-sm">Dietary
                        Restrictions / Message</label>
                </div>

                <button type="submit"
                    class="w-full bg-white text-ocean-900 font-bold py-4 rounded-full hover:bg-ocean-100 transform hover:scale-[1.02] transition-all duration-300 shadow-lg flex justify-center items-center group">
                    <span>Send RSVP</span>
                    <i class="fas fa-paper-plane ml-2 group-hover:translate-x-1 transition-transform"></i>
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-ocean-950 text-ocean-400 py-12 text-center">
        <div class="font-serif text-3xl text-white mb-4">E & J</div>
        <p class="text-sm uppercase tracking-widest mb-8">June 15th, 2026 • Santorini, Greece</p>
        <div class="flex justify-center space-x-6 mb-8">
            <a href="#" class="hover:text-white transition-colors"><i class="fab fa-instagram text-xl"></i></a>
            <a href="#" class="hover:text-white transition-colors"><i class="fab fa-pinterest text-xl"></i></a>
            <a href="#" class="hover:text-white transition-colors"><i class="fas fa-envelope text-xl"></i></a>
        </div>
        <p class="text-xs opacity-50">&copy; 2026 Elena & Julian. Designed with love.</p>
    </footer>

    <!-- Success Modal -->
    <div id="success-modal" class="fixed inset-0 z-[100] hidden flex items-center justify-center px-4">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" id="modal-backdrop"></div>
        <div class="bg-white rounded-2xl p-8 max-w-md w-full relative z-10 transform scale-90 opacity-0 transition-all duration-300"
            id="modal-content">
            <div class="text-center">
                <div
                    class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 text-green-500 text-2xl">
                    <i class="fas fa-check"></i>
                </div>
                <h3 class="text-2xl font-serif text-ocean-900 mb-2">Thank You!</h3>
                <p class="text-ocean-600 mb-6">Your RSVP has been received. We can't wait to celebrate with you.</p>
                <button id="close-modal"
                    class="bg-ocean-800 text-white px-6 py-2 rounded-full hover:bg-ocean-700 transition-colors">Close</button>
            </div>
        </div>
    </div>

    <script src="./assets/main.js"></script>

    <script>

        // time line
        const playBtn = document.getElementById("playTimeline")
        const timeline = document.getElementById("timelineContent")
        const items = document.querySelectorAll(".timeline-item")
        const song = document.getElementById("weddingSong")

        playBtn.addEventListener("click", () => {

            song.play().catch(() => { })

            // document.querySelector(".timeline-start").style.display = "none"
            // timeline.style.display = "block"

            setTimeout(() => {
                items.forEach((item, i) => {
                    setTimeout(() => {
                        item.classList.add("show")
                    }, i * 400)
                })
            }, 200)

        })

        const weddingDate = new Date("May 09, 2026 00:00:00").getTime();

        function updateCountdown() {

            const now = new Date().getTime();
            const gap = weddingDate - now;

            const second = 1000;
            const minute = second * 60;
            const hour = minute * 60;
            const day = hour * 24;

            const d = Math.floor(gap / day);
            const h = Math.floor((gap % day) / hour);
            const m = Math.floor((gap % hour) / minute);
            const s = Math.floor((gap % minute) / second);

            document.getElementById("days").innerText = d;
            document.getElementById("hours").innerText = h;
            document.getElementById("minutes").innerText = m;
            document.getElementById("seconds").innerText = s;

        }

        setInterval(updateCountdown, 1000);

        function scrollBridesmaids(direction) {
            const track = document.getElementById('bridesmaids-track');
            const cardWidth = track.querySelector('div').offsetWidth + 24; // card width + gap
            track.scrollBy({ left: direction * cardWidth, behavior: 'smooth' });
            updateDots('bridesmaids');
        }

        function scrollGroomsmen(direction) {
            const track = document.getElementById('groomsmen-track');
            const cardWidth = track.querySelector('div').offsetWidth + 24;
            track.scrollBy({ left: direction * cardWidth, behavior: 'smooth' });
            updateDots('groomsmen');
        }

        // Generate dots
        function generateDots(containerId, trackId) {
            const track = document.getElementById(trackId);
            const container = document.getElementById(containerId);
            const cards = track.querySelectorAll('.snap-center');
            const visibleCards = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
            const dotCount = Math.ceil(cards.length / visibleCards);

            container.innerHTML = '';
            for (let i = 0; i < dotCount; i++) {
                const dot = document.createElement('button');
                dot.className = `w-2 h-2 rounded-full transition-all ${i === 0 ? 'bg-ocean-600 w-6' : 'bg-ocean-300'}`;
                dot.onclick = () => {
                    const cardWidth = track.querySelector('div').offsetWidth + 24;
                    track.scrollTo({ left: i * cardWidth * visibleCards, behavior: 'smooth' });
                };
                container.appendChild(dot);
            }
        }

        // Update dots on scroll
        function updateDots(type) {
            const track = document.getElementById(`${type}-track`);
            const container = document.getElementById(`${type}-dots`);
            const dots = container.querySelectorAll('button');
            const scrollPos = track.scrollLeft;
            const cardWidth = track.querySelector('div').offsetWidth + 24;
            const activeIndex = Math.round(scrollPos / cardWidth);

            dots.forEach((dot, i) => {
                dot.className = `w-2 h-2 rounded-full transition-all ${i === activeIndex ? 'bg-ocean-600 w-6' : 'bg-ocean-300'}`;
            });
        }

        // Initialize dots
        window.addEventListener('load', () => {
            generateDots('bridesmaids-dots', 'bridesmaids-track');
            generateDots('groomsmen-dots', 'groomsmen-track');
        });

        window.addEventListener('resize', () => {
            generateDots('bridesmaids-dots', 'bridesmaids-track');
            generateDots('groomsmen-dots', 'groomsmen-track');
        });

        // Update dots on scroll
        document.getElementById('bridesmaids-track').addEventListener('scroll', () => updateDots('bridesmaids'));
        document.getElementById('groomsmen-track').addEventListener('scroll', () => updateDots('groomsmen'));

        // Tab Switching (Bridesmaids / Groomsmen)
        const btnBridesmaids = document.getElementById('btn-bridesmaids');
        const btnGroomsmen = document.getElementById('btn-groomsmen');
        const gridBridesmaids = document.getElementById('grid-bridesmaids');
        const gridGroomsmen = document.getElementById('grid-groomsmen');

        function switchTab(tab) {

            if (tab === 'bridesmaids') {
                // Style Buttons
                btnBridesmaids.classList.add('bg-ocean-800', 'text-white', 'shadow-md');
                btnBridesmaids.classList.remove('text-ocean-600', 'hover:text-ocean-900');
                btnGroomsmen.classList.remove('bg-ocean-800', 'text-white', 'shadow-md');
                btnGroomsmen.classList.add('text-ocean-600', 'hover:text-ocean-900');

                // Show/Hide Grids
                gridBridesmaids.style.display = "block"
                gridGroomsmen.classList.add('opacity-0', 'pointer-events-none');
            } else {

                // Style Buttons
                btnGroomsmen.classList.add('bg-ocean-800', 'text-white', 'shadow-md');
                btnGroomsmen.classList.remove('text-ocean-600', 'hover:text-ocean-900');
                btnBridesmaids.classList.remove('bg-ocean-800', 'text-white', 'shadow-md');
                btnBridesmaids.classList.add('text-ocean-600', 'hover:text-ocean-900');

                // Show/Hide Grids
                gridGroomsmen.classList.remove('opacity-0', 'pointer-events-none');
                // gridBridesmaids.classList.add('opacity-0', 'pointer-events-none');
                gridBridesmaids.style.display = "none"
            }
        }

        btnBridesmaids.addEventListener('click', () => switchTab('bridesmaids'));
        btnGroomsmen.addEventListener('click', () => switchTab('groomsmen'));

        // Intersection Observer for Reveal Animations
        const observerOptions = {
            threshold: 0.15,
            rootMargin: "0px 0px -50px 0px"
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target); // Only animate once
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => {
            observer.observe(el);
        });

        // RSVP Form Handling
        const form = document.getElementById('rsvp-form');
        const modal = document.getElementById('success-modal');
        const modalContent = document.getElementById('modal-content');
        const closeModal = document.getElementById('close-modal');
        const modalBackdrop = document.getElementById('modal-backdrop');

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            // Simulate API call
            const btn = form.querySelector('button');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            btn.disabled = true;

            setTimeout(() => {
                // Show Modal
                modal.classList.remove('hidden');
                // Trigger reflow
                void modal.offsetWidth;
                modalContent.classList.remove('scale-90', 'opacity-0');
                modalContent.classList.add('scale-100', 'opacity-100');

                // Reset Form
                form.reset();
                btn.innerHTML = originalText;
                btn.disabled = false;
            }, 1500);
        });

        function hideModal() {
            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-90', 'opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        closeModal.addEventListener('click', hideModal);
        modalBackdrop.addEventListener('click', hideModal);

        // Parallax Effect for Hero Image
        window.addEventListener('scroll', () => {
            const scrolled = window.scrollY;
            const heroBg = document.getElementById('hero-bg');
            if (scrolled < window.innerHeight) {
                heroBg.style.transform = `scale(1.1) translateY(${scrolled * 0.5}px)`;
            }
        });

    </script>
</body>

</html>