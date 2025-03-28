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
    <div class="text-center mb-12">
        <h1 class="text-5xl font-bold mb-2">Explore Tickets</h1>
        <p class="text-2xl">Book your tickets for upcoming Matchs</p>
    </div>

    <div class="relative max-w-xl mx-auto mb-12">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
        <input
            type="text"
            placeholder="Search for a match"
            class="w-full py-3 pl-10 pr-4 bg-[#0a0a0a] border-none rounded focus:outline-none focus:ring-2 focus:ring-[#a22c29]"
        />
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
