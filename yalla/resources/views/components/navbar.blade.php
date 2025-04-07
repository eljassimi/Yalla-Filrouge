<header class="w-full top-0 z-50 backdrop-blur-sm border-b border-gray-800">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <div class="flex items-center w-[150px]">
            <a href="/"><img class="w-full h-auto" src="/assets/logo/Yalla2.png" alt="logo"></a>
        </div>
        <nav class="hidden md:flex items-center gap-8">
            <a href="/matches" class="text-white hover:text-primary font-medium">Yalla Events</a>
            <a href="/tickets" class="text-white hover:text-primary font-medium">Yalla Stay</a>
            <a href="/tickets" class="text-white hover:text-primary font-medium">Yalla Ride</a>
            <a href="/tickets" class="text-white hover:text-primary font-medium">Yalla Health</a>
        </nav>
        <div class="flex items-center space-x-2">
            @guest
                <a href="/register" class="bg-lightgray/80 hover:bg-lightgray/30 text-white px-4 py-2  text-sm transition">
                    Start Yalla Journey
                </a>
                <a href="/login" class="bg-primary hover:bg-primary/90 text-white px-4 py-2 flex items-center text-sm transition">
                    Login
                </a>
            @endguest
            @auth
                <a href="/logout" class="bg-primary hover:bg-primary/90 text-white px-6 py-2 flex items-center text-sm transition">
                    logout
                </a>
            @endauth
        </div>
    </div>
</header>
