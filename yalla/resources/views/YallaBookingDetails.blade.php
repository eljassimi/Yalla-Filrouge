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
</main>
</body>
</html>
