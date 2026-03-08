<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvin & Cherry | Wedding Gallery</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400&family=Montserrat:wght@300;400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.boxicons.com/3.0.8/fonts/basic/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.boxicons.com/3.0.8/fonts/filled/boxicons-filled.min.css" rel="stylesheet">
    <link href="https://cdn.boxicons.com/3.0.8/fonts/brands/boxicons-brands.min.css" rel="stylesheet">
</head>

<body>
    <!-- Animated Background -->
    <div class="bg-animation">
        <div class="floating-circle circle-1"></div>
        <div class="floating-circle circle-2"></div>
        <div class="floating-circle circle-3"></div>
    </div>

    <header>
        <div class="wedding-date">October 03, 2026</div>
        <h1>Joseph <span class="ampersand">&</span> Maria</h1>
        <p class="subtitle">Help us capture every magical moment of our special day</p>
    </header>

    <main class="container">
        <!-- Upload Section -->
        <section class="upload-section">
            <div class="upload-area" id="uploadArea">
                <div class="upload-icon">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM14 13v4h-4v-4H7l5-5 5 5h-3z" />
                    </svg>
                </div>
                <div class="upload-text">
                    <h3>Share Your Moments</h3>
                    <p>Drag & drop photos and videos here, or click to browse</p>
                </div>
                <button class="upload-btn" id="uploadBtn">Select Files</button>
                <input type="file" class="file-input" id="fileInput" multiple accept="image/*,video/*">
                <div class="upload-progress" id="uploadProgress">
                    <div class="progress-bar" id="progressBar">
                        <h1>awdkjahjwkdhwad</h1>
                    </div>
                </div>
            </div>
        </section>

        <button class="upload-btn" id="uploadBtnMobile">
            <span>Upload</span>
        </button>

        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="section-header">
                <h2 class="section-title" id="section-title">Wedding Gallery</h2>
                <div class="filter-tabs">
                    <button class="filter-tab active" data-filter="all">All</button>
                    <button class="filter-tab" data-filter="photo">Photos</button>
                    <button class="filter-tab" data-filter="video">Videos</button>
                </div>
            </div>

            <div class="loading-spinner" id="loadingSpinner"></div>

            <div class="empty-state" id="emptyState">
                <svg class="empty-icon" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z" />
                </svg>
                <h3>No memories shared yet</h3>
                <p>Be the first to upload a photo or video!</p>
            </div>

            <div class="gallery-grid" id="galleryGrid"></div>
        </section>
    </main>

    <!-- Toast Notification -->
    <div class="toast" id="toast">
        <div class="toast-icon">✓</div>
        <span id="toastMessage">Upload successful!</span>
    </div>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <!-- <p style="position: absolute; top:10px; font-size: 0.9rem; color: white;">Click anywhere to close</p> -->
        <div class="button-group">
            <button class="" id="downloadBtn" onclick="downloadPhoto()">Download <i class="bx bx-arrow-to-bottom"> </i></button>
        </div>
        <button class="lightbox-nav lightbox-prev" id="lightboxPrev">‹</button>
        <button class="lightbox-nav lightbox-next" id="lightboxNext">›</button>
        <div class="lightbox-content">
            <button class="lightbox-close" id="lightboxClose">&times;</button>
            <div id="lightboxMedia"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        const SCRIPT_URL = "uploads.php";
        const GALLERY_URL = "gallery.php";

        const uploadArea = document.getElementById('uploadArea');
        const fileInput = document.getElementById('fileInput');
        const uploadBtn = document.getElementById('uploadBtn');
        const sectionTitle = document.getElementById('section-title');
        const uploadBtnMobile = document.getElementById('uploadBtnMobile');
        const galleryGrid = document.getElementById('galleryGrid');
        const toast = document.getElementById('toast');
        const toastMessage = document.getElementById('toastMessage');
        const lightbox = document.getElementById('lightbox');
        const lightboxClose = document.getElementById('lightboxClose');
        const lightboxMedia = document.getElementById('lightboxMedia');
        const lightboxPrev = document.getElementById('lightboxPrev');
        const lightboxNext = document.getElementById('lightboxNext');
        const filterTabs = document.querySelectorAll('.filter-tab');
        const uploadProgress = document.getElementById('uploadProgress');
        const progressBar = document.getElementById('progressBar');

        let currentFilter = 'all';
        let currentLightboxIndex = 0;
        let galleryItems = [];

        document.getElementById("lightboxNext").onclick = showNext;
        document.getElementById("lightboxPrev").onclick = showPrev;

        uploadBtn.addEventListener('click', () => fileInput.click());
        uploadBtnMobile.addEventListener('click', () => fileInput.click());

        window.addEventListener("scroll", function() {

            if (window.scrollY > 500) {
                uploadBtnMobile.classList.add("show");
                sectionTitle.style.display = "none";
            } else {
                uploadBtnMobile.classList.remove("show");
                sectionTitle.style.display = "block";
            }
        });
        window.addEventListener("scroll", function() {
            if (window.scrollY > 700) {
                sectionTitle.style.display = "none";
            } else {
                sectionTitle.style.display = "block";
            }
        });

        uploadArea.addEventListener('click', (e) => {
            if (e.target !== uploadBtn) fileInput.click();
        });

        fileInput.addEventListener('change', e => {
            processFiles(Array.from(e.target.files));
        });

        uploadArea.addEventListener('dragover', e => {
            e.preventDefault();
            uploadArea.classList.add('dragover');
        });

        uploadArea.addEventListener('dragleave', () => {
            uploadArea.classList.remove('dragover');
        });

        uploadArea.addEventListener('drop', e => {
            e.preventDefault();
            uploadArea.classList.remove('dragover');
            processFiles(Array.from(e.dataTransfer.files));
        });

        function sharePhoto() {

            const file = lightbox.dataset.id;

            const url = window.location.origin + "/uploads/" + encodeURIComponent(file);

            if (navigator.share) {

                navigator.share({
                    title: "Wedding Photo",
                    text: "Check out this photo from the wedding!",
                    url: url
                }).catch(err => console.log(err));

            } else {

                // fallback (copy link)
                navigator.clipboard.writeText(url);
                alert("Link copied to clipboard!");

            }

        }

        function downloadPhoto() {

            const file = lightbox.dataset.id;

            window.location.href = "download.php?file=" + encodeURIComponent(file);

        }

        async function processFiles(files) {

            const validFiles = files.filter(f =>
                f.type.startsWith('image/') || f.type.startsWith('video/')
            );

            if (validFiles.length === 0) {
                showToast("Only images or videos allowed");
                return;
            }

            uploadProgress.classList.add("show");

            for (let i = 0; i < validFiles.length; i++) {

                progressBar.style.width = ((i + 1) / validFiles.length) * 100 + "%";

                const optimized = await compressImage(validFiles[i]);
                await uploadFile(optimized);

            }

            setTimeout(() => {
                uploadProgress.classList.remove("show");
                progressBar.style.width = "0%";
                showToast("Upload complete");
            }, 500);

            loadGallery();
        }

        async function compressImage(file) {

            if (!file.type.startsWith("image/")) return file;

            return new Promise(resolve => {

                const img = new Image();
                const reader = new FileReader();

                reader.onload = e => {
                    img.src = e.target.result;
                };

                img.onload = () => {

                    const canvas = document.createElement("canvas");

                    const maxWidth = 1600;

                    let width = img.width;
                    let height = img.height;

                    if (width > maxWidth) {
                        height = height * (maxWidth / width);
                        width = maxWidth;
                    }

                    canvas.width = width;
                    canvas.height = height;

                    const ctx = canvas.getContext("2d");
                    ctx.drawImage(img, 0, 0, width, height);

                    canvas.toBlob(blob => {
                        resolve(new File([blob], file.name, {
                            type: "image/jpeg"
                        }));
                    }, "image/jpeg", 0.8);

                };

                reader.readAsDataURL(file);

            });

        }

        function handleFiles(files) {

            [...files].forEach(file => uploadFile(file));

        }

        function uploadFile(file) {

            const formData = new FormData();
            formData.append("photo", file);

            uploadProgress.style.display = "block";
            $.ajax({
                url: "uploads.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,

                xhr: function() {

                    let xhr = new window.XMLHttpRequest();

                    xhr.upload.addEventListener("progress", function(e) {

                        if (e.lengthComputable) {

                            const percent = (e.loaded / e.total) * 100;
                            progressBar.style.width = percent + "%";

                        }

                    });

                    return xhr;
                },

                success: function(res) {

                    console.log(res);

                    progressBar.style.width = "100%";

                    setTimeout(() => {
                        uploadProgress.style.display = "none";
                        progressBar.style.width = "0%";
                    }, 800);

                    loadGallery();
                },

                error: function() {
                    alert("Upload failed");
                }

            });

        }

        async function loadGallery() {

            galleryGrid.innerHTML = "";
            document.getElementById("loadingSpinner").style.display = "block";

            try {

                const res = await fetch("gallery.php");
                const files = await res.json();


                document.getElementById("loadingSpinner").style.display = "none";

                if (files.length === 0) {

                    document.getElementById("emptyState").classList.add("show");
                    return;

                }

                document.getElementById("emptyState").classList.remove("show");

                files.reverse().forEach(file => {

                    const item = document.createElement("div");
                    item.className = "gallery-item";
                    item.dataset.id = file.id;

                    const url = file.url;
                    const isVideo = file.type.startsWith("video/");
                    if (isVideo) {

                        item.dataset.type = "video";
                        item.dataset.video = "true";
                        item.dataset.src = url;

                        item.innerHTML = `
                        <video src="${url}" muted></video>
                        <div class="play-icon">
                        <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                        `;

                    } else {

                        item.dataset.type = "photo";
                        item.innerHTML = `<img src="${url}">`;

                    }

                    galleryGrid.appendChild(item);

                });

                updateGalleryItems();
                applyFilter(currentFilter);

            } catch (err) {

                showToast("Gallery load failed");

            }

        }

        filterTabs.forEach(tab => {

            tab.addEventListener("click", () => {

                filterTabs.forEach(t => t.classList.remove("active"));

                tab.classList.add("active");

                currentFilter = tab.dataset.filter;

                applyFilter(currentFilter);

            });

        });

        function applyFilter(filter) {

            const items = document.querySelectorAll(".gallery-item");

            items.forEach(item => {

                if (filter === "all" || item.dataset.type === filter) {

                    item.style.display = "block";

                } else {

                    item.style.display = "none";

                }

            });

        }

        function updateGalleryItems() {

            galleryItems = Array.from(document.querySelectorAll(".gallery-item"));

            galleryItems.forEach((item, index) => {
                item.onclick = () => openLightbox(index);
            });

        }

        function openLightbox(index) {

            currentLightboxIndex = index;
            const item = galleryItems[index];
            const dbid = item.dataset.id;

            console.log("Opening lightbox for item with DB ID:", dbid);

            lightbox.dataset.id = dbid;

            const isVideo = item.dataset.video === "true";
            const src = item.dataset.src || item.querySelector("img").src;

            lightboxMedia.innerHTML = "";

            if (isVideo) {

                const video = document.createElement("video");
                video.src = src;
                video.controls = true;
                video.autoplay = true;

                lightboxMedia.appendChild(video);

            } else {

                const img = document.createElement("img");
                img.src = src;

                lightboxMedia.appendChild(img);

            }

            lightbox.classList.add("active");
            document.body.style.overflow = "hidden";

        }

        function closeLightbox() {

            lightbox.classList.remove("active");
            document.body.style.overflow = "";
            lightboxMedia.innerHTML = "";

        }

        lightboxClose.addEventListener("click", closeLightbox);

        lightbox.addEventListener("click", e => {
            if (e.target === lightbox) closeLightbox();
        });

        function showToast(message) {

            toastMessage.textContent = message;

            toast.classList.add("show");

            setTimeout(() => {

                toast.classList.remove("show");

            }, 3000);

        }



        function showNext() {

            currentLightboxIndex++;

            if (currentLightboxIndex >= galleryItems.length) {
                currentLightboxIndex = 0;
            }

            openLightbox(currentLightboxIndex);

        }

        function showPrev() {

            currentLightboxIndex--;

            if (currentLightboxIndex < 0) {
                currentLightboxIndex = galleryItems.length - 1;
            }

            openLightbox(currentLightboxIndex);

        }

        document.addEventListener("DOMContentLoaded", loadGallery);
    </script>

</body>

</html>