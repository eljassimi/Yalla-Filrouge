<!DOCTYPE html>
<html lang="en">
<x-head />
<body class="bg-black text-white">

<div class="flex h-screen overflow-hidden">
    <x-aside />
    <div class="flex-1 flex flex-col overflow-hidden">
        <x-DashboardHeader />

        <main class="flex-1 overflow-y-auto bg-black p-4 md:p-8">

            <div id="edit-hotel-page">
                <div class="mb-6">
                    <h1 class="text-2xl font-bold">Edit Hotel</h1>
                    <p class="text-lightgray">Update hotel details and room information</p>
                </div>

                <div class="bg-darkgray rounded-lg shadow p-6 md:p-8">
                    <form id="edit-hotel-form" action="/updateHotel/{{ $hotel->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="hotel_id" name="hotel_id" value="{{ $hotel->id }}">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <div>
                                <div class="mb-4">
                                    <label for="hotelName" class="block text-sm font-medium text-lightgray mb-1">Hotel Name</label>
                                    <input type="text" id="hotelName" name="name" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" value="{{ $hotel->name }}" required>
                                </div>

                                <div class="mb-4">
                                    <label for="hotelDescription" class="block text-sm font-medium text-lightgray mb-1">Hotel Description</label>
                                    <textarea id="hotelDescription" name="description" rows="4" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required>{{ $hotel->description }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="main_image" class="block text-sm font-medium text-lightgray mb-1">Main Image</label>
                                    <div class="mb-2">
                                        <span class="text-xs text-lightgray">Current Image:</span>
                                        <img id="main_image_preview" class="mt-1 rounded max-h-32" src="{{ asset('storage/' . $hotel->main_image) }}" alt="Current Main Image">

                                    </div>
                                    <input type="file" id="main_image" name="main_image" accept="image/*" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white">
                                    <p class="text-xs text-lightgray mt-1">Upload a new image to replace the current one.</p>
                                </div>

                                <div class="mb-4">
                                    <label for="gallery_images" class="block text-sm font-medium text-lightgray mb-1">Gallery Images</label>
                                    <div class="mb-2">
                                        <span class="text-xs text-lightgray">Current Gallery:</span>
                                        <div class="flex flex-wrap gap-2 mt-1">
                                            @foreach (json_decode($hotel->gallery_images ?? '[]') as $image)
                                                <img src="{{ asset('storage/' . $image) }}" class="h-16 w-16 object-cover rounded" alt="Gallery Image">
                                            @endforeach
                                        </div>
                                    </div>
                                    <input type="file" id="gallery_images" name="gallery_images[]" accept="image/*" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white" multiple>
                                    <p class="text-xs text-lightgray mt-1">Add new images to the gallery. Existing images will be kept unless explicitly removed (requires backend logic).</p>

                                </div>

                                <div class="mb-4">

                                    <label for="rooms" class="block text-sm font-medium text-lightgray mb-1">Total Number of Rooms (All Types)</label>
                                    <input type="number" id="rooms" name="rooms" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" value="{{ $hotel->rooms }}" required>
                                    <p class="text-xs text-lightgray mt-1">Ensure this matches the sum of 'Number of This Room Type' below.</p>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-lightgray mb-1">Amenities</label>
                                    <div class="grid grid-cols-2 gap-2 text-white">
                                        @php $currentAmenities = json_decode($hotel->amenities ?? '[]', true); @endphp
                                        <label><input type="checkbox" name="amenities[]" value="WiFi" class="mr-2" @checked(in_array('WiFi', $currentAmenities))>WiFi</label>
                                        <label><input type="checkbox" name="amenities[]" value="Smart TV" class="mr-2" @checked(in_array('Smart TV', $currentAmenities))>Smart TV</label>
                                        <label><input type="checkbox" name="amenities[]" value="Free parking" class="mr-2" @checked(in_array('Free parking', $currentAmenities))>Free Parking</label>
                                        <label><input type="checkbox" name="amenities[]" value="Gym" class="mr-2" @checked(in_array('Gym', $currentAmenities))>Gym</label>
                                        <label><input type="checkbox" name="amenities[]" value="Swimming Pool" class="mr-2" @checked(in_array('Swimming Pool', $currentAmenities))>Swimming Pool</label>
                                    </div>
                                    <p class="text-xs text-lightgray mt-1">Check the amenities available at the hotel.</p>
                                </div>
                            </div>


                            <div>
                                <div class="mb-4">
                                    <label for="hotelLocation" class="block text-sm font-medium text-lightgray mb-1">Location</label>

                                    <input type="hidden" id="city_input" name="city" value="{{ $hotel->Location->city }}">
                                    <input type="hidden" id="street_input" name="address" value="{{ $hotel->Location->address }}">
                                    <input type="hidden" id="coordinates" name="coordinates" value='{{ $hotel->Location->coordinates }}'>
                                    <div id="map" class="mt-2 rounded-lg border border-gray-700" style="height: 350px;"></div>
                                    <p class="text-xs text-lightgray mt-1">Click on the map or use search to update the location.</p>
                                </div>

                                <div class="mt-8 mb-6 border-t border-gray-700 pt-6">
                                    <h3 class="text-lg font-medium text-white mb-4">Room Information</h3>

                                    <div id="room-container">
                                        @foreach($hotel->roomTypes as $roomType)
                                            <div class="room-entry bg-gray-800 border border-gray-700 rounded-lg p-4 mb-4">
                                                <input type="hidden" name="room_entry_id[]" value="{{ $roomType->id }}">
                                                <div class="mb-3">
                                                    <label class="block text-sm font-medium text-lightgray mb-1">Room Type</label>
                                                    <select name="room_type_id[]" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required>
                                                        <option value="1" @selected($roomType->room_type_id == 1)>Standard</option>
                                                        <option value="2" @selected($roomType->room_type_id == 2)>Royal</option>
                                                        <option value="3" @selected($roomType->room_type_id == 3)>Deluxe</option>
                                                        <option value="4" @selected($roomType->room_type_id == 4)>Suite</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="block text-sm font-medium text-lightgray mb-1">Price Per Night</label>
                                                    <div class="relative">
                                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                            <span class="text-gray-400">$</span>
                                                        </div>
                                                        <input type="number" name="price_per_night[]" step="0.01" min="0" value="{{ $roomType->price_per_night }}" class="w-full bg-gray-700 border border-gray-600 rounded-lg pl-8 pr-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required>
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <label class="block text-sm font-medium text-lightgray mb-1">Number of This Room Type</label>
                                                    <input type="number" name="number_of_rooms[]" min="1" value="{{ $roomType->number_of_rooms }}" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary" required>
                                                </div>
                                                <button type="button" class="remove-room text-red-500 text-sm hover:text-red-400 mt-2">Remove Room Type</button>
                                            </div>
                                        @endforeach


                                    </div>

                                    <button type="button" id="add-room" class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg text-sm">
                                        + Add Another Room Type
                                    </button>
                                </div>

                            </div>
                        </div>


                        <div class="mt-8 pt-6 border-t border-gray-700 flex justify-end">
                            <a href="/hotels" class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg mr-2">Cancel</a>
                            <button type="submit" class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>
