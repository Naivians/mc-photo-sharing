<?php $scriptName = basename($_SERVER['SCRIPT_NAME']) ?? '';

?>

<nav class="fixed w-full z-50 transition-all duration-300 py-6 px-6 lg:px-12 flex justify-between items-center"
    id="navbar">
    <img src="./logo.png" alt="our logo" style="width: 100px; height: auto;">

    <div class="hidden md:flex space-x-8 items-center">
        <?php
        if ($scriptName == 'uploader.php') {
            ?>
            <a href="index.php" class="text-sm uppercase tracking-widest hover:text-ocean-500 transition-colors">Home</a>
            <?php
        } else {
            ?>
            <a href="#home" class="text-sm uppercase tracking-widest hover:text-ocean-500 transition-colors">Home</a>
            <a href="#party" class="text-sm uppercase tracking-widest hover:text-ocean-500 transition-colors">The
                Party</a>

            <a href="#sponsors"
                class="text-sm uppercase tracking-widest hover:text-ocean-500 transition-colors">Sponsors</a>
            <a href="./uploader.php"
                class="text-sm uppercase tracking-widest hover:text-ocean-500 transition-colors">Gallery</a>

            <a href="#rsvp" class="px-6 py-2 border border-ocean-800 rounded-full text-sm uppercase tracking-widest hover:bg-ocean-800
            hover:text-white transition-all duration-300">RSVP</a>
            <?php
        }
        ?>
    </div>

    <!-- Mobile Menu Button -->
    <button class="md:hidden z-50 text-ocean-900 focus:outline-none" id="mobile-menu-btn">
        <i class="fas fa-bars text-2xl"></i>
    </button>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu"
    class="fixed inset-0 bg-pearl z-40 transform translate-x-full transition-transform duration-500 flex flex-col justify-center items-center space-y-8">
    <?php
    if ($scriptName == 'uploader.php') {
        ?>
        <a href="index.php" class="text-sm uppercase tracking-widest hover:text-ocean-500 transition-colors">Home</a>
        <?php
    } else {
        ?>
        <a href="#home" class="text-sm uppercase tracking-widest hover:text-ocean-500 transition-colors">Home</a>
        <a href="#party" class="text-sm uppercase tracking-widest hover:text-ocean-500 transition-colors">The
            Party</a>

        <a href="#sponsors" class="text-sm uppercase tracking-widest hover:text-ocean-500 transition-colors">Sponsors</a>
        <a href="./uploader.php"
            class="text-sm uppercase tracking-widest hover:text-ocean-500 transition-colors">Gallery</a>

        <a href="#rsvp" class="px-6 py-2 border border-ocean-800 rounded-full text-sm uppercase tracking-widest hover:bg-ocean-800
            hover:text-white transition-all duration-300">RSVP</a>
        <?php
    }
    ?>
</div>


<script>

    // Navbar Scroll Effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('bg-white/80', 'backdrop-blur-md', 'shadow-sm', 'py-4');
            navbar.classList.remove('py-6');
        } else {
            navbar.classList.remove('bg-white/80', 'backdrop-blur-md', 'shadow-sm', 'py-4');
            navbar.classList.add('py-6');
        }
    });

    // Mobile Menu
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');
    let isMenuOpen = false;

    mobileBtn.addEventListener('click', () => {
        isMenuOpen = !isMenuOpen;
        if (isMenuOpen) {
            mobileMenu.classList.remove('translate-x-full');
            document.body.style.overflow = 'hidden';
        } else {
            mobileMenu.classList.add('translate-x-full');
            document.body.style.overflow = 'auto';
        }
    });

    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            isMenuOpen = false;
            mobileMenu.classList.add('translate-x-full');
            document.body.style.overflow = 'auto';
        });
    });

</script>