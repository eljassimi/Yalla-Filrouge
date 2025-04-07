<x-head />
<body class="bg-darkgray text-white font-poppins min-h-screen">
<x-navbar />

<!-- Payment Section -->
<section class="py-12 md:py-20 relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute top-0 left-0 w-48 h-48 bg-primary/10 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-primary/10 rounded-full translate-x-1/2 translate-y-1/2 blur-3xl"></div>
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-12">
            <p class="text-lightgray uppercase tracking-wider mb-2">SECURE CHECKOUT</p>
            <h1 class="text-3xl md:text-4xl font-bold inline-block relative">
                Complete Your Payment
                <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-primary"></span>
            </h1>
        </div>

        <div class="bg-darkgray/80 backdrop-blur-sm border border-gray-800 rounded-xl shadow-2xl overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <!-- Order Summary -->
                <div class="w-full md:w-2/5 bg-gray-900/50 p-6 md:p-8">
                    <h2 class="text-xl font-bold mb-6 pb-3 border-b border-gray-700">Order Summary</h2>

                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between">
                            <span class="text-lightgray">Ticket Type</span>
                            <span class="font-medium">World Cup VIP Package</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-lightgray">Quantity</span>
                            <span class="font-medium">2</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-lightgray">Price per ticket</span>
                            <span class="font-medium">$250.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-lightgray">Booking fee</span>
                            <span class="font-medium">$25.00</span>
                        </div>
                    </div>

                    <div class="py-3 border-t border-gray-700">
                        <div class="flex justify-between text-lg font-bold">
                            <span>Total</span>
                            <span class="text-primary">$525.00</span>
                        </div>
                    </div>

                    <div class="mt-6 bg-primary/10 p-4 rounded-lg">
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-sm text-lightgray">Your tickets will be available in the Yalla mobile app after successful payment.</p>
                        </div>
                    </div>
                </div>

                <!-- Payment Form -->
                <div class="w-full md:w-3/5 p-6 md:p-8">
                    <h2 class="text-xl font-bold mb-6">Payment Details</h2>

                    <form id="payment-form">
                        <!-- Customer Information -->
                        <div class="mb-6 space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="first-name" class="block text-sm font-medium text-lightgray mb-1">First Name</label>
                                    <input type="text" id="first-name" class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all" required>
                                </div>
                                <div>
                                    <label for="last-name" class="block text-sm font-medium text-lightgray mb-1">Last Name</label>
                                    <input type="text" id="last-name" class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all" required>
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-lightgray mb-1">Email Address</label>
                                <input type="email" id="email" class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all" required>
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-lightgray mb-1">Phone Number</label>
                                <input type="tel" id="phone" class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all" required>
                            </div>
                        </div>

                        <!-- Stripe Elements -->
                        <div class="mb-6 space-y-4">
                            <div>
                                <label for="card-element" class="block text-sm font-medium text-lightgray mb-1">Card Information</label>
                                <div id="card-element" class="p-4 bg-gray-800 border border-gray-700 rounded-lg h-12 flex items-center">
                                    <!-- Stripe.js will insert the card element here -->
                                </div>
                                <div id="card-errors" class="text-red-500 text-sm mt-2" role="alert"></div>
                            </div>
                        </div>

                        <!-- Billing Address -->
                        <div class="mb-8 space-y-4">
                            <h3 class="text-md font-medium">Billing Address</h3>
                            <div>
                                <label for="address" class="block text-sm font-medium text-lightgray mb-1">Street Address</label>
                                <input type="text" id="address" class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all" required>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="city" class="block text-sm font-medium text-lightgray mb-1">City</label>
                                    <input type="text" id="city" class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all" required>
                                </div>
                                <div>
                                    <label for="postal-code" class="block text-sm font-medium text-lightgray mb-1">Postal Code</label>
                                    <input type="text" id="postal-code" class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all" required>
                                </div>
                            </div>
                            <div>
                                <label for="country" class="block text-sm font-medium text-lightgray mb-1">Country</label>
                                <select id="country" class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all" required>
                                    <option value="">Select Country</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                    <option value="MA">Morocco</option>
                                    <!-- Add more countries as needed -->
                                </select>
                            </div>
                        </div>

                        <!-- Terms and Payment Button -->
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <input id="terms" type="checkbox" class="w-4 h-4 mt-1 mr-2 accent-primary" required>
                                <label for="terms" class="text-sm text-lightgray">
                                    I agree to the <a href="#" class="text-primary hover:underline">Terms of Service</a> and <a href="#" class="text-primary hover:underline">Privacy Policy</a>
                                </label>
                            </div>

                            <button type="submit" id="submit-button" class="w-full bg-primary hover:bg-primary/90 text-white py-3 px-6 rounded-lg font-bold transition-all transform hover:scale-[1.02] active:scale-[0.98] shadow-lg flex items-center justify-center">
                                <span>Pay $525.00</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </button>

                            <div class="flex items-center justify-center space-x-4">
                                <img src="https://cdn.cdnlogo.com/logos/v/69/visa.svg" alt="Visa" class="h-8">
                                <img src="https://cdn.cdnlogo.com/logos/m/33/mastercard.svg" alt="Mastercard" class="h-8">
                                <img src="https://cdn.cdnlogo.com/logos/a/57/american-express.svg" alt="American Express" class="h-8">
                                <img src="https://cdn.cdnlogo.com/logos/p/26/paypal.svg" alt="PayPal" class="h-8">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Security Notice -->
        <div class="mt-8 text-center">
            <div class="flex items-center justify-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
                <span class="text-lightgray text-sm">Secure Payment Processed by Stripe</span>
            </div>
            <p class="text-xs text-lightgray">Your payment information is encrypted and securely processed by Stripe.</p>
        </div>
    </div>
</section>
</body>
</html>
