<x-head />
<body class="bg-darkgray text-white">

<div class="flex h-screen overflow-hidden">
    <x-aside />
    <div class="flex-1 flex flex-col overflow-hidden">
        <x-DashboardHeader />
        <main class="flex-1 overflow-y-auto bg-black p-4">

            <div id="hotels-page" class="page-content">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <div>
                        <h1 class="text-2xl font-bold">Hotel Management</h1>
                        <p class="text-lightgray">Manage hotel listings</p>
                    </div>
                    <button class="mt-4 md:mt-0 bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Add Hotel
                    </button>
                </div>

                <div class="bg-darkgray rounded-lg shadow overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-700">
                            <thead class="bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Hotel</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Description</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Rooms</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Location</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-lightgray uppercase tracking-wider">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-700">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium">Marriott Hotel</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm">Hotel Description</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm">8</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm">Marrakech, Morocco</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-primary hover:text-primary/80 mr-3">Edit</button>
                                    <button class="text-red-500 hover:text-red-400">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-6 py-4 border-t border-gray-700 flex items-center justify-between">
                        <div class="text-sm text-lightgray">
                            Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span class="font-medium">8</span> results
                        </div>
                        <div class="flex items-center">
                            <button class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700 mr-2">Previous</button>
                            <button class="px-3 py-1 rounded-md bg-primary text-white hover:bg-primary/90 mr-2">1</button>
                            <button class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700 mr-2">2</button>
                            <button class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700 mr-2">3</button>
                            <button class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700">Next</button>
                        </div>
                    </div>

                </div>

            </div>
        </main>
    </div>
</div>


</body>
</html>
