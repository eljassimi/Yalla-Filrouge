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
        /* Custom styles */
        .service-card-top {
            border-top-left-radius: 50%;
            border-top-right-radius: 50%;
            height: 30px;
            width: 100%;
            background-color: #A22C29;
            position: absolute;
            top: -15px;
            left: 0;
        }
        .card-arc {
        border-radius: 1000px 1000px 0 0 ;
        overflow: hidden;
        }
        
        .login-arrow {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 25% 50%);
        }
        
        .hero-overlay {
            background: linear-gradient(to right, rgba(31, 31, 31, 0.9), rgba(31, 31, 31, 0.7));
        }
        
        .carousel-container {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="font-publica bg-darkgray text-white">
    <!-- Header -->
    <header class="fixed w-full top-0 z-50 backdrop-blur-sm border-b border-gray-800">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <a href="#" class="text-2xl font-bold flex items-center">
                   <img class="w-1/4" src="assets/logo/Yalla2.png" alt="logo">
                </a>
            </div>
            <div class="flex items-center space-x-2">
                <button class="bg-lightgray hover:bg-lightgray/30 text-white px-4 py-2 rounded-md text-sm md:text-base transition">
                    Start Yalla Journey
                </button>
                <button class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-md flex items-center text-sm md:text-base transition">
                   Login
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative pt-24 pb-16 md:pt-32 md:pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('assets/backgrounds/Herobg1.png');"></div>
        
        <div class="container mx-auto px-12 relative z-10">
            <div class="flex flex-col md:flex-row items-center">
                <div class="w-full ml-4 md:w-1/2 mb-8 md:mb-0">
                    <p class="text-lightgray mb-2">The Yalla Experience</p>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Welcome to Yalla</h1>
                    <p class="text-xl md:text-2xl mb-4">Your gateway to the 2030 FIFA World Cup journey!</p>
                    <p class="text-lightgray max-w-lg">
                        Stay updated with the latest news, match schedules, and exclusive insights as Morocco prepares to host this historic event.
                    </p>
                </div>
                <div class="w-full md:w-1/2 flex justify-center md:justify-end">
                    <img src="assets/elements/morocco-maps.png" alt="Morocco Map" class="w-3/4 md:w-full max-w-md">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 bg-darkgray">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 relative">
                <p class="text-lightgray uppercase tracking-wider mb-2">THE YALLA EXPERIENCE</p>
                <h2 class="text-3xl md:text-5xl font-bold">Yalla Services</h2>
                
                <!-- Carousel Navigation - Positioned next to the heading -->
                <div class="absolute right-0 top-1/2 transform -translate-y-1/2 flex space-x-4">
                    <button class="bg-transparent border border-primary hover:bg-primary/10 rounded-full w-12 h-12 flex items-center justify-center text-primary transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="bg-primary hover:bg-primary/90 rounded-full w-12 h-12 flex items-center justify-center text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        
            <div class="relative">
                <div class="overflow-x-auto pb-8 carousel-container hide-scrollbar">
                    <div class=" flex justify-center gap-32 space-x-6 min-w-max md:min-w-0">
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
                </div>
            </div>
        </div>
    </section>
    <!-- Events Section -->
    <section class="py-16 bg-darkgray">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 relative">
                <h2 class="text-3xl md:text-5xl font-bold">Morocco Events</h2>
                
                <!-- Carousel Navigation - Positioned next to the heading -->
                <div class="absolute right-0 top-1/2 transform -translate-y-1/2 flex space-x-4">
                    <button class="bg-transparent border border-primary hover:bg-primary/10 rounded-full w-12 h-12 flex items-center justify-center text-primary transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="bg-primary hover:bg-primary/90 rounded-full w-12 h-12 flex items-center justify-center text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <div class="flex justify-center gap-12">
                <!-- Event Card 1 -->
                <div class="bg-darkgray border border-gray-900 w-[400px] rounded-xl overflow-hidden">
                    <img src="assets/elements/TheatreEvent.jpg" alt="Theatre Mohammed VI" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3">Théâtre Mohammed VI</h3>
                        <p class="text-lightgray text-sm">
                            Enjoy world-class performances, from plays to concerts in this iconic cultural venue.
                        </p>
                    </div>
                </div>
                
                <!-- Event Card 2 -->
                <div class="bg-darkgray border border-gray-900 w-[400px] rounded-xl overflow-hidden">
                    <img src="assets/elements/GnaouaEvent2.jpg" alt="Gnaoua Festival" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3">Gnaoua Festival</h3>
                        <p class="text-lightgray text-sm">
                            Immerse yourself in the soulful sounds and rich traditions of Gnaoua music at this captivating festival.
                        </p>
                    </div>
                </div>
                
                <!-- Event Card 3 -->
                <div class="bg-darkgray border border-gray-900 w-[400px] rounded-xl overflow-hidden">
                    <img src="assets/elements/MawazineEvent.jpg" alt="Mawazine Festival" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3">Mawazine Festival</h3>
                        <p class="text-lightgray text-sm">
                            Celebrate the rhythm of the world with one of Morocco's most renowned music festivals featuring international and local performers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    


    <style>
        
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</body>
</html>