<x-head />
<body class="bg-darkgray text-white">

<div class="flex h-screen overflow-hidden">
    <x-aside />
    <div class="flex-1 flex flex-col overflow-hidden">
        <x-DashboardHeader />
        <main class="flex-1 overflow-y-auto bg-black p-4">
            <div id="matches-page" class="page-content">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <div>
                        <h1 class="text-2xl font-bold">Match Management</h1>
                        <p class="text-lightgray">Manage scheduled matches and events</p>
                    </div>
                    <button onclick="DisplayForm()" class="mt-4 md:mt-0 bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Create Match
                    </button>
                </div>

                <div class="bg-darkgray rounded-lg shadow overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-700">
                            <thead class="bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Match</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Date & Time</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Location</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Status</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-lightgray uppercase tracking-wider">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-700">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium">Qatar vs UAE</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm">Dec 12, 2023 - 7:00 PM</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm">Lusail Stadium, Doha</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs rounded-full bg-green-900 text-green-200">Upcoming</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button  class="text-primary hover:text-primary/80 mr-3">Edit</button>
                                    <button  class="text-red-500 hover:text-red-400">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-6 py-4 border-t border-gray-700 flex items-center justify-between">
                        <div class="text-sm text-lightgray">
                            Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">12</span> results
                        </div>
                        <div class="flex items-center">
                            <button class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700 mr-2">Previous</button>
                            <button class="px-3 py-1 rounded-md bg-primary text-white hover:bg-primary/90 mr-2">1</button>
                            <button class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700 mr-2">2</button>
                            <button class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700 mr-2">3</button>
                            <button class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700">Next</button>
                        </div>
                    </div>

                    <div id="match-form-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
                        <div class="bg-darkgray rounded-lg shadow-lg w-full max-w-md mx-4">
                            <div class="p-4 border-b border-gray-700 flex items-center justify-between">
                                <h3 class="text-lg font-semibold" id="match-form-title">Create New Match</h3>
                                <button onclick="HideForm()" class="text-lightgray hover:text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-4">
                                <form>
                                    <div class="mb-4">
                                        <label for="name" class="block text-sm font-medium text-lightgray mb-1">Event Name</label>
                                        <input type="text" id="name" name="name" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-lightgray mb-1">Teams</label>
                                        <div class="grid grid-cols-2 gap-4">
                                            <select id="team_1_name" name="team_1_name" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required>
                                                <option value="">Select Team 1</option>
                                            </select>
                                            <select id="team_2_name" name="team_2_name" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required>
                                                <option value="">Select Team 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-4 flex space-x-4">
                                        <div class="w-1/2">
                                            <label for="flag_team_1" class="block text-sm font-medium text-gray-700">Team 1 Flag</label>
                                            <input type="hidden" name="flag_team_1" id="flag_team_1">
                                            <img id="flag_team_1_preview" class="mt-1 h-12" src="" alt="Team 1 Flag" style="display: none;">
                                        </div>
                                        <div class="w-1/2">
                                            <label for="flag_team_2" class="block text-sm font-medium text-gray-700">Team 2 Flag</label>
                                            <input type="hidden" name="flag_team_2" id="flag_team_2">
                                            <img id="flag_team_2_preview" class="mt-1 h-12" src="" alt="Team 2 Flag" style="display: none;">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="matchDate" class="block text-sm font-medium text-lightgray mb-1">Date</label>
                                        <input type="datetime-local" id="matchDate" name="matchDate" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div class="mb-4">
                                        <label for="matchLocation" class="block text-sm font-medium text-lightgray mb-1">Description</label>
                                        <textarea id="matchLocation" name="description" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="matchLocation" class="block text-sm font-medium text-lightgray mb-1">Location</label>
                                        <input type="text" id="matchLocation" name="matchLocation" placeholder="Stadium, City" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div class="flex justify-end mt-6">
                                        <button onclick="HideForm()" type="button" class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg mr-2">Cancel</button>
                                        <button type="button" class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>

<script>
    let matchFrom = document.getElementById("match-form-modal");
    function DisplayForm(){
        matchFrom.classList.remove("hidden");
    }
    function HideForm(){
        matchFrom.classList.add("hidden");
    }

    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            const team1Select = document.getElementById('team_1_name');
            const team2Select = document.getElementById('team_2_name');
            data.sort((a, b) => a.name.common.localeCompare(b.name.common)).forEach(country => {
                const option = document.createElement('option');
                option.value = country.name.common;
                option.textContent = country.name.common;
                team1Select.appendChild(option.cloneNode(true));
                team2Select.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching countries:', error));
</script>
</body>
