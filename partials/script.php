<script>
    const playBtn = document.querySelector(".play-btn")
    const StopSong = document.getElementById("playBtn");
    const timeline = document.getElementById("timelineContent")
    const items = document.querySelectorAll(".timeline-item")
    const song = document.getElementById("weddingSong")

    window.addEventListener("scroll", function () {
        if (window.scrollY > 1000) {
            StopSong.classList.add("show");
        } else {
            StopSong.classList.remove("show");
        }
    });

    playBtn.addEventListener("click", () => {

        if (song.paused) {
            playBtn.innerHTML = "<i class='bx bx-pause'></i>";
            song.play()
        } else {
            song.pause();
            playBtn.innerHTML = "<i class='bx bx-play'></i>";
        }

        setTimeout(() => {
            items.forEach((item, i) => {
                setTimeout(() => {
                    item.classList.add("show")
                }, i * 400)
            })
        }, 200)

    })

    StopSong.addEventListener("click", () => {
        if (song.paused) {
            StopSong.innerHTML = "<i class='bx bx-pause'></i>";
            song.play()
        } else {
            song.pause();
            StopSong.innerHTML = "<i class='bx bx-play'></i>";
        }
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

    window.addEventListener('load', () => {
        generateDots('bridesmaids-dots', 'bridesmaids-track');
        generateDots('groomsmen-dots', 'groomsmen-track');
    });

    window.addEventListener('resize', () => {
        generateDots('bridesmaids-dots', 'bridesmaids-track');
        generateDots('groomsmen-dots', 'groomsmen-track');
    });

    document.getElementById('bridesmaids-track').addEventListener('scroll', () => updateDots('bridesmaids'));
    document.getElementById('groomsmen-track').addEventListener('scroll', () => updateDots('groomsmen'));

    const btnBridesmaids = document.getElementById('btn-bridesmaids');
    const btnGroomsmen = document.getElementById('btn-groomsmen');
    const gridBridesmaids = document.getElementById('grid-bridesmaids');
    const gridGroomsmen = document.getElementById('grid-groomsmen');
    
    gridGroomsmen.classList.remove('opacity-0', 'pointer-events-none');

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

    const modal = document.getElementById('success-modal');
    const modalContent = document.getElementById('modal-content');
    const closeModal = document.getElementById('close-modal');
    const modalBackdrop = document.getElementById('modal-backdrop');
    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY;
        const heroBg = document.getElementById('hero-bg');
        if (scrolled < window.innerHeight) {
            heroBg.style.transform = `scale(1.1) translateY(${scrolled * 0.5}px)`;
        }
    });

</script>