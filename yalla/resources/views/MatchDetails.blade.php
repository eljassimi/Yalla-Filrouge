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
<body class="bg-background min-h-screen flex flex-col font-['Poppins']">

<header class="bg-[#1f1f1f] border-b border-[#313131]">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center w-[150px]">
                <a href="/"><img class="w-full h-auto" src="/assets/logo/Yalla2.png" alt="logo"></a>
            </div>
            <nav class="hidden md:flex space-x-8 ">
                <a href="/tickets" class="text-white hover:text-gray-300">Tickets</a>
                <a href="/" class="text-white hover:text-gray-300">Events</a>
                <a href="/" class="text-white hover:text-gray-300">Transport</a>
                <a href="/" class="text-white hover:text-gray-300">Booking</a>
            </nav>
            <div>
                <a href="/logout" class="bg-[#a22c29] text-white px-6 py-1 hover:bg-[#8a2624] transition-colors">
                    Logout
                </a>
            </div>
        </div>
    </div>
</header>

<main class="flex-grow">
    <div class="bg-accent p-6 shadow-md relative overflow-hidden">
        <div class="container mx-auto relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold text-background">{{$match['name']}}</h1>
                    <div class="flex flex-col sm:flex-row gap-4 mt-2">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-background" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-background">{{ \Carbon\Carbon::parse($match['date'])->format('Y-m-d') }}</span>                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-background" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-background"><span class="text-background">{{ \Carbon\Carbon::parse($match['date'])->format('H:i') }}</span></span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-background" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-background">{{$match->location["address"]}}</span>
                        </div>
                    </div>
                </div>
                <a href="/tickets" class="flex items-center text-primary mt-4 md:mt-0 hover:text-opacity-80 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <strong>Back to Events</strong>
                </a>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-primary opacity-5 rounded-bl-full"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-primary opacity-5 rounded-tr-full"></div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 bg-accent p-4 rounded shadow-lg">
                <div class="relative">
                    <div class="w-full aspect-[4/3] rounded  relative overflow-hidden ">
                        <img alt="feild" class="w-[90%] m-auto " src="/assets/Terrain/terran.png">
                    </div>
                </div>

                <div class="mt-4 flex items-center">
                    <span class="inline-block w-3 h-3 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                    <span class="text-sm text-gray-700">Seats are being booked in real-time. Don't miss out!</span>
                </div>
            </div>

            <div class="bg-accent p-6 rounded shadow-lg relative overflow-hidden ">
                <h2 class="text-2xl font-bold mb-6 text-background">Ticket Summary</h2>

                <div class="mb-4">
                    <div class="relative inline-block w-full group">
                        <select id="ticketType" class="w-full bg-black text-white border-none rounded-none h-12 px-4 flex justify-between items-center">
                            @foreach($ticket_types as $ticket_type)
                                <option class="py-3 px-4 block text-black hover:bg-[#f1f1f1]" value="{{$ticket_type['price']}}"> {{$ticket_type["name"]}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-8">
                    <div class="relative inline-block w-full group">
                        <select id="ticketQuantity" class="w-full bg-black text-white border-none rounded-none h-12 px-4 flex justify-between items-center">
                            <option class="py-3 px-4 block text-black hover:bg-[#f1f1f1]" value="1">1 Ticket</option>
                            <option class="py-3 px-4 block text-black hover:bg-[#f1f1f1]" value="2">2 Tickets</option>
                            <option class="py-3 px-4 block text-black hover:bg-[#f1f1f1]" value="3">3 Tickets</option>
                            <option class="py-3 px-4 block text-black hover:bg-[#f1f1f1]" value="4">4 Tickets</option>
                        </select>
                    </div>
                </div>

                <div class="mb-6 bg-white bg-opacity-50 p-4 rounded">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm text-gray-600">Ticket price</span>
                        <span id="ticketPrice" class="text-sm text-background">0 DH</span>
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm text-gray-600">Service fee</span>
                        <span class="text-sm text-background">0 DH</span>
                    </div>
                    <div class="border-t border-gray-300 my-2"></div>
                    <div class="flex justify-between text-background items-center font-medium">
                        <span>Total</span>
                        <span id="totalPrice">0 DH</span>
                    </div>
                </div>

                <div class="space-y-4">
                    <button class="w-full bg-primary hover:bg-opacity-90 text-white py-4 rounded-none transition-all duration-300 hover:shadow-lg flex items-center justify-center">
                        <span>Continue</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                    <form action="/tickets" method="get">
                    <button type="submit" class="w-full border border-primary text-primary hover:bg-primary hover:bg-opacity-10 py-4 rounded-none transition-all duration-300">
                        Back to Matches
                    </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</main>


<script>

    function updatePrice() {
        const ticketType = document.getElementById('ticketType');
        const ticketQuantity = document.getElementById('ticketQuantity');

        const ticketPrice = parseFloat(ticketType.value);
        const quantity = parseInt(ticketQuantity.value);

        const totalPrice = ticketPrice * quantity;

        document.getElementById('ticketPrice').textContent = `${ticketPrice} DH`;
        document.getElementById('totalPrice').textContent = `${totalPrice} DH`;
    }

    document.getElementById('ticketType').addEventListener('change', updatePrice);
    document.getElementById('ticketQuantity').addEventListener('change', updatePrice);

    updatePrice();
</script>
</body>
</html>
