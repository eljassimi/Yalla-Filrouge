<x-head />
<body class="min-h-screen bg-[#fbfbfb] flex flex-col">
<x-navbar />
<main class="flex-1 container mx-auto px-4 py-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
        <div class="md:col-span-2 h-[400px] md:h-[500px] relative rounded-lg overflow-hidden">
            <img src="/assets/{{$hotel["main_image"]}}" alt="Moroccan Riad with Pool" class="w-full h-full object-cover"/>
        </div>
        <div class="grid grid-cols-1 gap-4">
            @foreach($hotel->gallery_images as $image)
            <div class="h-[160px] md:h-[240px] relative rounded-lg overflow-hidden">
                <img src="/assets/{{ $image }}" alt="Bedroom" class="w-full h-full object-cover"/>
            </div>
        @endforeach
        </div>
    </div>
    <div class="flex  flex-col lg:flex-row gap-8">
        <div class="flex-1">
            <div class="mb-8">
                <h2 class="text-2xl font-bold mb-6 text-[#222222]">Property Overview</h2>
                <div class="p-6 rounded-2xl shadow-lg  mx-auto">
                    <h2 class="text-2xl font-bold mb-4">Property Overview</h2>
                    <div class="flex justify-between mb-4">
                        @if(in_array('WiFi', $amenities))
                        <div class="flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#A22C29" d="M12 21q-1.05 0-1.775-.725T9.5 18.5t.725-1.775T12 16t1.775.725t.725 1.775t-.725 1.775T12 21m-5.65-5.65l-2.1-2.15q1.475-1.475 3.463-2.337T12 10t4.288.875t3.462 2.375l-2.1 2.1q-1.1-1.1-2.55-1.725T12 13t-3.1.625t-2.55 1.725M2.1 11.1L0 9q2.3-2.35 5.375-3.675T12 4t6.625 1.325T24 9l-2.1 2.1q-1.925-1.925-4.462-3.012T12 7T6.563 8.088T2.1 11.1"/></svg>
                            <p class="text-sm font-semibold">High Speed Wi-Fi</p>
                        </div>
                        @endif
                        @if(in_array('Smart TV', $amenities))
                        <div class="flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#A22C29" d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2m0 14H3V5h18z"/></svg>
                            <p class="text-sm font-semibold">Smart TV</p>
                        </div>
                        @endif
                        @if(in_array('Free parking', $amenities))
                        <div class="flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#A22C29" d="M11 14h1.5a3.5 3.5 0 1 0 0-7H9v10h2zM4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1m7 6h1.5a1.5 1.5 0 0 1 0 3H11z"/></svg>
                            <p class="text-sm font-semibold">Free parking</p>
                        </div>
                        @endif
                        @if(in_array('Gym', $amenities))
                        <div class="flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#A22C29" d="M2 21v-2q.95 0 1.425-.5T5.3 18t1.925.5t1.425.5t1.425-.5T12 18t1.925.5t1.425.5t1.425-.5T18.7 18t1.875.5T22 19v2q-1.475 0-1.937-.5T18.7 20t-1.425.5t-1.925.5t-1.925-.5T12 20t-1.425.5t-1.925.5t-1.925-.5T5.3 20t-1.363.5T2 21m0-4.5v-2q.95 0 1.425-.5t1.875-.5t1.938.5t1.412.5q.9 0 1.425-.5T12 13.5t1.925.5t1.425.5t1.425-.5t1.925-.5t1.875.5t1.425.5v2q-1.475 0-1.937-.5t-1.363-.5t-1.388.5t-1.962.5q-1.425 0-1.937-.5T12 15.5q-.95 0-1.412.5t-1.938.5t-1.963-.5t-1.387-.5t-1.362.5T2 16.5m4.9-5.1l3.325-3.325l-1-1q-.825-.825-1.75-1.2T5.2 5.5V3q1.875 0 3.1.413T10.7 5l6.4 6.4q-.425.275-.825.438T15.35 12q-.9 0-1.425-.5T12 11t-1.925.5t-1.425.5q-.525 0-.925-.162T6.9 11.4M16.7 3q1.05 0 1.775.738T19.2 5.5q0 1.05-.725 1.775T16.7 8t-1.775-.725T14.2 5.5q0-1.025.725-1.763T16.7 3"/></svg>
                            <p class="text-sm font-semibold">Swimming pool</p>
                        </div>
                        @endif
                        @if(in_array('Swimming Pool', $amenities))
                        <div class="flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="#A22C29" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="M7.4 7H4.6a.6.6 0 0 0-.6.6v8.8a.6.6 0 0 0 .6.6h2.8a.6.6 0 0 0 .6-.6V7.6a.6.6 0 0 0-.6-.6m12 0h-2.8a.6.6 0 0 0-.6.6v8.8a.6.6 0 0 0 .6.6h2.8a.6.6 0 0 0 .6-.6V7.6a.6.6 0 0 0-.6-.6"/><path d="M1 14.4V9.6a.6.6 0 0 1 .6-.6h1.8a.6.6 0 0 1 .6.6v4.8a.6.6 0 0 1-.6.6H1.6a.6.6 0 0 1-.6-.6m22 0V9.6a.6.6 0 0 0-.6-.6h-1.8a.6.6 0 0 0-.6.6v4.8a.6.6 0 0 0 .6.6h1.8a.6.6 0 0 0 .6-.6M8 12h8"/></g></svg>
                            <p class="text-sm font-semibold">Gym</p>
                        </div>
                        @endif
                        @if(in_array('Full Kitchen', $amenities))
                        <div class="flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#A22C29" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 3v12h-5c-.023-3.681.184-7.406 5-12m0 12v6h-1v-3M8 4v17M5 4v3a3 3 0 1 0 6 0V4"/></svg>
                            <p class="text-sm font-semibold">Full Kitchen</p>
                        </div>
                        @endif
                    </div>
                <p class="text-[#222222] leading-relaxed">
                    {{$hotel["description"]}}
                </p>
                </div>
            </div>
            <!-- Location -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold mb-6 text-[#222222]">Location</h2>
                <div class="h-[300px] relative rounded-lg overflow-hidden mb-6 bg-gray-200">
                    <iframe class="w-full h-full object-cover" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.8620727902903!2d-7.6497275247946614!3d33.58293024236642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d2e77f3d8aaf%3A0x9169b10a83e53ab!2sMohammed%20V%20Stadium!5e0!3m2!1sfr!2sma!4v1742225435829!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <!-- Booking Panel -->
        <div class="w-full lg:w-[380px] shrink-0">
            <div class="bg-white p-6 rounded-lg shadow-md border border-[#d9d9d9]">
                <div class="flex justify-between items-baseline mb-6">
                    <div class="text-2xl font-bold"><div id="price">{{ $rooms[0]->price_per_night ?? 0 }} DH</div><span class="text-[#afafaf] text-lg font-normal">/night</span></div>
                </div>
                <form action="/bookingHotel" method="POST">
                    @csrf
                    <div class="mb-4">
                        <select id="roomSelect" name="room_price" class="w-full border border-[#d9d9d9] rounded-md p-2">
                            @foreach($rooms as $room)
                                <option selected value="{{ $room->price_per_night }}">
                                    {{ $room->roomType->type }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="hotel_id" value="{{$hotel["id"]}}">
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div>
                            <label class="block text-sm mb-2">Check-in</label>
                            <input type="date" id="checkIn" name="check_in" class="w-full border border-[#d9d9d9] rounded-md p-2"/>
                        </div>
                        <div>
                            <label class="block text-sm mb-2">Check-out</label>
                            <input type="date" id="checkOut" name="check_out" class="w-full border border-[#d9d9d9] rounded-md p-2"/>
                        </div>
                    </div>

                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between">
                            <span id="nightDetails">0 DH x 0 nights</span>
                            <span id="subtotal">0 DH</span>
                        </div>
                        <div class="border-t border-[#d9d9d9] pt-3 mt-3">
                            <div class="flex justify-between font-bold">
                                <span>Total</span>
                                <span id="total">0 DH</span>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-[#a22c29] hover:bg-[#8a2624] text-white py-3 rounded-md">
                        Book Now
                    </button>
                </form>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


    </div>
</main>
<x-footer />
<script>

    const roomSelect = document.getElementById('roomSelect');
    const checkIn = document.getElementById('checkIn');
    const checkOut = document.getElementById('checkOut');
    const nightDetails = document.getElementById('nightDetails');
    const subtotal = document.getElementById('subtotal');
    const total = document.getElementById('total');

    const priceDiv = document.getElementById('price');

    roomSelect.addEventListener('change', function() {
        priceDiv.textContent = `${this.value} DH`;
    });
    function calculateTotal() {

        const pricePerNight = parseFloat(roomSelect.value) || 0;

        const startDate = new Date(checkIn.value);
        const endDate = new Date(checkOut.value);

        const diffTime = endDate - startDate;
        const nights = diffTime > 0 ? Math.ceil(diffTime / (1000 * 60 * 60 * 24)) : 0;

        const subTotal = pricePerNight * nights;

        nightDetails.textContent = `${pricePerNight} DH x ${nights} nights`;
        subtotal.textContent = `${subTotal} DH`;
        total.textContent = `${subTotal} DH`;
    }

    roomSelect.addEventListener('change', calculateTotal);
    checkIn.addEventListener('change', calculateTotal);
    checkOut.addEventListener('change', calculateTotal);


    const today = new Date();
    const tomorrow = new Date(today);
    tomorrow.setDate(today.getDate() + 1);

    const todayFormatted = today.toISOString().split('T')[0];
    const tomorrowFormatted = tomorrow.toISOString().split('T')[0];

    document.getElementById('checkIn').setAttribute('min', todayFormatted);

    document.getElementById('checkOut').setAttribute('min', tomorrowFormatted);
</script>
</body>
</html>
