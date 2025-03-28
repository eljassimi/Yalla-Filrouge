<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yalla Match Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: "#1f1f1f",
                        foreground: "#ffffff",
                        card: "#0a0a0a",
                        primary: "#a22c29",
                        "primary-hover": "#8a2624",
                        accent: "#b9baa3",
                        border: "#313131",
                        muted: "#3b3b3b",
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #1f1f1f;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #1f1f1f;
        }

        ::-webkit-scrollbar-thumb {
            background: #3b3b3b;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #a22c29;
        }
    </style>
</head>
<body class="font-['Poppins']">
<!-- Header/Navbar -->
<header class="bg-[#1f1f1f] border-b border-[#313131]">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center w-[150px]">
                <a href="/"><img class="w-full h-auto" src="/assets/logo/Yalla2.png" alt="logo"></a>
            </div>
            <nav class="hidden md:flex space-x-8 ">
                <a href="/matches" class="text-white hover:text-gray-300">Matches</a>
                <a href="#" class="text-white hover:text-gray-300">Events</a>
                <a href="#" class="text-white hover:text-gray-300">Transport</a>
                <a href="#" class="text-white hover:text-gray-300">Booking</a>
            </nav>
            <div>
                <a href="/logout" class="bg-[#a22c29] text-white px-6 py-1 hover:bg-[#8a2624] transition-colors">
                    Logout
                </a>
            </div>
        </div>
    </div>
</header>

<main class="container mx-auto px-4 py-8">
    <!--Timeline -->
    <div class="pt-24 bg-lightgray py-12 px-6 relative overflow-hidden mb-10 bg-accent">
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


    <div class="space-y-4">
        <div class="bg-[#0a0a0a] w-[70%] mx-auto rounded p-4">
            @foreach($matches as $match)
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <img class="w-[80px] h-auto" src="{{$match["flag_team_1"]}}" alt="logo">
                    <div>
                        <h3 class="text-xl font-semibold">{{$match["team_1_name"]}}</h3>
                    </div>
                </div>
                <div class="flex flex-col align-center ">
                    <div class="text-xl self-center font-bold text-[#b9baa3]">VS</div>
                    <p class="text-xs text-[#b9baa3]">{{$match->location["address"]}}</p>
                </div>

                <div class="flex items-center space-x-4">
                    <div>
                        <h3 class="text-xl font-semibold text-right">{{$match["team_2_name"]}}</h3>
                    </div>
                    <img class="h-auto w-[80px]" src="{{$match["flag_team_2"]}}" alt="logo">
                </div>

                <a href="/ticket/{{$match['id']}}" class="bg-[#a22c29] text-white px-10 py-2  hover:bg-[#8a2624] transition-colors">
                    Get Your Ticket
                </a>
            </div>
            @endforeach
        </div>

    </div>
   <div class="flex justify-center mt-8">
        <div class="inline-flex bg-[#b9baa3]/80 rounded">
            <button class="px-4 py-2 text-white hover:bg-[#3b3b3b]">
                Previous
            </button>
            <button class="px-4 py-2 text-white bg-[#b9baa3]">
                1
            </button>
            <button class="px-4 py-2 text-white hover:bg-[#3b3b3b]">
                2
            </button>
            <button class="px-4 py-2 text-white hover:bg-[#3b3b3b]">
                3
            </button>
            <button class="px-4 py-2 text-white hover:bg-[#3b3b3b]">
                Next
            </button>
        </div>
    </div>

</main>
</body>
</html>
