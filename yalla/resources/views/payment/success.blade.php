<x-head />
<body class="bg-darkgray text-white font-poppins min-h-screen">
<x-navbar />
<!-- Success Section -->
<section class="py-12 md:py-20 relative overflow-hidden">

    <div class="absolute top-0 left-0 w-48 h-48 bg-primary/10 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-primary/10 rounded-full translate-x-1/2 translate-y-1/2 blur-3xl"></div>


    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-12">
            <p class="text-lightgray uppercase tracking-wider mb-2">PAYMENT SUCCESSFUL</p>
            <h1 class="text-3xl md:text-4xl font-bold inline-block relative">
                Thank You For Your Purchase
                <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-primary"></span>
            </h1>
        </div>


        <div class="bg-darkgray/80 backdrop-blur-sm border border-gray-800 rounded-xl shadow-2xl overflow-hidden">
            <div class="w-full bg-gray-900/50 p-6 md:p-8">
                <div class="flex flex-col items-center justify-center py-8">
                    <!-- Success icon -->
                    <div class="w-20 h-20 bg-primary/20 rounded-full flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>

                    <h2 class="text-2xl font-bold mb-4">Payment Confirmed!</h2>
                    <p class="text-lightgray text-center max-w-md mb-6">
                        Your payment has been successfully processed. Your tickets are now available in the Yalla mobile app.
                    </p>

                    <!-- Order details -->
                    <div class="w-full max-w-md bg-gray-800/50 rounded-lg p-6 mb-6">
                        <h3 class="font-bold mb-4 pb-2 border-b border-gray-700">Order Details</h3>

                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-lightgray">Order ID:</span>
                                <span class="font-medium">#ORD-123456</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-lightgray">Event:</span>
                                <span class="font-medium">Event Name</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-lightgray">Date:</span>
                                <span class="font-medium" id="current-date">April 8, 2025</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-lightgray">Amount Paid:</span>
                                <span class="font-medium text-primary">1200 DH</span>
                            </div>
                        </div>
                    </div>

                    <!-- Action buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 w-full max-w-md">
                        <a href="/dashboard" class="bg-primary hover:bg-primary/90 text-white py-3 px-6 rounded-lg font-bold transition-all transform hover:scale-[1.02] active:scale-[0.98] shadow-lg flex items-center justify-center">
                            <span>View Tickets</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                            </svg>
                        </a>
                        <a href="/" class="border border-gray-700 hover:border-gray-600 text-white py-3 px-6 rounded-lg font-bold transition-all transform hover:scale-[1.02] active:scale-[0.98] flex items-center justify-center">
                            <span>Back to Home</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<x-footer />
</body>
</html>
