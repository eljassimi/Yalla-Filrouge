<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yalla Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        primary: '#A22C29',
                        darkgray: '#1F1F1F',
                        lightgray: '#B9BAA3',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col text-white font-['Poppins']">

<!-- Header -->
<header class="fixed w-full top-0 z-50 backdrop-blur-sm border-b border-gray-800">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <div class="flex items-center w-[150px]">
            <a href="/"><img class="w-full h-auto" src="/assets/logo/Yalla2.png" alt="logo"></a>
        </div>
        <nav class="hidden md:flex items-center gap-8">
            <a href="/tickets" class="text-white hover:text-primary font-medium">Tickets</a>
            <a href="#" class="text-white hover:text-primary font-medium">Events</a>
            <a href="#" class="text-white hover:text-primary font-medium">Transport</a>
            <a href="#" class="text-white hover:text-primary font-medium">Booking</a>
        </nav>
        <button class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-md text-sm transition">
            Logout
        </button>
    </div>
</header>

<!--Timeline -->
<div class="pt-24 bg-lightgray py-12 px-6 relative overflow-hidden">
    <div class="max-w-4xl mx-auto relative z-10">
        <div class="flex flex-col md:flex-row items-center justify-between mb-8">
            <div class="flex items-center justify-between w-full">
                <div class="flex flex-col items-center relative">
                    <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center z-10 shadow-md mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-white font-bold text-base mt-1">EVENT</span>
                        <span class="text-primary text-xs font-medium">Done</span>
                    </div>
                </div>

                <div class="hidden md:block h-1 bg-primary flex-grow relative z-0" style="margin: 0; position: relative; top: -33px;"></div>

                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full bg-darkgray border-2 border-gray-700 flex items-center justify-center z-10 shadow-sm mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-lightgray" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-white font-bold text-base mt-1">ACCOMMODATION</span>
                        <span class=" text-xs font-medium">In progress</span>
                    </div>
                </div>

                <div class="hidden md:block h-1 bg-gray-700 flex-grow relative z-0" style="margin: 0; position: relative; top: -33px;"></div>

                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full bg-darkgray border-2 border-gray-700 flex items-center justify-center z-10 shadow-sm mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-lightgray" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-white font-bold text-base mt-1">TRANSPORT</span>
                        <span class=" text-xs font-medium">Next</span>
                    </div>
                </div>

                <div class="hidden md:block h-1 bg-gray-700 flex-grow relative z-0" style="margin: 0; position: relative; top: -33px;"></div>

                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full bg-darkgray border-2 border-gray-700 flex items-center justify-center z-10 shadow-sm mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-lightgray" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-white font-bold text-base mt-1">PAYEMENT</span>
                        <span class=" text-xs font-medium">Next</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<main class="flex-1  py-6 px-6">
    <div class="max-w-6xl mx-auto">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            @foreach($hotels as $hotel)
            <div class="shadow-xl rounded-lg overflow-hidden  transform transition-transform hover:-translate-y-2">
                <div class="h-56 bg-gray-800 relative">
                    <img src="/assets/{{$hotel["main_image"]}}" alt="Mountain View Villa" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-1 text-darkgray">
                        <h3 class="text-lg font-bold">{{$hotel["name"]}}</h3>
                    </div>
                    <p class="text-sm text-darkgray mb-2">{{$hotel->location["city"]}}</p>
                    <p class="text-sm mb-4 text-darkgray">{{$hotel["description"]}}</p>
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="font-bold text-darkgray text-lg">{{$hotel->room[0]["price_per_night"]}} DH</span>
                            <span class="text-darkgray">/night</span>
                        </div>
                        <a href="/hotel-details/{{$hotel['id']}}" class="bg-primary hover:bg-primary/90 text-white px-4 py-1.5 text-sm font-medium rounded-md transition">
                            Details
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</main>
</body>
</html>
