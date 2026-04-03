
<section
    class="min-h-screen bg-gradient-to-br from-rose-50 via-white to-orange-50 py-16 px-4 sm:px-6 lg:px-8 font-serif">
    <div class="text-center mb-20 " data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000"
                data-aos-easing="ease-in-out" >
        <h2 class="text-5xl md:text-6xl wedding-font text-ocean-900 mt-2 mb-6">Gallery</h2>
        <div class="w-24 h-1 bg-ocean-200 mx-auto"></div>
    </div>
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
        <div
            class="absolute top-10 left-10 w-64 h-64 bg-rose-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse">
        </div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-orange-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"
            style="animation-delay: 2s;"></div>
    </div>

    <div class="relative max-w-7xl mx-auto">
        <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
            <button onclick="filterGallery('all')"
                class="filter-btn active px-6 py-2 rounded-full border border-rose-200 text-rose-600 hover:bg-rose-50 transition-all duration-300 font-sans text-sm tracking-wide"
                data-filter="all">All Moments</button>
            <button onclick="filterGallery('ceremony')"
                class="filter-btn px-6 py-2 rounded-full border border-rose-200 text-gray-500 hover:bg-rose-50 hover:text-rose-600 transition-all duration-300 font-sans text-sm tracking-wide"
                data-filter="ceremony">Ceremony</button>
            <button onclick="filterGallery('portraits')"
                class="filter-btn px-6 py-2 rounded-full border border-rose-200 text-gray-500 hover:bg-rose-50 hover:text-rose-600 transition-all duration-300 font-sans text-sm tracking-wide"
                data-filter="portraits">Portraits</button>
            <button onclick="filterGallery('details')"
                class="filter-btn px-6 py-2 rounded-full border border-rose-200 text-gray-500 hover:bg-rose-50 hover:text-rose-600 transition-all duration-300 font-sans text-sm tracking-wide"
                data-filter="details">Details</button>
            <button onclick="filterGallery('reception')"
                class="filter-btn px-6 py-2 rounded-full border border-rose-200 text-gray-500 hover:bg-rose-50 hover:text-rose-600 transition-all duration-300 font-sans text-sm tracking-wide"
                data-filter="reception">Reception</button>
        </div>

        <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6" id="gallery-grid">

            <div class="gallery-item group relative overflow-hidden rounded-2xl break-inside-avoid cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500"
                data-category="portraits" onclick="openLightbox(0)">
                <img src="https://images.junebugweddings.com/78/26/782673669db39784.jpg" alt="Romantic Wedding Kiss"
                    class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <p class="text-white font-serif italic text-xl">The First Kiss</p>
                    <p class="text-white/80 text-xs font-sans tracking-wider mt-1">Outdoor Ceremony</p>
                </div>
                <div
                    class="absolute top-4 right-4 w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                    </svg>
                </div>
            </div>

            <!-- Photo 2 - Details -->
            <div class="gallery-item group relative overflow-hidden rounded-2xl break-inside-avoid cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500"
                data-category="details" onclick="openLightbox(1)">
                <img src="https://images.pexels.com/photos/30655484/pexels-photo-30655484/free-photo-of-elegant-wedding-rings-and-floral-bouquet-display.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Wedding Rings and Bouquet"
                    class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <p class="text-white font-serif italic text-xl">Rings & Roses</p>
                    <p class="text-white/80 text-xs font-sans tracking-wider mt-1">Detail Shot</p>
                </div>
            </div>

            <!-- Photo 3 - Candid -->
            <div class="gallery-item group relative overflow-hidden rounded-2xl break-inside-avoid cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500"
                data-category="ceremony" onclick="openLightbox(2)">
                <img src="https://images.squarespace-cdn.com/content/v1/6744250b81521d675423a80c/af07a0e9-c414-4787-8d41-b4544395f876/SID03886.jpg"
                    alt="Candid Wedding Moment"
                    class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <p class="text-white font-serif italic text-xl">Pure Joy</p>
                    <p class="text-white/80 text-xs font-sans tracking-wider mt-1">Candid Moment</p>
                </div>
            </div>

            <!-- Photo 4 - Reception -->
            <div class="gallery-item group relative overflow-hidden rounded-2xl break-inside-avoid cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500"
                data-category="reception" onclick="openLightbox(3)">
                <img src="https://www.realweddings.com.au/media/images/44180488_10212947019490598_878694611625705472.width-4096.jpg"
                    alt="Elegant Reception Venue"
                    class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <p class="text-white font-serif italic text-xl">Enchanted Evening</p>
                    <p class="text-white/80 text-xs font-sans tracking-wider mt-1">Reception</p>
                </div>
            </div>

            <!-- Photo 5 - Portrait -->
            <div class="gallery-item group relative overflow-hidden rounded-2xl break-inside-avoid cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500"
                data-category="portraits" onclick="openLightbox(4)">
                <img src="https://briannakirkphotography.com/wp-content/uploads/2023/03/Ana-and-Jonah-Forden-Wedding-8.20.21-Cover-Pic-BKIRK-1-1.jpg"
                    alt="Romantic Dip Pose"
                    class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <p class="text-white font-serif italic text-xl">Dancing in the Dusk</p>
                    <p class="text-white/80 text-xs font-sans tracking-wider mt-1">Couple Portrait</p>
                </div>
            </div>

            <!-- Photo 6 - Reception -->
            <div class="gallery-item group relative overflow-hidden rounded-2xl break-inside-avoid cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500"
                data-category="reception" onclick="openLightbox(5)">
                <img src="https://cdn.greenvelope.com/blog/wp-content/uploads/Wedding-reception.jpeg"
                    alt="Rustic Reception Decor"
                    class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <p class="text-white font-serif italic text-xl">Warmth & Light</p>
                    <p class="text-white/80 text-xs font-sans tracking-wider mt-1">Reception Details</p>
                </div>
            </div>

            <!-- Photo 7 - Details -->
            <div class="gallery-item group relative overflow-hidden rounded-2xl break-inside-avoid cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500"
                data-category="details" onclick="openLightbox(6)">
                <img src="https://png.pngtree.com/thumb_back/fw800/background/20250520/pngtree-elegant-wedding-rings-and-white-rose-bouquet-image_17319559.jpg"
                    alt="Elegant Rings Detail"
                    class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <p class="text-white font-serif italic text-xl">Forever Symbol</p>
                    <p class="text-white/80 text-xs font-sans tracking-wider mt-1">Rings</p>
                </div>
            </div>

            <!-- Photo 8 - Portrait -->
            <div class="gallery-item group relative overflow-hidden rounded-2xl break-inside-avoid cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500"
                data-category="portraits" onclick="openLightbox(7)">
                <img src="https://www.shutterstock.com/image-photo/groom-brown-suit-bride-white-600nw-2635530009.jpg"
                    alt="Classic Couple Portrait"
                    class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <p class="text-white font-serif italic text-xl">Classic Love</p>
                    <p class="text-white/80 text-xs font-sans tracking-wider mt-1">Portrait</p>
                </div>
            </div>

            <!-- Photo 9 - Ceremony -->
            <div class="gallery-item group relative overflow-hidden rounded-2xl break-inside-avoid cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500"
                data-category="ceremony" onclick="openLightbox(8)">
                <img src="https://images.squarespace-cdn.com/content/v1/6744250b81521d675423a80c/5a815f11-a4d0-48ee-bcec-2c8627244791/DSC_9050.jpg"
                    alt="Wedding Ceremony"
                    class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                    <p class="text-white font-serif italic text-xl">Sacred Vows</p>
                    <p class="text-white/80 text-xs font-sans tracking-wider mt-1">Ceremony</p>
                </div>
            </div>

        </div>

        <!-- Quote Section -->
        <div class="mt-20 text-center max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
            <svg class="w-12 h-12 text-rose-300 mx-auto mb-6 opacity-50" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
            </svg>
            <p class="text-2xl md:text-3xl font-serif italic text-gray-700 leading-relaxed" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000"
                data-aos-easing="ease-in-out">"The best and most beautiful things in this world cannot be seen or even heard, but must be felt with the heart."</p>
            <p class="mt-4 text-rose-400 font-sans text-sm tracking-widest uppercase">— Helen Keller</p>
        </div>
    </div>

    <!-- Lightbox Modal -->
    <div id="lightbox"
        class="fixed inset-0 z-50 hidden bg-black/95 backdrop-blur-sm flex items-center justify-center p-4">
        <button onclick="closeLightbox()"
            class="absolute top-6 right-6 text-white/70 hover:text-white transition-colors z-50">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <button onclick="prevImage()"
            class="absolute left-4 md:left-8 text-white/70 hover:text-white transition-colors z-50 p-2">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <button onclick="nextImage()"
            class="absolute right-4 md:right-8 text-white/70 hover:text-white transition-colors z-50 p-2">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <div class="max-w-5xl max-h-[90vh] relative">
            <img id="lightbox-img" src="" alt="" class="max-w-full max-h-[85vh] object-contain rounded-lg shadow-2xl">
            <div
                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 rounded-b-lg">
                <p id="lightbox-caption" class="text-white font-serif italic text-2xl text-center"></p>
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Inter:wght@300;400;500&display=swap');

        .font-serif {
            font-family: 'Playfair Display', serif;
        }

        .font-sans {
            font-family: 'Inter', sans-serif;
        }

        .gallery-item {
            break-inside: avoid;
            margin-bottom: 1.5rem;
        }

        .filter-btn.active {
            background-color: #fff1f2;
            color: #e11d48;
            border-color: #fda4af;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .gallery-item {
            animation: fadeIn 0.6s ease-out forwards;
        }

        #lightbox {
            transition: opacity 0.3s ease;
        }
    </style>

    <script>
        // Gallery Data
        const galleryImages = [
            { src: "https://images.junebugweddings.com/78/26/782673669db39784.jpg", caption: "The First Kiss — Outdoor Ceremony" },
            { src: "https://images.pexels.com/photos/30655484/pexels-photo-30655484/free-photo-of-elegant-wedding-rings-and-floral-bouquet-display.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1", caption: "Rings & Roses — Detail Shot" },
            { src: "https://images.squarespace-cdn.com/content/v1/6744250b81521d675423a80c/af07a0e9-c414-4787-8d41-b4544395f876/SID03886.jpg", caption: "Pure Joy — Candid Moment" },
            { src: "https://www.realweddings.com.au/media/images/44180488_10212947019490598_878694611625705472.width-4096.jpg", caption: "Enchanted Evening — Reception" },
            { src: "https://briannakirkphotography.com/wp-content/uploads/2023/03/Ana-and-Jonah-Forden-Wedding-8.20.21-Cover-Pic-BKIRK-1-1.jpg", caption: "Dancing in the Dusk — Couple Portrait" },
            { src: "https://cdn.greenvelope.com/blog/wp-content/uploads/Wedding-reception.jpeg", caption: "Warmth & Light — Reception Details" },
            { src: "https://png.pngtree.com/thumb_back/fw800/background/20250520/pngtree-elegant-wedding-rings-and-white-rose-bouquet-image_17319559.jpg", caption: "Forever Symbol — Rings" },
            { src: "https://www.shutterstock.com/image-photo/groom-brown-suit-bride-white-600nw-2635530009.jpg", caption: "Classic Love — Portrait" },
            { src: "https://images.squarespace-cdn.com/content/v1/6744250b81521d675423a80c/5a815f11-a4d0-48ee-bcec-2c8627244791/DSC_9050.jpg", caption: "Sacred Vows — Ceremony" }
        ];

        let currentIndex = 0;

        // Filter Functionality
        function filterGallery(category) {
            const items = document.querySelectorAll('.gallery-item');
            const buttons = document.querySelectorAll('.filter-btn');

            // Update button states
            buttons.forEach(btn => {
                if (btn.dataset.filter === category) {
                    btn.classList.add('active');
                    btn.classList.remove('text-gray-500');
                    btn.classList.add('text-rose-600');
                } else {
                    btn.classList.remove('active');
                    btn.classList.add('text-gray-500');
                    btn.classList.remove('text-rose-600');
                }
            });

            // Filter items with animation
            items.forEach((item, index) => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, index * 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        }

        // Lightbox Functions
        function openLightbox(index) {
            currentIndex = index;
            const lightbox = document.getElementById('lightbox');
            const img = document.getElementById('lightbox-img');
            const caption = document.getElementById('lightbox-caption');

            img.src = galleryImages[index].src;
            caption.textContent = galleryImages[index].caption;
            lightbox.classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            // Animate in
            setTimeout(() => {
                lightbox.style.opacity = '1';
            }, 10);
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.style.opacity = '0';
            setTimeout(() => {
                lightbox.classList.add('hidden');
                document.body.style.overflow = '';
            }, 300);
        }

        function nextImage() {
            currentIndex = (currentIndex + 1) % galleryImages.length;
            updateLightbox();
        }

        function prevImage() {
            currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
            updateLightbox();
        }

        function updateLightbox() {
            const img = document.getElementById('lightbox-img');
            const caption = document.getElementById('lightbox-caption');

            img.style.opacity = '0';
            setTimeout(() => {
                img.src = galleryImages[currentIndex].src;
                caption.textContent = galleryImages[currentIndex].caption;
                img.style.opacity = '1';
            }, 200);
        }

        // Keyboard Navigation
        document.addEventListener('keydown', (e) => {
            if (document.getElementById('lightbox').classList.contains('hidden')) return;

            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowRight') nextImage();
            if (e.key === 'ArrowLeft') prevImage();
        });

        // Close on background click
        document.getElementById('lightbox').addEventListener('click', (e) => {
            if (e.target === e.currentTarget) closeLightbox();
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            filterGallery('all');
        });
    </script>
</section>