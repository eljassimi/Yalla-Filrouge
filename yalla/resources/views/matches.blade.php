<x-head />
<body class="font-['Poppins'] bg-darkgray">
<!-- Header/Navbar -->
<x-navbar />
<!--Timeline -->
<div class="pt-24 bg-lightgray py-12 px-6 relative overflow-hidden">
        <div class="max-w-4xl mx-auto relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-between mb-8">
                <div class="flex items-center justify-between w-full">
                    <div class="flex flex-col items-center relative">
                        <div class="w-16 h-16 rounded-full bg-darkgray border-2 border-gray-700 flex items-center justify-center z-10 shadow-md mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="text-white font-bold text-base mt-1">EVENT</span>
                            <span class=" text-xs font-medium">In progress</span>
                        </div>
                    </div>

                    <div class="hidden md:block h-1 bg-gray-700 flex-grow relative z-0" style="margin: 0; position: relative; top: -33px;"></div>

                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-darkgray border-2 border-gray-700 flex items-center justify-center z-10 shadow-sm mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-lightgray" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="text-white font-bold text-base mt-1">ACCOMMODATION</span>
                            <span class=" text-xs font-medium">Next</span>
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

<main class="container mx-auto  flex flex-col  px-4 py-8">

    <!-- Search Section -->
    <div class="flex justify-center mt-8 mb-8">
        <div class="relative w-[70%] mx-auto">
            <input
                type="text"
                placeholder="Search for matches..."
                class="w-full py-3 px-5 bg-[#1a1a1a] text-white rounded-lg border border-gray-700 focus:ring-2 focus:ring-[#b9baa3] focus:outline-none"
            />
            <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#b9baa3] hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m2.15-5.65a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </div>
    </div>

    <div class="space-y-4">
            @foreach($matches as $match)
        <div class="bg-[#0a0a0a] w-[70%] mx-auto rounded p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <img class="w-[80px] h-auto" src="{{$match["flag_team_1"]}}" alt="logo">
                    <div>
                        <h3 class="text-xl text-white font-semibold">{{$match["team_1_name"]}}</h3>
                    </div>
                </div>
                <div class="flex flex-col align-center ">
                    <div class="text-xl self-center font-bold text-[#b9baa3]">VS</div>
                    <p class="text-xs text-[#b9baa3]">{{$match->location["address"]}}</p>
                </div>

                <div class="flex items-center space-x-4">
                    <div>
                        <h3 class="text-xl text-white font-semibold text-right">{{$match["team_2_name"]}}</h3>
                    </div>
                    <img class="h-auto w-[80px]" src="{{$match["flag_team_2"]}}" alt="logo">
                </div>

                <a href="/ticket/{{$match['id']}}" class="bg-[#a22c29] text-white px-10 py-2  hover:bg-[#8a2624] transition-colors">
                    Get Your Ticket
                </a>
            </div>
        </div>
            @endforeach

    </div>
    <!-- pagination -->
    <div class="flex justify-center mt-8">
        {{ $matches->links('vendor.pagination.tailwind') }}
    </div>
</main>
</body>
</html>
