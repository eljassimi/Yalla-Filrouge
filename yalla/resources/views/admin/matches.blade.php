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
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Type</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-lightgray uppercase tracking-wider">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-700">
                            @foreach($Matches as $match)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium">{{$match->name}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm">{{$match->date}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm">{{$match->Location->city}} - {{$match->Location->address}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs rounded-full bg-green-900 text-green-200">{{$match->event_type}}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button onclick="ShowEditForm({{ $match->id }},'{{ $match->name }}','{{ $match->description }}','{{ $match->team_1_name }}','{{ $match->team_2_name }}','{{ $match->flag_team_1 }}','{{ $match->flag_team_2 }}','{{ $match->date }}','{{ $match->available_spots }}','{{ $match->Location->city }}','{{ $match->Location->address }}','{{ $match->Location->coordinates }}')" class="text-primary hover:text-primary/80 mr-3">Edit</button>
                                    <a href="/admin/deleteMatch/{{$match->id}}"  class="text-red-500 hover:text-red-400">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="px-6 py-4 border-t border-gray-700 flex items-center justify-between">
                        <div class="text-sm text-lightgray">
                            Showing
                            <span class="font-medium">{{ $Matches->firstItem() }}</span>
                            to
                            <span class="font-medium">{{ $Matches->lastItem() }}</span>
                            of
                            <span class="font-medium">{{ $Matches->total() }}</span> results
                        </div>

                        <div class="flex items-center">
                            @if ($Matches->onFirstPage())
                                <span class="px-3 py-1 rounded-md bg-gray-800 text-gray-500 mr-2">Previous</span>
                            @else
                                <a href="{{ $Matches->previousPageUrl() }}" class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700 mr-2">Previous</a>
                            @endif
                            @foreach ($Matches->getUrlRange(1, $Matches->lastPage()) as $page => $url)
                                @if ($page == $Matches->currentPage())
                                    <span class="px-3 py-1 rounded-md bg-primary text-white mr-2">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}" class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700 mr-2">{{ $page }}</a>
                                @endif
                            @endforeach

                            @if ($Matches->hasMorePages())
                                <a href="{{ $Matches->nextPageUrl() }}" class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700">Next</a>
                            @else
                                <span class="px-3 py-1 rounded-md bg-gray-800 text-gray-500">Next</span>
                            @endif
                        </div>
                    </div>

                    <div id="match-form-modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 overflow-y-auto p-4 hidden">
                        <div class="bg-darkgray rounded-lg shadow-lg w-full max-w-md max-h-[calc(100vh-2rem)] overflow-y-auto">
                            <div class="p-4 border-b border-gray-700 flex items-center justify-between">
                                <h3 class="text-lg font-semibold" id="match-form-title">Create New Match</h3>
                                <button onclick="HideForm()" class="text-lightgray hover:text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-4">
                                <form action="/admin/match" method="POST">
                                    @csrf
                                    <input type="hidden" id="form_action" name="form_action" value="create">
                                    <input type="hidden" id="match_id" name="match_id" value="">

                                    <div class="mb-4">
                                        <label for="name" class="block text-sm font-medium text-lightgray mb-1">Event Name</label>
                                        <input type="text" id="name" name="name" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div class="mb-4">
                                        <label for="description" class="block text-sm font-medium text-lightgray mb-1">Description</label>
                                        <textarea id="description" name="description" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
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
                                        <input type="datetime-local" min="{{ now()->format('Y-m-d\TH:i') }}" id="matchDate" name="date" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div class="mb-4">
                                        <label for="available_spots" class="block text-sm font-medium text-lightgray mb-1">available spots</label>
                                        <input type="number" id="available_spots" name="available_spots" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div class="mb-4">
                                        <label for="matchLocation" class="block text-sm font-medium text-lightgray mb-1">Location</label>
                                        <input type="hidden" id="city_input" name="city" placeholder="City" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white mb-2">
                                        <input type="hidden" id="street_input" name="address" placeholder="Street" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white mb-2">
                                        <input type="hidden" id="coordinates" name="coordinates">
                                        <div id="map" class="mt-2 rounded-lg" style="height: 300px;"></div>
                                    </div>
                                    <div class="mt-8 mb-6 border-t border-gray-700 pt-6">
                                        <h3 class="text-lg font-medium text-white mb-4">Ticket Types</h3>

                                        <div id="ticket-container">
                                            <div class="ticket-entry bg-gray-800 border border-gray-700 rounded-lg p-4 mb-4">
                                                <div class="mb-3">
                                                    <label class="block text-sm font-medium text-lightgray mb-1">Ticket Type</label>
                                                    <input class="w-full bg-gray-800 border border-gray-700 rounded-lg pl-8 pr-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="block text-sm font-medium text-lightgray mb-1">Ticket Price</label>
                                                    <div class="relative">
                                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                            <span class="text-gray-400">$</span>
                                                        </div>
                                                        <input type="number" name="price_per_night[]" step="0.01" min="0" class="w-full bg-gray-800 border border-gray-700 rounded-lg pl-8 pr-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required>
                                                    </div>
                                                </div>

                                                <div class="mb-2">
                                                    <label class="block text-sm font-medium text-lightgray mb-1">Number of Tickets</label>
                                                    <input type="number" name="number_of_tickets[]" min="1" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required>
                                                </div>

                                                <button type="button" id="remove-ticket" class="remove-ticket text-red-400 text-sm hover:text-red-300 mt-2 hidden">Remove ticket Type</button>
                                            </div>
                                        </div>

                                        <button type="button" id="add-ticket" class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg text-sm">
                                            + Add Another ticket Type
                                        </button>
                                    </div>

                                    <div class="flex justify-end mt-6">
                                        <button onclick="HideForm()" type="button" class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg mr-2">Cancel</button>
                                        <button type="submit" class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg">Save</button>
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
        document.getElementById('match-form-title').innerText = "Create New Match";
        document.getElementById('form_action').value = "create";
        document.getElementById('match_id').value = "";

        document.getElementById('name').value = "";
        document.getElementById('description').value = "";
        document.getElementById('team_1_name').value = "";
        document.getElementById('team_2_name').value = "";
        document.getElementById('flag_team_1').value = "";
        document.getElementById('flag_team_2').value = "";
        document.getElementById('flag_team_1_preview').style.display = 'none';
        document.getElementById('flag_team_2_preview').style.display = 'none';
        document.getElementById('matchDate').value = "";
        document.getElementById('available_spots').value = "";
        document.getElementById('city_input').value = "";
        document.getElementById('street_input').value = "";
        document.getElementById('coordinates').value = "";
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

    document.getElementById('team_1_name').addEventListener('change', function() {
        const team = this.value;
        if (team) {
            fetch(`https://restcountries.com/v3.1/name/${team}?fullText=true`)
                .then(response => response.json())
                .then(data => {
                    const flagUrl = data[0].flags.png;
                    document.getElementById('flag_team_1').value = flagUrl;
                    document.getElementById('flag_team_1_preview').src = flagUrl;
                    document.getElementById('flag_team_1_preview').style.display = 'block';
                })
                .catch(error => console.error('Error fetching flag for Team 1:', error));
        }
    });

    document.getElementById('team_2_name').addEventListener('change', function() {
        const team = this.value;
        if (team) {
            fetch(`https://restcountries.com/v3.1/name/${team}?fullText=true`)
                .then(response => response.json())
                .then(data => {
                    const flagUrl = data[0].flags.png;
                    document.getElementById('flag_team_2').value = flagUrl;
                    document.getElementById('flag_team_2_preview').src = flagUrl;
                    document.getElementById('flag_team_2_preview').style.display = 'block';
                })
                .catch(error => console.error('Error fetching flag for Team 2:', error));
        }
    });

    function ShowEditForm(id, name, description, team1, team2, flag1, flag2, date, spots, city, address, coordinates) {

        matchFrom.classList.remove("hidden");
        document.getElementById('match-form-title').innerText = "Edit Match";

        document.getElementById('form_action').value = "update";
        document.getElementById('match_id').value = id;

        document.getElementById('name').value = name;
        document.getElementById('description').value = description;
        document.getElementById('team_1_name').value = team1;
        document.getElementById('team_2_name').value = team2;

        document.getElementById('flag_team_1').value = flag1;
        document.getElementById('flag_team_2').value = flag2;

        const flag1Preview = document.getElementById('flag_team_1_preview');
        const flag2Preview = document.getElementById('flag_team_2_preview');

        if (flag1) {
            flag1Preview.src = flag1;
            flag1Preview.style.display = 'block';
        } else {
            flag1Preview.style.display = 'none';
        }

        if (flag2) {
            flag2Preview.src = flag2;
            flag2Preview.style.display = 'block';
        } else {
            flag2Preview.style.display = 'none';
        }

        document.getElementById('matchDate').value = date;
        document.getElementById('available_spots').value = spots;
        document.getElementById('city_input').value = city;
        document.getElementById('street_input').value = address;
        document.getElementById('coordinates').value = coordinates;
    }

</script>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-geosearch/dist/bundle.min.js"></script>
<script>
    let HotelForm = document.getElementById("hotel-form-modal");
    let Addticket = document.getElementById('add-ticket');
    let ticketContainer = document.getElementById("ticket-container")

    function HideForm(){
        HotelForm.classList.add("hidden");
    }
    function ShowForm(){
        document.getElementById('hotel-form-title').innerText = 'Add New Hotel';
        document.getElementById('hotel_id').value = '';
        document.getElementById('hotelName').value = '';
        document.getElementById('hotelDescription').value = '';
        document.getElementById('tickets').value = '';
        HotelForm.classList.remove("hidden");
    }

    Addticket.addEventListener('click',function(){
        const ticketEntries = ticketContainer.querySelector('.ticket-entry').cloneNode(true);
        ticketContainer.appendChild(ticketEntries);
        DisplayRemoveButton();
    });

    function DisplayRemoveButton() {
        const ticketEntries = ticketContainer.querySelectorAll('.ticket-entry');
        ticketEntries.forEach((ticket, index) => {
            const removeButton = ticket.querySelector('.remove-ticket');
            if (index === 0) {
                removeButton.classList.add("hidden");
            } else {
                removeButton.classList.remove("hidden");
            }
            removeButton.addEventListener('click',function(){
                ticket.remove();
            })
        });
    }


</script>

<script >
    document.addEventListener('DOMContentLoaded', function () {
        const map = L.map('map').setView([31.7917, -7.0926], 6);

        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
            subdomains: 'abcd',
            maxZoom: 13
        }).addTo(map);

        const provider = new GeoSearch.OpenStreetMapProvider({
            params: {
                'countrycodes': 'ma'
            }
        });

        const searchControl = new GeoSearch.GeoSearchControl({
            provider: provider,
            style: 'bar',
            showMarker: true,
            searchLabel: 'Search for locations in Morocco'
        });

        map.addControl(searchControl);

        let marker;

        map.on('click', async function(e) {
            const { lat, lng } = e.latlng;

            document.getElementById('coordinates').value = JSON.stringify({
                latitude: lat.toString(),
                longitude: lng.toString()
            });

            try {
                const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lng}`);
                const data = await response.json();

                const city = data.address.city || data.address.town || data.address.village || '';
                const street = data.address.road || '';

                document.getElementById('city_input').value = city;
                document.getElementById('street_input').value = street;

                if (marker) {
                    marker.setLatLng(e.latlng);
                } else {
                    marker = L.marker(e.latlng).addTo(map);
                }
            } catch (error) {
                console.error('Error getting location data:', error);
            }
        });

        map.on('geosearch/showlocation', function(e) {
            const { location } = e;
            document.getElementById('coordinates').value = `${location.y},${location.x}`;

            const locationParts = location.label.split(', ');
            console.log('location : ',locationParts)
            document.getElementById('city_input').value = locationParts[1] || '';
            document.getElementById('street_input').value = locationParts[0] || '';

            if (marker) marker.setLatLng([location.y, location.x]);
            else marker = L.marker([location.y, location.x]).addTo(map);
        });

    });
</script>
</body>
