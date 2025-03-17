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
            <img src="/assets/{{$hotel["main_image"]}}" alt="Moroccan Riad with Pool" class="w-full h-full object-cover"/>
        </div>
        <div class="grid grid-cols-1 gap-4">
            @foreach($hotel->gallery_images as $image)
            <div class="h-[160px] md:h-[240px] relative rounded-lg overflow-hidden">
                <img src="/assets/{{ $image }}" alt="Bedroom" class="w-full h-full object-cover"/>
            </div>
        @endforeach
        </div>
    </div>
    <div class="flex  flex-col lg:flex-row gap-8">
        <div class="flex-1">
            <div class="mb-8">
                <h2 class="text-2xl font-bold mb-6 text-[#222222]">Property Overview</h2>
                <p class="text-[#222222] leading-relaxed">
                    {{$hotel["description"]}}
                </p>
            </div>
            <!-- Location -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold mb-6 text-[#222222]">Location</h2>
                <div class="h-[300px] relative rounded-lg overflow-hidden mb-6 bg-gray-200">
                    <iframe class="w-full h-full object-cover" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.8620727902903!2d-7.6497275247946614!3d33.58293024236642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d2e77f3d8aaf%3A0x9169b10a83e53ab!2sMohammed%20V%20Stadium!5e0!3m2!1sfr!2sma!4v1742225435829!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <!-- Booking Panel -->
        <div class="w-full lg:w-[380px] shrink-0">
            <div class="bg-white p-6 rounded-lg shadow-md border border-[#d9d9d9]">
                <div class="flex justify-between items-baseline mb-6">
                    <div class="text-2xl font-bold"><div id="price">$250</div><span class="text-[#afafaf] text-lg font-normal">/night</span></div>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="mb-4">
                        <select name="room_type" class="w-full border border-[#d9d9d9] rounded-md p-2">
                            @foreach($rooms as $room)
                            <option value="{{$room['price_per_night']}}">{{$room->roomType["type"]}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div>
                            <label class="block text-sm mb-2">Check-in</label>
                            <div class="relative">
                                <input type="date" name="check-in-date" class="w-full border border-[#d9d9d9] rounded-md p-2"/>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm mb-2">Check-out</label>
                            <div class="relative">
                                <input type="date" name="check-out-date" class="w-full border border-[#d9d9d9] rounded-md p-2"/>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between">
                            <span>$250 x 5 nights</span>
                            <span>$1,250</span>
                        </div>
                        <div class="border-t border-[#d9d9d9] pt-3 mt-3">
                            <div class="flex justify-between font-bold">
                                <span>Total</span>
                                <span>$1,250</span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-[#a22c29] hover:bg-[#8a2624] text-white py-3 rounded-md">
                        Book Now
                    </button>
                </form>
            </div>
        </div>


    </div>
</main>
</body>
</html>
