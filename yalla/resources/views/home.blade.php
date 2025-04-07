<x-head />

<body class="bg-darkgray text-white font-['Poppins']">
<!-- Header -->
<x-navbar />
<!-- Hero Section -->
<section class="relative pt-24 pb-12 md:pt-32 md:pb-16 overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('assets/backgrounds/Herobg1.png');"></div>
    <!-- Add animated particles overlay for depth -->
    <div class="absolute inset-0 z-0 opacity-30" id="particles-js"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col mx-20 md:flex-row items-center">
            <div class="w-full md:w-2/3 mb-8 md:mb-0">
                <p class="text-lightgray mb-2">The Yalla Experience</p>
                <h1 class="text-4xl md:text-5xl font-bold mb-4 relative">
                    Welcome to Yalla
                    <span class="absolute -bottom-2 left-0 w-24 h-1 bg-primary"></span>
                </h1>
                <p class="text-lg md:text-xl mb-4">Your gateway to the 2030 FIFA World Cup journey!</p>
                <p class="text-lightgray max-w-lg">
                    Stay updated with the latest news, match schedules, and exclusive insights as Morocco prepares to host this historic event.
                </p>
            </div>
            <div class="w-full md:w-1/3 flex justify-center md:justify-end relative">
                <div class="absolute -z-10 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-primary/20 rounded-full blur-3xl"></div>
                <img src="assets/elements/morocco-maps.png" alt="Morocco Map" class="w-1/2 md:w-full max-w-xs relative z-10 drop-shadow-[0_0_15px_rgba(255,255,255,0.3)]">
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-darkgray relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute top-0 left-0 w-48 h-48 bg-primary/10 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>

    <div class="container mx-auto px-4">
        <div class="mb-12 relative">
            <div class="text-center">
                <p class="text-lightgray uppercase tracking-wider mb-2">THE YALLA EXPERIENCE</p>
                <h2 class="text-3xl md:text-4xl font-bold inline-block relative">
                    Yalla Services
                    <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-primary"></span>
                </h2>
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
            <div id="servicesCarousel" class="overflow-x-auto justify-center gap-8 lg:gap-16 carousel-container pb-4 flex snap-x snap-mandatory">

                <div class="card-service min-w-[320px] h-[520px] relative shadow-lg transform transition-all duration-300 hover:-translate-y-3 hover:shadow-primary/30 group">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/40 to-primary/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10"></div>
                    <div class="card-shape absolute inset-0 overflow-hidden">
                        <img src="assets/elements/YallaRide.jpg" alt="Yalla Ride" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-0 p-6 bg-gradient-to-t from-darkgray via-darkgray/90 to-transparent z-20 w-full">
                        <div class="service-icon bg-primary/90 w-14 h-14 rounded-full flex items-center justify-center mb-4 -mt-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m-8 4H4m0 0l4 4m-4-4l4-4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-primary transition-colors">Yalla Ride</h3>
                        <p class="text-lightgray text-sm">
                            Navigate Morocco with ease during the World Cup with our world-class transportation service. From buses to high-speed trains, we've got you covered across the nation.
                        </p>
                    </div>
                </div>

                <div class="card-service min-w-[320px] h-[520px] relative shadow-lg transform transition-all duration-300 hover:-translate-y-3 hover:shadow-primary/30 group">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/40 to-primary/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10"></div>
                    <div class="card-shape absolute inset-0 overflow-hidden">
                        <img src="assets/elements/YallaStay7.jpg" alt="Yalla Stay" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-0 p-6 bg-gradient-to-t from-darkgray via-darkgray/90 to-transparent z-20 w-full">
                        <div class="service-icon bg-primary/90 w-14 h-14 rounded-full flex items-center justify-center mb-4 -mt-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-primary transition-colors">Yalla Stay</h3>
                        <p class="text-lightgray text-sm">
                            Find the best accommodations across Morocco for your World Cup adventure. Whether you're looking for luxury hotels or cozy riads, we have options for every budget.
                        </p>
                    </div>
                </div>

                <div class="card-service min-w-[320px] h-[520px] relative shadow-lg transform transition-all duration-300 hover:-translate-y-3 hover:shadow-primary/30 group">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/40 to-primary/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10"></div>
                    <div class="card-shape absolute inset-0 overflow-hidden">
                        <img src="assets/elements/YallaHealth.jpg" alt="Yalla Health" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-0 p-6 bg-gradient-to-t from-darkgray via-darkgray/90 to-transparent z-20 w-full">
                        <div class="service-icon bg-primary/90 w-14 h-14 rounded-full flex items-center justify-center mb-4 -mt-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-primary transition-colors">Yalla Health</h3>
                        <p class="text-lightgray text-sm">
                            Stay healthy and safe during the 2030 World Cup with Yalla Health services, offering complete medical support and emergency assistance throughout the tournament.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-6">
                <span class="dot bg-primary w-3 h-3 rounded-full mx-1 cursor-pointer transition-all hover:scale-125"></span>
                <span class="dot bg-gray-400 w-3 h-3 rounded-full mx-1 cursor-pointer transition-all hover:scale-125 hover:bg-primary/50"></span>
                <span class="dot bg-gray-400 w-3 h-3 rounded-full mx-1 cursor-pointer transition-all hover:scale-125 hover:bg-primary/50"></span>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section class="py-16 bg-darkgray relative overflow-hidden">

    <div class="container mx-auto px-4">
        <div class="mb-12 relative">
            <div class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold inline-block relative">
                    Morocco Events
                    <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-primary"></span>
                </h2>
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
            <div id="eventsCarousel" class="overflow-x-auto justify-center gap-8 lg:gap-16 carousel-container pb-4 flex snap-x snap-mandatory">
                <!-- Event Card 1 - Moroccan arch shaped with clip path -->
                <div class="event-card min-w-[320px] w-[400px] bg-darkgray/80 backdrop-blur-sm border border-gray-800 rounded-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-lg hover:shadow-primary/20 group">
                    <div class="event-card-media relative h-48 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                        <img src="assets/elements/TheatreEvent.jpg" alt="Theatre Mohammed VI" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="event-date absolute top-0 right-0 bg-primary text-white p-2 px-3 font-bold z-20">APR 15</div>
                    </div>
                    <div class="p-6 relative">
                        <!-- Decorative curved edge -->
                        <div class="absolute top-0 left-0 w-full h-6 bg-darkgray/80" style="border-radius: 50% 50% 0 0 / 100% 100% 0 0;"></div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-primary transition-colors">Théâtre Mohammed VI</h3>
                        <p class="text-lightgray text-sm">
                            Enjoy world-class performances, from plays to concerts in this iconic cultural venue.
                        </p>
                        <div class="flex items-center mt-4 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-lightgray">Rabat, Morocco</span>
                        </div>
                    </div>
                </div>

                <!-- Event Card 2 - Moroccan geometric pattern influence -->
                <div class="event-card min-w-[320px] w-[400px] bg-darkgray/80 backdrop-blur-sm border border-gray-800 rounded-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-lg hover:shadow-primary/20 group">
                    <div class="event-card-media relative h-48 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                        <img src="assets/elements/GnaouaEvent2.jpg" alt="Gnaoua Festival" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="event-date absolute top-0 right-0 bg-primary text-white p-2 px-3 font-bold z-20">JUN 20</div>
                    </div>
                    <div class="p-6 relative">
                        <!-- Decorative curved edge -->
                        <div class="absolute top-0 left-0 w-full h-6 bg-darkgray/80" style="border-radius: 50% 50% 0 0 / 100% 100% 0 0;"></div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-primary transition-colors">Gnaoua Festival</h3>
                        <p class="text-lightgray text-sm">
                            Immerse yourself in the soulful sounds and rich traditions of Gnaoua music at this captivating festival.
                        </p>
                        <div class="flex items-center mt-4 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-lightgray">Essaouira, Morocco</span>
                        </div>
                    </div>
                </div>

                <!-- Event Card 3 - Moroccan tile pattern influence -->
                <div class="event-card min-w-[320px] w-[400px] bg-darkgray/80 backdrop-blur-sm border border-gray-800 rounded-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-lg hover:shadow-primary/20 group">
                    <div class="event-card-media relative h-48 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                        <img src="assets/elements/MawazineEvent.jpg" alt="Mawazine Festival" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="event-date absolute top-0 right-0 bg-primary text-white p-2 px-3 font-bold z-20">JUL 05</div>
                    </div>
                    <div class="p-6 relative">
                        <!-- Decorative curved edge -->
                        <div class="absolute top-0 left-0 w-full h-6 bg-darkgray/80" style="border-radius: 50% 50% 0 0 / 100% 100% 0 0;"></div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-primary transition-colors">Mawazine Festival</h3>
                        <p class="text-lightgray text-sm">
                            Celebrate the rhythm of the world with one of Morocco's most renowned music festivals featuring international and local performers.
                        </p>
                        <div class="flex items-center mt-4 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-lightgray">Rabat, Morocco</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interactive Dots Navigation -->
            <div class="flex justify-center mt-6">
                <span class="dot bg-primary w-3 h-3 rounded-full mx-1 cursor-pointer transition-all hover:scale-125"></span>
                <span class="dot bg-gray-400 w-3 h-3 rounded-full mx-1 cursor-pointer transition-all hover:scale-125 hover:bg-primary/50"></span>
                <span class="dot bg-gray-400 w-3 h-3 rounded-full mx-1 cursor-pointer transition-all hover:scale-125 hover:bg-primary/50"></span>
            </div>
        </div>
    </div>
</section>

<!-- Mobile App Section -->
<section class="py-16 relative overflow-hidden">
    <div class="absolute -top-24 -left-24 w-48 h-48 bg-primary/10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 relative inline-block">
            Yalla Mobile App
            <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-primary"></span>
        </h2>

        <div class="flex flex-col md:flex-row items-center bg-lightgray rounded-2xl overflow-hidden shadow-2xl relative">
            <div class="w-full md:w-1/2 mb-8 md:mb-0 flex justify-center relative">

                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-48 h-48 bg-primary/30 rounded-full blur-3xl"></div>
                <img src="assets/elements/mobileApp.png" alt="Yalla Mobile App" class="w-3/5 md:w-2/3 max-w-xs relative z-10 drop-shadow-xl transform transition-all duration-500 hover:scale-105">
            </div>

            <div class="w-full md:w-1/2 p-8 md:p-12">
                <h3 class="text-2xl text-darkgray md:text-3xl font-bold mb-4">Master your Morocco experience with the Yalla Mobile App.</h3>
                <p class="mb-8 text-darkgray font-bold">
                    Experience Morocco to the fullest by managing every aspect of your journey with the Yalla Mobile app.
                </p>

                <!-- App features list -->
                <div class="mb-8">
                    <div class="flex items-center mb-3">
                        <div class="bg-primary/20 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-darkgray font-medium">Real-time event updates & notifications</p>
                    </div>
                    <div class="flex items-center mb-3">
                        <div class="bg-primary/20 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-darkgray font-medium">Interactive stadium maps & navigation</p>
                    </div>
                    <div class="flex items-center">
                        <div class="bg-primary/20 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-darkgray font-medium">Digital tickets & exclusive offers</p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#" class="transform transition-transform hover:scale-105">
                        <img src="assets/elements/google-play.png" alt="Get it on Google Play" class="w-56">
                    </a>
                    <a href="#" class="transform transition-transform hover:scale-105">
                        <img src="assets/elements/app-store.png" alt="Download on App Store" class="w-56">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<x-footer />
</body>
</html>
