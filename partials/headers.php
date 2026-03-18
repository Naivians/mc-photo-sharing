<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MC | The Wedding</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="icon" type="image/png" href="logo.png">
    <link href="https://cdn.boxicons.com/3.0.8/fonts/basic/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.boxicons.com/3.0.8/fonts/filled/boxicons-filled.min.css" rel="stylesheet">
    <link href="https://cdn.boxicons.com/3.0.8/fonts/brands/boxicons-brands.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400&family=Montserrat:wght@200;300;400;500&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ocean: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                            950: '#082f49',
                        },
                        pearl: '#fdfbf7',
                    },
                    fontFamily: {
                        serif: ['"Cormorant Garamond"', 'serif'],
                        sans: ['"Montserrat"', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'fade-in-up': 'fadeInUp 1s ease-out forwards',
                        'spin-slow': 'spin 12s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(40px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f0f9ff;
        }

        ::-webkit-scrollbar-thumb {
            background: #bae6fd;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #7dd3fc;
        }

        /* Glassmorphism Utilities */
        .glass {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .glass-dark {
            background: rgba(12, 74, 110, 0.6);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Text Stroke */
        .text-stroke {
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.3);
            color: transparent;
        }

        /* Loader */
        #loader {
            position: fixed;
            inset: 0;
            background: #f0f9ff;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity 0.8s ease-out;
        }

        /* Reveal on Scroll Class */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 1s cubic-bezier(0.5, 0, 0, 1);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
            margin-top: 10px;
        }
    </style>
</head>