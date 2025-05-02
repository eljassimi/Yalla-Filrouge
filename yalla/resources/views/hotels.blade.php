<x-head />
<body class="min-h-screen bg-darkgray flex flex-col text-white font-['Poppins']">

<!-- Header -->
<x-navbar />

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
                        <a href="/skip-hotel" class="px-6 hover:bg-transparent hover:border border-primary py-2 rounded mt-2 bg-primary text-white">Skip</a>
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
<main class="flex-1 py-6 px-6 bg-darkgray">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($hotels as $hotel)
                <div class="shadow-xl rounded-lg overflow-hidden transform transition-transform hover:-translate-y-2 bg-darkgray flex flex-col min-h-[400px]">
                    <div class="h-56 bg-gray-800 relative aspect-[4/3]">
                        <img src="{{ asset('assets/' . $hotel['main_image']) }}" alt="{{ $hotel['name'] }}" class="w-full h-full object-cover" onerror="this.src='/assets/fallback.jpg'">
                    </div>
                    <div class="p-4 flex flex-col flex-1">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-lg text-white font-bold">{{ $hotel['name'] }}</h3>
                        </div>
                        <p class="text-sm text-white mb-2">{{ $hotel->location['city'] }}</p>
                        <p class="text-sm mb-4 text-white">{{ substr($hotel['description'], 0, 100) . '...' }}</p>                        <div class="mt-auto">
                            <span class="font-bold text-white text-lg">{{ $hotel->room[0]['price_per_night'] }} DH</span>
                            <span class="text-white">/night</span>
                        </div>
                        <a href="/hotel-details/{{ $hotel['id'] }}" class="mt-4 bg-primary hover:bg-primary/90 text-white px-4 py-1.5 text-sm font-medium rounded-md transition inline-block">
                            Details
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Pagination -->
        <div class="flex justify-center mt-8">
            {{ $hotels->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</main>

<x-footer />
</body>
</html>
