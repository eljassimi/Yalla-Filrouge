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
                    <button onclick="ShowForm()" class="mt-4 md:mt-0 bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg flex items-center">
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
                            @foreach($hotels as $hotel)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium">{{$hotel->name}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm">{{$hotel->description}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm">{{$hotel->rooms}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm">{{$hotel->Location->city}} - {{$hotel->Location->address}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button onclick="ShowEditForm('{{$hotel->id}}','{{$hotel->name}}','{{$hotel->description}}','{{$hotel->Location}}','{{$hotel->rooms}}','{{$hotel->main_image}}','{{$hotel->gallery_images}}','{{$hotel->amenities}}')" class="text-primary hover:text-primary/80 mr-3">Edit</button>
                                    <a href="/deleteHotel/{{$hotel->id}}" class="text-red-500 hover:text-red-400">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="px-6 py-4 border-t border-gray-700 flex items-center justify-between">
                        <div class="text-sm text-lightgray">
                            Showing <span class="font-medium">{{$hotels->firstItem()}}</span> to <span class="font-medium">{{$hotels->lastItem()}}</span> of <span class="font-medium">{{$hotels->total()}}</span> results
                        </div>
                        <div class="flex items-center">
                            @if($hotels->onFirstPage())
                                <span class="px-3 py-1 rounded-md bg-gray-800 text-gray-500 mr-2">Previous</span>
                            @else
                            <a href="{{$hotels->previousPageUrl()}}" class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700 mr-2">Previous</a>
                            @endif
                                @foreach ($hotels->getUrlRange(1, $hotels->lastPage()) as $page => $url)
                                    @if($page == $hotels->currentPage())
                                        <span class="px-3 py-1 rounded-md bg-primary text-white mr-2">{{ $page }}</span>
                                    @else
                                        <a href="{{ $url }}" class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700 mr-2">{{ $page }}</a>
                                    @endif
                                @endforeach
                                @if($hotels->hasMorePages())
                                    <a href="{{ $hotels->nextPageUrl() }}" class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700">Next</a>
                                @else
                                    <span class="px-3 py-1 rounded-md bg-gray-800 text-gray-500">Next</span>
                                @endif
                        </div>
                    </div>
                </div>

                <div id="hotel-form-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                    <div class="bg-darkgray h-[90%] overflow-auto scroll rounded-lg shadow-lg w-full max-w-md mx-4">
                        <div class="p-4 border-b border-gray-700 flex items-center justify-between">
                            <h3 class="text-lg font-semibold" id="hotel-form-title">Add New Hotel</h3>
                            <button onclick="HideForm()" class="text-lightgray hover:text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-4">
                            <form id="hotel-form" action="/createHotel" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4">
                                    <label for="hotelName" class="block text-sm font-medium text-lightgray mb-1">Hotel Name</label>
                                    <input type="text" id="hotelName" name="name" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required>
                                </div>

                                <div class="mb-4">
                                    <label for="hotelDescription" class="block text-sm font-medium text-lightgray mb-1">Hotel Description</label>
                                    <textarea id="hotelDescription" name="description" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required></textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="main_image" class="block text-sm font-medium text-lightgray mb-1">Main Image</label>
                                    <input type="file" id="main_image" name="main_image" accept="image/*" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white" required>
                                    <img id="main_image_preview" class="mt-2" src="" alt="Main Image Preview" style="display: none;">
                                </div>

                                <div class="mb-4">
                                    <label for="gallery_images" class="block text-sm font-medium text-lightgray mb-1">Gallery Images</label>
                                    <input type="file" id="gallery_images" name="gallery_images[]" accept="image/*" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white" multiple>
                                </div>

                                <div class="mb-4">
                                    <label for="hotelLocation" class="block text-sm font-medium text-lightgray mb-1">Location</label>
                                    <input type="hidden" id="city_input" name="city" placeholder="City" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white mb-2">
                                    <input type="hidden" id="street_input" name="address" placeholder="Street" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white mb-2">
                                    <input type="hidden" id="coordinates" name="coordinates">
                                    <div id="map" class="mt-2 rounded-lg" style="height: 300px;"></div>
                                </div>

                                <div class="mb-4">
                                    <label for="rooms" class="block text-sm font-medium text-lightgray mb-1">Number of Rooms</label>
                                    <input type="number" id="rooms" name="rooms" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-lightgray mb-1">Amenities</label>
                                    <div class="grid grid-cols-2 gap-2 text-white">
                                        <label><input type="checkbox" name="amenities[]" value="WiFi" class="mr-2">WiFi</label>
                                        <label><input type="checkbox" name="amenities[]" value="Smart TV" class="mr-2">Smart TV</label>
                                        <label><input type="checkbox" name="amenities[]" value="Free parking" class="mr-2">Free Parking</label>
                                        <label><input type="checkbox" name="amenities[]" value="Gym" class="mr-2">Gym</label>
                                        <label><input type="checkbox" name="amenities[]" value="Swimming Pool" class="mr-2">Swimming Pool</label>
                                    </div>
                                </div>

                                <div class="mt-8 mb-6 border-t border-gray-700 pt-6">
                                    <h3 class="text-lg font-medium text-white mb-4">Room Information</h3>

                                    <div id="room-container">
                                        <div class="room-entry bg-gray-800 border border-gray-700 rounded-lg p-4 mb-4">
                                            <div class="mb-3">
                                                <label class="block text-sm font-medium text-lightgray mb-1">Room Type</label>
                                                <select name="room_type_id[]" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required>
                                                    <option value="1">Standard</option>
                                                    <option value="2">Royal</option>
                                                    <option value="3">Deluxe</option>
                                                    <option value="4">Suite</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="block text-sm font-medium text-lightgray mb-1">Price Per Night</label>
                                                <div class="relative">
                                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                        <span class="text-gray-400">$</span>
                                                    </div>
                                                    <input type="number" name="price_per_night[]" step="0.01" min="0" class="w-full bg-gray-800 border border-gray-700 rounded-lg pl-8 pr-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required>
                                                </div>
                                            </div>

                                            <div class="mb-2">
                                                <label class="block text-sm font-medium text-lightgray mb-1">Number of This Room Type</label>
                                                <input type="number" name="number_of_rooms[]" min="1" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required>
                                            </div>

                                            <button type="button" id="remove-room" class="remove-room text-red-400 text-sm hover:text-red-300 mt-2 hidden">Remove Room Type</button>
                                        </div>
                                    </div>

                                    <button type="button" id="add-room" class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg text-sm">
                                        + Add Another Room Type
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
        </main>
    </div>
</div>

<script>
    let HotelForm = document.getElementById("hotel-form-modal");
    let AddRoom = document.getElementById('add-room');
    let RoomContainer = document.getElementById("room-container")

    function HideForm(){
        HotelForm.classList.add("hidden");
    }
    function ShowForm(){
        HotelForm.classList.remove("hidden");
    }

    AddRoom.addEventListener('click',function(){
        const roomEntries = RoomContainer.querySelector('.room-entry').cloneNode(true);
        RoomContainer.appendChild(roomEntries);
        DisplayRemoveButton();
    });

    function DisplayRemoveButton() {
        const roomEntries = RoomContainer.querySelectorAll('.room-entry');
        roomEntries.forEach((room, index) => {
            const removeButton = room.querySelector('.remove-room');
            if (index === 0) {
                removeButton.classList.add("hidden");
            } else {
                removeButton.classList.remove("hidden");
            }
            removeButton.addEventListener('click',function(){
                room.remove();
            })
        });
    }


    function ShowEditForm(id, name, description, location, rooms, main_image, gallery_images, amenities) {
        console.log(id, name, description, location, rooms, main_image, gallery_images, amenities);
        document.getElementById('hotel-form-modal').classList.remove('hidden');
        document.getElementById('hotel-form-title').innerText = 'Edit Hotel';

        document.getElementById('hotel_id').value = id;
        document.getElementById('hotelName').value = name;
        document.getElementById('hotelDescription').value = description;
        document.getElementById('rooms').value = rooms;

        if (location) {
            document.getElementById('city_input').value = location.city || '';
            document.getElementById('street_input').value = location.street || '';
            document.getElementById('coordinates').value = location.coordinates || '';
        }

        if (main_image) {
            let preview = document.getElementById('main_image_preview');
            preview.src = main_image;
        }

        if (gallery_images) {
            const input = document.getElementById('gallery_images');
            const files = input.files;
            const formData = new FormData();

            for (let i = 0; i < files.length; i++) {
                formData.append('gallery_images[]', files[i]);
            }
        }
    }


</script>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-geosearch/dist/bundle.min.js"></script>
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
</html>
