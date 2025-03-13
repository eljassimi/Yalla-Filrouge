<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yalla - Your Gateway to Morocco</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Publica+Sans+Round:wght@400;500;600;700&display=swap">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'publica': ['"Publica Sans Round"', 'sans-serif'],
                    },
                    colors: {
                        primary: '#A22C29',
                        darkgray: '#1F1F1F',
                        lightgray: '#B9BAA3',
                    },
                    borderRadius: {
                        'half': '50%',
                    }
                },
            },
        }
    </script>
    <style>
        .card-arc {
            border-radius: 1000px 1000px 0 0;
            overflow: hidden;
        }

        .hero-overlay {
            background: linear-gradient(to right, rgba(31, 31, 31, 0.9), rgba(31, 31, 31, 0.7));
        }

        .carousel-container {
            scroll-behavior: smooth;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .carousel-container::-webkit-scrollbar {
            display: none;
        }

        .carousel-card {
            scroll-snap-align: start;
        }

        .dot {
            height: 8px;
            width: 8px;
            border-radius: 50%;
            display: inline-block;
            margin: 0 4px;
            transition: background-color 0.3s ease;
        }

    </style>
</head>
<body class="font-publica bg-darkgray text-white">
    <!-- Header -->
    <header class="fixed w-full top-0 z-50 backdrop-blur-sm border-b border-gray-800">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold flex items-center">
                    <img class="w-1/4" src="assets/logo/Yalla2.png" alt="logo">
                </a>
            </div>
            <div class="flex items-center space-x-2">
                @guest
                <a href="/register" class="bg-lightgray/80 hover:bg-lightgray/30 text-white px-4 py-2 rounded-md text-sm transition">
                    Start Yalla Journey
                </a>
                <a href="/login" class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-md flex items-center text-sm transition">
                   Login
                </a>
                @endguest
                @auth
                 <a href="/logout" class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-md flex items-center text-sm transition">
                    logout
                 </a>
                @endauth
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative pt-24 pb-12 md:pt-32 md:pb-16 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('assets/backgrounds/Herobg1.png');"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col mx-20 md:flex-row items-center">
                <div class="w-full md:w-2/3 mb-8 md:mb-0">
                    <p class="text-lightgray mb-2">The Yalla Experience</p>
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to Yalla</h1>
                    <p class="text-lg md:text-xl mb-4">Your gateway to the 2030 FIFA World Cup journey!</p>
                    <p class="text-lightgray max-w-lg">
                        Stay updated with the latest news, match schedules, and exclusive insights as Morocco prepares to host this historic event.
                    </p>
                </div>
                <div class="w-full md:w-1/3 flex justify-center md:justify-end">
                    <img src="assets/elements/morocco-maps.png" alt="Morocco Map" class="w-1/2 md:w-full max-w-xs">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-8 bg-darkgray">
        <div class="container mx-auto px-4">
            <div class="mb-8 relative">
                <div class="text-center">
                    <p class="text-lightgray uppercase tracking-wider mb-2">THE YALLA EXPERIENCE</p>
                    <h2 class="text-3xl md:text-4xl font-bold">Yalla Services</h2>
                </div>

                <!-- Carousel Navigation - Positioned absolutely -->
                <div class="absolute right-4 top-1/2 transform -translate-y-1/2 flex space-x-4">
                    <button id="prevService" class="bg-transparent border border-primary hover:bg-primary/10 rounded-full w-10 h-10 flex items-center justify-center text-primary transition-all z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="nextService" class="bg-primary hover:bg-primary/90 rounded-full w-10 h-10 flex items-center justify-center text-white transition-all z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="relative">
                <div id="servicesCarousel" class="overflow-x-auto justify-center gap-32 carousel-container pb-4 flex snap-x snap-mandatory">
                    <!-- Service Card 1 -->
                        <div class=" card-arc w-full md:w-1/6 min-w-[320px] h-[520px] relative shadow-lg transform transition-transform hover:-translate-y-2">
                            <img src="assets/elements/YallaRide.jpg" alt="Yalla Ride" class="w-full absolute top-0 left-0 h-full object-cover">
                            <div class=" absolute bottom-0 p-6 bg-gradient-to-t from-darkgray to-transparent">
                                <h3 class="text-xl font-bold mb-3">Yalla Ride</h3>
                                <p class="text-lightgray text-sm">
                                    Navigate Morocco with ease during the World Cup with our world-class transportation service. From buses to high-speed trains, we've got you covered across the nation.
                                </p>
                            </div>
                        </div>
                        <!-- Service Card 2 -->
                        <div class=" card-arc w-full md:w-1/6 min-w-[320px] h-[520px] relative shadow-lg transform transition-transform hover:-translate-y-2">
                            <img src="assets/elements/YallaStay.jpg" alt="Yalla Stay" class="w-full absolute top-0 left-0 h-full object-cover">
                            <div class=" absolute bottom-0 p-6 bg-gradient-to-t from-darkgray to-transparent">
                                <h3 class="text-xl font-bold mb-3">Yalla Stay</h3>
                                <p class="text-lightgray text-sm">
                                    Find the best accommodations across Morocco for your World Cup adventure. Whether you're looking for luxury hotels or cozy riads, we have options for every budget.
                                </p>
                            </div>
                        </div>

                        <!-- Service Card 3 -->
                        <div class=" card-arc w-full md:w-1/6 min-w-[320px] h-[520px] relative shadow-lg transform transition-transform hover:-translate-y-2">
                            <img src="assets/elements/YallaHealth.jpg" alt="Yalla Health" class="w-full absolute top-0 left-0 h-full object-cover">
                            <div class=" absolute bottom-0 p-6 bg-gradient-to-t from-darkgray to-transparent">
                                <h3 class="text-xl font-bold mb-3">Yalla Health</h3>
                                <p class="text-lightgray text-sm">
                                    Stay healthy and safe during the 2030 World Cup with Yalla Health services, offering complete medical support and emergency assistance throughout the tournament.
                                </p>
                            </div>
                        </div>
                </div>

                <!-- Dots Navigation -->
                <div class="flex justify-center mt-4">
                    <span class="dot bg-primary"></span>
                    <span class="dot bg-gray-400"></span>
                    <span class="dot bg-gray-400"></span>
                </div>

            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="py-8 bg-darkgray">
        <div class="container mx-auto px-4">
            <div class="mb-8 relative">
                <div class="text-center">
                    <h2 class="text-3xl md:text-4xl font-bold">Morocco Events</h2>
                </div>

                <!-- Carousel Navigation - Positioned absolutely -->
                <div class="absolute right-4 top-1/2 transform -translate-y-1/2 flex space-x-4">
                    <button id="prevEvent" class="bg-transparent border border-primary hover:bg-primary/10 rounded-full w-10 h-10 flex items-center justify-center text-primary transition-all z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="nextEvent" class="bg-primary hover:bg-primary/90 rounded-full w-10 h-10 flex items-center justify-center text-white transition-all z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="relative">
                <div id="eventsCarousel" class="overflow-x-auto justify-center gap-32 carousel-container pb-4 flex snap-x snap-mandatory">

                        <!-- Event Card 1 -->
                        <div class="carousel-card min-w-full md:min-w-[320px] rounded-xl w-[400px]">
                            <img src="assets/elements/TheatreEvent.jpg" alt="Theatre Mohammed VI" class="w-full rounded-xl h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3">Théâtre Mohammed VI</h3>
                                <p class="text-lightgray text-sm">
                                    Enjoy world-class performances, from plays to concerts in this iconic cultural venue.
                                </p>
                            </div>
                        </div>

                        <!-- Event Card 2 -->
                        <div class="carousel-card min-w-full md:min-w-[320px] rounded-xl w-[400px]">
                            <img src="assets/elements/GnaouaEvent2.jpg" alt="Gnaoua Festival" class="w-full rounded-xl h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3">Gnaoua Festival</h3>
                                <p class="text-lightgray text-sm">
                                    Immerse yourself in the soulful sounds and rich traditions of Gnaoua music at this captivating festival.
                                </p>
                            </div>
                        </div>

                        <!-- Event Card 3 -->
                        <div class="carousel-card min-w-full md:min-w-[320px] rounded-xl w-[400px]">
                            <img src="assets/elements/MawazineEvent.jpg" alt="Mawazine Festival" class="w-full h-48 rounded-xl object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3">Mawazine Festival</h3>
                                <p class="text-lightgray text-sm">
                                    Celebrate the rhythm of the world with one of Morocco's most renowned music festivals featuring international and local performers.
                                </p>
                            </div>
                        </div>
                </div>

                <!-- Dots Navigation -->
                <div class="flex justify-center mt-4">
                    <span class="dot bg-primary"></span>
                    <span class="dot bg-gray-400"></span>
                    <span class="dot bg-gray-400"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile App Section  -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Yalla Mobile App</h2>

            <div class="flex flex-col md:flex-row items-center bg-lightgray rounded-lg overflow-hidden">
                <div class="w-full md:w-1/2 mb-8 md:mb-0 flex justify-center">
                    <img src="assets/elements/mobileApp.png" alt="Yalla Mobile App" class="w-3/5 md:w-2/3 max-w-xs">
                </div>

                <div class="w-full md:w-1/2 p-8">
                    <h3 class="text-2xl text-darkgray md:text-3xl font-bold mb-4">Master your Morocco experience with the Yalla Mobile App.</h3>
                    <p class="mb-8 text-darkgray font-bold">
                        Experience Morocco to the fullest by managing every aspect of your journey with the Yalla Mobile app.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#">
                           <img src="assets/elements/google-play.png" alt="" class="w-56">
                        </a>
                        <a href="#">
                            <img src="assets/elements/app-store.png" class="w-56">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-darkgray/95 border-t border-gray-800 py-12">
        <div class="container mx-auto px-4">
            <div class="flex justify-between gap-8">
                <div>
                    <h4 class="text-white font-bold mb-4 uppercase text-sm">Legal Terms</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-lightgray hover:text-white transition">Terms of Use</a></li>
                        <li><a href="#" class="text-lightgray hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="#" class="text-lightgray hover:text-white transition">Cookies Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4 uppercase text-sm">Support</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-lightgray hover:text-white transition">FAQs</a></li>
                        <li><a href="#" class="text-lightgray hover:text-white transition">Contact</a></li>
                        <li><a href="#" class="text-lightgray hover:text-white transition">How to Guides</a></li>
                    </ul>
                </div>
            </div>

            <div class=" flex justify-between w-full">
                <a href="#" class=" mt-8 pt-8 text-2xl font-bold flex items-center">
                    <img class="h-10" src="assets/logo/Yalla2.png" alt="logo">
                </a>

                <div class="mt-8 pt-8 border-t border-gray-800 text-center text-lightgray text-sm">
                    <p>© 2025 Yalla | All rights reserved</p>
                </div>

                <div class=" mt-8  pt-8 flex space-x-4 ">
                    <a href="#" class="text-lightgray hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-lightgray hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-lightgray hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-lightgray hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
