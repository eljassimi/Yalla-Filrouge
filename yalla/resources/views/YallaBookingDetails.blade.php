<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yalla - Moroccan Riad Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
</head>
<body class="min-h-screen bg-[#fbfbfb] flex flex-col">
<header class="w-full top-0 z-50 backdrop-blur-sm border-b bg-lightgray">
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

<main class="flex-1 container mx-auto px-4 py-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
        <div class="md:col-span-2 h-[400px] md:h-[500px] relative rounded-lg overflow-hidden">
            <img src="/assets/stay/stay2.png" alt="Moroccan Riad with Pool" class="w-full h-full object-cover"/>
        </div>
        <div class="grid grid-cols-1 gap-4">
            <div class="h-[160px] md:h-[240px] relative rounded-lg overflow-hidden">
                <img src="/assets/stay/stay1.png" alt="Bedroom" class="w-full h-full object-cover"/>
            </div>
            <div class="h-[160px] md:h-[240px] relative rounded-lg overflow-hidden">
                <img src="/assets/stay/stay3.png" alt="Living Room" class="w-full h-full object-cover"/>
            </div>
        </div>
        <div class="h-[160px] md:h-[240px] relative rounded-lg overflow-hidden">
            <img src="/assets/stay/stay4.png" alt="Bathroom" class="w-full h-full object-cover"/>
        </div>
        <div class="h-[160px] md:h-[240px] relative rounded-lg overflow-hidden">
            <img src="/assets/stay/stay5.png" alt="Bedroom 2" class="w-full h-full object-cover"/>
        </div>
    </div>
    <div class="flex  flex-col lg:flex-row gap-8">
        <div class="flex-1">
            <div class="mb-8">
                <h2 class="text-2xl font-bold mb-6 text-[#222222]">Property Overview</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                    <div class="bg-[#f0f0f0] p-4 rounded-lg flex flex-col items-center justify-center">
                        <div class="w-8 h-8 mb-2 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#A22C29" d="M8 5c-.5 0-1 .21-1.39.6S6 6.45 6 7v3c-.53 0-1 .19-1.41.59S4 11.47 4 12v5h1.34L6 19h1l.69-2h8.67l.64 2h1l.66-2H20v-5c0-.53-.19-1-.59-1.41S18.53 10 18 10V7c0-.55-.2-1-.61-1.4S16.5 5 16 5M8 7h3v3H8m5-3h3v3h-3m-7 2h12v3H6Z"/></svg>
                        </div>
                        <p class="text-center">
                            <span class="font-bold">3</span> Bedrooms
                        </p>
                    </div>
                    <div class="bg-[#f0f0f0] p-4 rounded-lg flex flex-col items-center justify-center">
                        <div class="w-8 h-8 mb-2 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="#A22C29" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M21 13v3a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4v-2.4a.6.6 0 0 1 .6-.6zm-5 7l1 2m-9-2l-1 2m14-9V7a4 4 0 0 0-4-4h-5"/><path d="M15.4 8H8.6c-.331 0-.596-.268-.56-.598C8.186 6.075 8.863 3 12 3s3.814 3.075 3.96 4.402c.036.33-.229.598-.56.598"/></g></svg>
                        </div>
                        <p class="text-center">
                            <span class="font-bold">3</span> Bathrooms
                        </p>
                    </div>
                    <div class="bg-[#f0f0f0] p-4 rounded-lg flex flex-col items-center justify-center">
                        <div class="w-8 h-8 mb-2 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6 text-[#a22c29]"><circle cx="12" cy="7" r="4" /><path d="M5 21v-2a7 7 0 0 1 14 0v2" />
                            </svg>
                        </div>
                        <p class="text-center">
                            <span class="font-bold">6</span> Guests
                        </p>
                    </div>
                    <div class="bg-[#f0f0f0] p-4 rounded-lg flex flex-col items-center justify-center">
                        <div class="w-8 h-8 mb-2 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6 text-[#a22c29]"><path d="M3 3h18v18H3z" /><path d="M3 9h18M9 21V9" />
                            </svg>
                        </div>
                        <p class="text-center">
                            <span class="font-bold">250</span> m²
                        </p>
                    </div>
                </div>
                <p class="text-[#222222] leading-relaxed">
                    Experience authentic Moroccan luxury in this stunning 3-bedroom riad. Featured with a private pool,
                    traditional courtyard, and modern amenities, this property perfectly blends traditional
                    architecture with contemporary comfort. The house has been recently renovated while
                    preserving its original charm and character.
                </p>
            </div>

        </div>

    </div>
</main>
</body>
</html>
