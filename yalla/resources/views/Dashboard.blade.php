<x-head />
<body class="bg-darkgray text-white">

<div class="flex h-screen overflow-hidden">
    <aside class="hidden md:flex md:flex-col w-64 bg-darkgray border-r border-gray-700">
        <div class="p-4 border-b border-gray-700">
            <img src="/assets/logo/Yalla2.png" class="w-32">
            <p class="text-sm text-lightgray">Admin Dashboard</p>
        </div>
        <nav class="flex-1 overflow-y-auto py-4">
            <ul>
                <li class="mb-1">
                    <a href="#"  class="flex items-center px-4 py-3 text-lightgray hover:bg-gray-800 hover:text-white rounded-lg mx-2 transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="mb-1">
                    <a href="#" class="flex items-center px-4 py-3 text-lightgray hover:bg-gray-800 hover:text-white rounded-lg mx-2 transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        Users
                    </a>
                </li>
                <li class="mb-1">
                    <a href="#" class="flex items-center px-4 py-3 text-lightgray hover:bg-gray-800 hover:text-white rounded-lg mx-2 transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Matches
                    </a>
                </li>
                <li class="mb-1">
                    <a href="#" class="flex items-center px-4 py-3 text-lightgray hover:bg-gray-800 hover:text-white rounded-lg mx-2 transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                        Hotels
                    </a>
                </li>
                <li class="mb-1">
                    <a href="#" class="flex items-center px-4 py-3 text-lightgray hover:bg-gray-800 hover:text-white rounded-lg mx-2 transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                        Transport
                    </a>
                </li>
            </ul>
        </nav>
        <div class="p-4 border-t border-gray-700">
            <a href="#" class="flex items-center text-lightgray hover:text-white transition-colors">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                Logout
            </a>
        </div>
    </aside>

    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="bg-darkgray border-b border-gray-700 shadow-sm">
            <div class="flex items-center justify-between p-4">
                <button id="mobile-menu-button" class="md:hidden text-lightgray hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <img src="/assets/logo/Yalla2.png" alt="logo" class=" w-24 md:hidden">

                <div class="hidden md:flex items-center flex-1 mx-4">
                    <div class="relative w-full max-w-md">
                        <input type="text" placeholder="Search..." class="w-full bg-gray-800 text-white rounded-lg pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="mr-3 text-right hidden md:block">
                        <p class="text-sm font-medium">Admin User</p>
                        <p class="text-xs text-lightgray">Administrator</p>
                    </div>
                    <div class="h-10 w-10 rounded-full bg-primary flex items-center justify-center text-white font-medium">
                        AU
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-y-auto bg-black p-4">
            <div id="dashboard-page" class="page-content">
                <div class="mb-6">
                    <h1 class="text-2xl font-bold">Dashboard</h1>
                    <p class="text-lightgray">Welcome to Yalla Admin Dashboard</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                    <div class="bg-darkgray rounded-lg p-4 shadow">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-primary bg-opacity-20 text-primary mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-lightgray text-sm">Total Users</p>
                                <h3 class="text-2xl font-bold">1,254</h3>
                            </div>
                        </div>
                    </div>

                    <div class="bg-darkgray rounded-lg p-4 shadow">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-primary bg-opacity-20 text-primary mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-lightgray text-sm">Upcoming Matches</p>
                                <h3 class="text-2xl font-bold">42</h3>
                            </div>
                        </div>
                    </div>

                    <div class="bg-darkgray rounded-lg p-4 shadow">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-primary bg-opacity-20 text-primary mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-lightgray text-sm">Hotels</p>
                                <h3 class="text-2xl font-bold">28</h3>
                            </div>
                        </div>
                    </div>

                    <div class="bg-darkgray rounded-lg p-4 shadow">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-primary bg-opacity-20 text-primary mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-lightgray text-sm">Transports</p>
                                <h3 class="text-2xl font-bold">56</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-darkgray rounded-lg shadow mb-6">
                    <div class="p-4 border-b border-gray-700">
                        <h2 class="text-lg font-semibold">Recent Activity</h2>
                    </div>

                    <div class="p-4">
                        <ul class="divide-y divide-gray-700">
                            <li class="py-3">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-primary flex items-center justify-center text-white font-medium mr-3">
                                        JD
                                    </div>
                                    <div>
                                        <p class="text-sm">John Doe registered as a new user</p>
                                        <p class="text-xs text-lightgray">2 hours ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-primary flex items-center justify-center text-white font-medium mr-3">
                                        JD
                                    </div>
                                    <div>
                                        <p class="text-sm">John Doe registered as a new user</p>
                                        <p class="text-xs text-lightgray">2 hours ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-primary flex items-center justify-center text-white font-medium mr-3">
                                        JD
                                    </div>
                                    <div>
                                        <p class="text-sm">John Doe registered as a new user</p>
                                        <p class="text-xs text-lightgray">2 hours ago</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-darkgray rounded-lg shadow">
                        <div class="p-4 border-b border-gray-700">
                            <h2 class="text-lg font-semibold">User Registration Stats</h2>
                        </div>
                        <div class="p-4 h-64 flex items-center justify-center">
                            <p class="text-lightgray">User registration chart would go here</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


</body>
</html>
