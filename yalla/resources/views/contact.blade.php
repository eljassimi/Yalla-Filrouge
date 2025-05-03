<x-head />
<body class="bg-darkgray text-white">

    <x-navbar />
<div class="flex h-screen overflow-hidden">
    <div class="flex-1 flex flex-col overflow-hidden">
        <main class="flex-1 overflow-y-auto bg-black p-4">
            <div id="contact-page" class="page-content max-w-4xl mx-auto">
                <div class="mb-8">
                    <h1 class="text-3xl font-bold">Contact Us</h1>
                    <p class="text-lightgray mt-2">Need assistance with your World Cup 2030 journey? We're here to help.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-10">
                    <!-- Contact methods -->
                    <div class="bg-darkgray rounded-lg p-6 shadow">
                        <div class="p-3 rounded-full bg-primary bg-opacity-20 text-primary mb-4 w-12 h-12 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Email</h3>
                        <p class="text-lightgray mb-3">We'll respond within 24 hours</p>
                        <a href="mailto:support@yalla2030.com" class="text-primary hover:underline">support@yalla2030.com</a>
                    </div>

                    <div class="bg-darkgray rounded-lg p-6 shadow">
                        <div class="p-3 rounded-full bg-primary bg-opacity-20 text-primary mb-4 w-12 h-12 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Phone</h3>
                        <p class="text-lightgray mb-3">Available from 8am - 8pm</p>
                        <a href="tel:+212522123456" class="text-primary hover:underline">+212 522 123 456</a>
                    </div>

                    <div class="bg-darkgray rounded-lg p-6 shadow">
                        <div class="p-3 rounded-full bg-primary bg-opacity-20 text-primary mb-4 w-12 h-12 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Live Chat</h3>
                        <p class="text-lightgray mb-3">Available 24/7</p>
                        <button class="text-primary hover:underline">Start Chat</button>
                    </div>
                </div>

                <!-- Contact form -->
                <div class="bg-darkgray rounded-lg shadow p-6">
                    <h2 class="text-2xl font-semibold mb-6">Send us a message</h2>
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-lightgray mb-2">Full Name</label>
                                <input type="text" id="name" class="w-full p-3 bg-black border border-gray-700 rounded-lg focus:outline-none focus:border-primary" placeholder="Your full name">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-lightgray mb-2">Email Address</label>
                                <input type="email" id="email" class="w-full p-3 bg-black border border-gray-700 rounded-lg focus:outline-none focus:border-primary" placeholder="Your email address">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="subject" class="block text-sm font-medium text-lightgray mb-2">Subject</label>
                            <input type="text" id="subject" class="w-full p-3 bg-black border border-gray-700 rounded-lg focus:outline-none focus:border-primary" placeholder="What is this regarding?">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-lightgray mb-2">Message</label>
                            <textarea id="message" rows="5" class="w-full p-3 bg-black border border-gray-700 rounded-lg focus:outline-none focus:border-primary" placeholder="How can we help you?"></textarea>
                        </div>
                        <button type="submit" class="w-full md:w-auto px-6 py-3 bg-primary hover:bg-opacity-90 text-white font-medium rounded-lg transition-colors duration-200">Send Message</button>
                    </form>
                </div>

                <!-- FAQ section -->
                <div class="mt-10">
                    <h2 class="text-2xl font-semibold mb-6">Frequently Asked Questions</h2>
                    <div class="space-y-4">
                        <div class="bg-darkgray rounded-lg p-4">
                            <h3 class="font-medium text-lg mb-2">How can I purchase tickets for the World Cup 2030?</h3>
                            <p class="text-lightgray">Tickets can be purchased directly through our platform. Simply navigate to the Tickets section, select your desired matches, and follow the checkout process.</p>
                        </div>
                        <div class="bg-darkgray rounded-lg p-4">
                            <h3 class="font-medium text-lg mb-2">Can I modify my hotel reservation?</h3>
                            <p class="text-lightgray">Yes, you can modify your hotel reservation up to 72 hours before your scheduled check-in date. Visit the My Bookings section to make changes.</p>
                        </div>
                        <div class="bg-darkgray rounded-lg p-4">
                            <h3 class="font-medium text-lg mb-2">How does transportation work between cities?</h3>
                            <p class="text-lightgray">Our platform offers various transportation options between host cities. You can book train tickets, bus tickets, or arrange private transportation directly through Yalla.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>
