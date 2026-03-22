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
            <p class="text-ocean-200 font-light">Please respond by March 31st, 2026</p>
        </div>

        <form id="rsvp-form" class="glass-dark p-8 md:p-12 rounded-3xl shadow-2xl reveal">
            <p class="text-center p-2"><span class="font-bold">Please note:</span> We kindly request no plus one</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="relative">
                    <input type="text" id="name" required
                        class="peer w-full bg-transparent border-b border-ocean-400 py-2 text-white placeholder-transparent focus:outline-none focus:border-white transition-colors"
                        placeholder="Name">
                    <label for="name"
                        class="absolute left-0 -top-3.5 text-ocean-300 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-ocean-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-white peer-focus:text-sm">Full
                        Name</label>
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
                    class="absolute left-0 -top-3.5 text-ocean-300 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-ocean-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-white peer-focus:text-sm">
                    Please specify the names here if more than two</label>
            </div>

            <button type="submit"
                class="w-full bg-white text-ocean-900 font-bold py-4 rounded-full hover:bg-ocean-100 transform hover:scale-[1.02] transition-all duration-300 shadow-lg flex justify-center items-center group">
                <span>Send RSVP</span>
                <i class="fas fa-paper-plane ml-2 group-hover:translate-x-1 transition-transform"></i>
            </button>
        </form>
    </div>
</section>