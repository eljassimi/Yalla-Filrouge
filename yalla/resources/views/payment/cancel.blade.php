<x-head />
<body class="bg-darkgray text-white font-poppins min-h-screen">
<x-navbar />
<section class="py-12 md:py-20 relative overflow-hidden">

    <div class="absolute top-0 left-0 w-48 h-48 bg-primary/10 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-primary/10 rounded-full translate-x-1/2 translate-y-1/2 blur-3xl"></div>

    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-12">
            <p class="text-lightgray uppercase tracking-wider mb-2">PAYMENT CANCELLED</p>
            <h1 class="text-3xl md:text-4xl font-bold inline-block relative">
                Your Payment Was Cancelled
                <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-primary"></span>
            </h1>
        </div>

        <div class="bg-darkgray/80 backdrop-blur-sm border border-gray-800 rounded-xl shadow-2xl overflow-hidden">
            <div class="w-full bg-gray-900/50 p-6 md:p-8">
                <div class="flex flex-col items-center justify-center py-8">
                    <!-- Cancel icon -->
                    <div class="w-20 h-20 bg-gray-800 rounded-full flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-lightgray" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>

                    <h2 class="text-2xl font-bold mb-4">Payment Not Completed</h2>
                    <p class="text-lightgray text-center max-w-md mb-8">
                        Your payment process was cancelled. No charges have been made to your account.
                    </p>

                    <!-- Reasons section -->
                    <div class="w-full max-w-md bg-gray-800/50 rounded-lg p-6 mb-8">
                        <h3 class="font-bold mb-4">Common Reasons for Cancellation:</h3>

                        <ul class="space-y-3 text-lightgray">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>You manually cancelled the payment process</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>There might have been an issue with your payment method</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>A network error occurred during the payment process</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Action buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 w-full max-w-md">
                        <a href="/checkout" class="bg-primary hover:bg-primary/90 text-white py-3 px-6 rounded-lg font-bold transition-all transform hover:scale-[1.02] active:scale-[0.98] shadow-lg flex items-center justify-center">
                            <span>Try Again</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </a>
                        <a href="/" class="border border-gray-700 hover:border-gray-600 text-white py-3 px-6 rounded-lg font-bold transition-all transform hover:scale-[1.02] active:scale-[0.98] flex items-center justify-center">
                            <span>Back to Home</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <div class="flex items-center justify-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.5 9.5v5M14.5 9.5v5" />
                </svg>
                <span class="text-lightgray text-sm">Need help with your payment?</span>
            </div>
            <p class="text-xs text-lightgray">Contact our support team at <span class="text-primary">support@yalla.com</span> or call <span class="text-primary">+212 5XX-XXXXXX</span></p>
        </div>
    </div>
</section>
</body>
</html>
