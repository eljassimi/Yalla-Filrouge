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
                            <form id="hotel-form">
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
                                    <label for="location_id" class="block text-sm font-medium text-lightgray mb-1">Location</label>
                                    <select id="location_id" name="location_id" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required>
                                        <option value="1">Paris, France</option>
                                        <option value="2">Marrakech, Morocco</option>
                                        <option value="3">Tokyo, Japan</option>
                                    </select>
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
                                                    <option value="">Select Room Type</option>
                                                    <option value="1">Standard</option>
                                                    <option value="2">Royal</option>
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
        const roomTemplate = RoomContainer.querySelector('.room-entry').cloneNode(true);
        RoomContainer.appendChild(roomTemplate);
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
        });
    }


</script>
</body>
</html>
