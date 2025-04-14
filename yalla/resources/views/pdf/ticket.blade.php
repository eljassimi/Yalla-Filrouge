<x-head />
<body class="bg-darkgray min-h-screen flex items-center justify-center p-4 font-['Poppins']">
<div class="max-w-md w-full my-4">
    <div class="bg-darkgray text-white rounded-2xl overflow-hidden shadow-2xl relative transform transition-transform hover:scale-105">
        <div class="absolute top-0 left-0 w-full h-2 bg-primary"></div>

        <!-- Ticket Header -->
        <div class="relative p-6 pb-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center">
                  <img src="assets/logo/Yalla2.png" class="w-24">
                </div>

                <div class="text-lightgray text-sm">
                    #YE2030-M7842
                </div>
            </div>
        </div>

        <div class="px-6 pb-6">
            <h2 class="text-2xl font-bold mb-1">Mawazine Festival</h2>
            <p class="text-lightgray text-sm mb-4">Experience the rhythm of the world</p>

            <div class="relative py-4">
                <div class="absolute left-0 w-full h-px bg-gray-700"></div>
                <div class="absolute left-0 w-16 h-px bg-primary"></div>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div>
                    <p class="text-lightgray text-xs">DATE</p>
                    <p class="font-semibold">JUL 05, 2030</p>
                </div>
                <div>
                    <p class="text-lightgray text-xs">TIME</p>
                    <p class="font-semibold">19:30 PM</p>
                </div>
                <div>
                    <p class="text-lightgray text-xs">VENUE</p>
                    <p class="font-semibold">OLM Souissi, Rabat</p>
                </div>
                <div>
                    <p class="text-lightgray text-xs">SEAT</p>
                    <p class="font-semibold">VIP Zone A-12</p>
                </div>
            </div>

            <div class="bg-gray-800/50 p-4 rounded-lg mb-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-primary/20 rounded-full flex items-center justify-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-lightgray text-xs">ATTENDEE</p>
                        <p class="font-bold text-lg">Mohammed Alami</p>
                    </div>
                </div>
            </div>

            <div class="flex">
                <div class="w-1/2 pr-4">
                    <div class="mt-4">
                        <p class="text-lightgray text-xs mb-1">POWERED BY</p>
                        <p class="text-sm font-semibold">Yalla Experience 2030</p>
                    </div>
                </div>

                <div class="w-1/2 flex flex-col items-center justify-center">
                    <div id="qrcode" class="bg-white p-2 rounded-lg mb-2"></div>
                    <p class="text-xs text-center text-lightgray">Scan for entry</p>
                </div>
            </div>
        </div>
        <div class="bg-primary/10 p-4 text-center text-xs text-lightgray">
            <p>This ticket is subject to the terms and conditions of the event.</p>
        </div>

        <div class="absolute bottom-0 left-0 w-full h-1 bg-primary/50"></div>
    </div>

    <div class="mt-6 text-center">
        <button class="bg-primary hover:bg-primary/90 text-white font-bold py-2 px-6 rounded-full transition-all transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:ring-offset-2">
            Print Ticket
        </button>
    </div>

</div>
</body>
</html>
