<x-head />

<body class="min-h-screen flex flex-col text-white font-['Poppins']">
<x-navbar />
<div class="pt-24 bg-lightgray py-12 px-6 relative overflow-hidden">
    <div class="max-w-4xl mx-auto relative z-10">
        <div class="flex flex-col md:flex-row items-center justify-between mb-8">
            <div class="flex items-center justify-between w-full">
                <div class="flex flex-col items-center relative">
                    <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center z-10 shadow-md mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-darkgray font-bold text-base mt-1">EVENT</span>
                        <span class="text-primary text-xs font-medium">Done</span>
                    </div>
                </div>

                <div class="hidden md:block h-1 bg-primary flex-grow relative z-0" style="margin: 0; position: relative; top: -33px;"></div>

                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center z-10 shadow-md mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-darkgray font-bold text-base mt-1">ACCOMMODATION</span>
                        <span class="text-primary text-xs font-medium">Done</span>
                    </div>
                </div>

                <div class="hidden md:block h-1 bg-primary flex-grow relative z-0" style="margin: 0; position: relative; top: -33px;"></div>

                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center z-10 shadow-md mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-darkgray font-bold text-base mt-1">TRANSPORT</span>
                        <span class="text-primary text-xs font-medium">In Progress</span>
                    </div>
                </div>

                <div class="hidden md:block h-1 bg-gray-700 flex-grow relative z-0" style="margin: 0; position: relative; top: -33px;"></div>

                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full bg-darkgray border-2 border-gray-700 flex items-center justify-center z-10 shadow-sm mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-lightgray" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-darkgray font-bold text-base mt-1">PAYMENT</span>
                        <span class="text-xs font-medium text-darkgray">Next</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content -->
<main class="flex-1 py-8 px-6">
    <div class="max-w-6xl mx-auto">
        <!-- Back Button -->
        <div class="mb-6">
            <a href="#" class="inline-flex items-center text-white hover:text-primary transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Transport Options
            </a>
        </div>

        <!-- Company Details Section -->
        <div class="bg-darkgray rounded-lg shadow-xl p-6 mb-8 fade-in">
            <div class="flex flex-col md:flex-row items-start gap-6">
                <div class="w-full md:w-1/4 flex justify-center">
                    <div class="w-48 h-48 bg-gray-800 rounded-lg flex items-center justify-center overflow-hidden">
                        <img id="companyLogo" src="/{{$transport["logo"]}}" alt="Company Logo" class="w-full h-full object-contain p-4">
                    </div>
                </div>
                <div class="w-full md:w-3/4">
                    <h1 id="companyName" class="text-3xl font-bold mb-2">{{$transport["name"]}}</h1>
                    <div class="flex items-center mb-4">
                        <span id="transportType" class="bg-primary/20 text-primary px-3 py-1 rounded-full text-sm font-medium">Bus</span>
                    </div>
                    <p class="text-gray-300 mb-4">{{$transport["description"]}}</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-800/50 p-4 rounded-lg">
                            <h3 class="text-sm text-gray-400 mb-1">Price per KM</h3>
                            <p id="pricePerKm" class="text-2xl font-bold">{{$transport["price_per_km"]}} DH</p>
                        </div>
                        <div class="bg-gray-800/50 p-4 rounded-lg">
                            <h3 class="text-sm text-gray-400 mb-1">Rating</h3>
                            <div class="flex items-center">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                                <span class="ml-2 text-gray-300">4.0 (120 reviews)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Travel Details Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Travel Info -->
            <div class="col-span-1 md:col-span-2">
                <div class="bg-darkgray rounded-lg shadow-xl p-6 h-full fade-in" style="animation-delay: 0.2s">
                    <h2 class="text-xl font-bold mb-6 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Travel Details
                    </h2>
                    <div class="flex flex-col md:flex-row items-center justify-between mb-6 bg-gray-800/50 p-4 rounded-lg">
                        <div class="text-center md:text-left mb-4 md:mb-0">
                            <h3 class="text-sm text-gray-400">From</h3>
                            <p id="startLocation" class="text-lg font-medium">{{Auth::user()->location->city}}</p>
                        </div>
                        <div class="flex-1 flex justify-center items-center px-4">
                            <div class="w-3 h-3 rounded-full bg-primary"></div>
                            <div class="flex-1 h-0.5 bg-primary mx-2"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            <div class="flex-1 h-0.5 bg-primary mx-2"></div>
                            <div class="w-3 h-3 rounded-full bg-primary"></div>
                        </div>
                        <div class="text-center md:text-right">
                            <h3 class="text-sm text-gray-400">To</h3>
                            <p id="destination" class="text-lg font-medium">{{$event->location->city}}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div class="bg-gray-800/50 p-4 rounded-lg">
                            <h3 class="text-sm text-gray-400 mb-1">Distance</h3>
                            <p id="distance" class="text-xl font-bold">240 KM</p>
                        </div>
                        <div class="bg-gray-800/50 p-4 rounded-lg">
                            <h3 class="text-sm text-gray-400 mb-1">Total Price</h3>
                            <p id="totalPrice" class="text-xl font-bold">360 DH</p>
                        </div>
                        <div class="bg-gray-800/50 p-4 rounded-lg">
                            <h3 class="text-sm text-gray-400 mb-1">Est. Travel Time</h3>
                            <p id="travelTime" class="text-xl font-bold">3h 15min</p>
                        </div>
                    </div>
                    <div id="map" class="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d612.8732090729193!2d-7.671812680675286!3d31.711966612469695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee8d96179e51%3A0x5950b6534f87adb8!2sMarrakech!5e0!3m2!1sfr!2sma!4v1743468423919!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <!-- Departure Times -->
            <div class="col-span-1">
                <div class="bg-darkgray rounded-lg shadow-xl p-6 h-full fade-in" style="animation-delay: 0.3s">
                    <h2 class="text-xl font-bold mb-6 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Departure Times
                    </h2>
                    <form action="/book-transport" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="departureDate" class="block text-sm text-gray-400 mb-1">Select Date</label>
                            <input type="date" name="booking_date" id="departureDate" class="w-full bg-gray-800 border border-gray-700 rounded-md px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <input id="form_distance" type="hidden" name="distance_km" value="">
                        <input id="form_total_price" type="hidden" name="total_price" value="">
                        <input id="transport_service_id" type="hidden" name="transport_service_id" value="{{$transport["id"]}}">
                        <button type="submit" id="bookNowBtn" class="w-full mt-4 mx-auto justify-center bg-primary hover:bg-primary/90 text-white py-3 rounded-md font-medium transition flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                            Book Now
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Additional Info Section -->
        <div class="mb-8">
            <!-- Policies Section -->
            <div class="bg-darkgray rounded-lg shadow-xl p-6 mb-8">
                <h2 class="text-xl font-bold mb-6 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Policies & Information
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-gray-800/50 p-4 rounded-lg">
                        <h3 class="font-medium mb-2">Baggage Policy</h3>
                        <p class="text-gray-300 text-sm">Each passenger is allowed one piece of luggage (max 20kg) and one carry-on bag. Additional luggage may incur extra charges.</p>
                    </div>
                    <div class="bg-gray-800/50 p-4 rounded-lg">
                        <h3 class="font-medium mb-2">Cancellation Policy</h3>
                        <p class="text-gray-300 text-sm">Free cancellation up to 24 hours before departure. 50% refund for cancellations between 24 and 12 hours. No refund for later cancellations.</p>
                    </div>
                    <div class="bg-gray-800/50 p-4 rounded-lg">
                        <h3 class="font-medium mb-2">Boarding Information</h3>
                        <p class="text-gray-300 text-sm">Please arrive at least 30 minutes before departure. Boarding closes 10 minutes before the scheduled departure time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@php
    use Illuminate\Support\Facades\Auth;
    $userLocation = Auth::user()->location->coordinates;
    $eventLocation = $event->location->coordinates;
    $price_per_km = $transport["price_per_km"];
 @endphp
<script>

    let userLocation = JSON.parse('<?php echo $userLocation; ?>');
    let eventLocation = JSON.parse('<?php echo $eventLocation; ?>');
    console.log("User Coordinates:", userLocation.latitude, userLocation.longitude);
    console.log("Event Coordinates:", eventLocation.latitude, eventLocation.longitude);

    let userLat = userLocation.latitude;
    let userLon = userLocation.longitude;

    let eventLat = eventLocation.latitude;
    let eventLon = eventLocation.longitude;

    let routeDistance;
    let totalPrice;


    const map = L.map('map').setView([userLat, userLon], 10); // Adjust zoom level as needed

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    const userMarker = L.marker([userLat, userLon]).addTo(map)
        .bindPopup("<b>User Location</b>")
        .openPopup();

    const eventMarker = L.marker([eventLat, eventLon]).addTo(map)
        .bindPopup("<b>Event Location</b>")
        .openPopup();

    async function getRoute(userLat, userLon, eventLat, eventLon) {
        const apiKey = "5b3ce3597851110001cf6248b8005c6e48ee4d18a01bea4f9b109e7c";
        const url = `https://api.openrouteservice.org/v2/directions/driving-car?api_key=${apiKey}&start=${userLon},${userLat}&end=${eventLon},${eventLat}`;

        try {
            const response = await fetch(url);
            const data = await response.json();

            console.log("Data fetched  : ", data);
            let route = data.features[0].geometry.coordinates;
            let distance = data.features[0].properties.summary.distance;
            let duration = data.features[0].properties.summary.duration;
            let hours = Math.floor(duration / 3600);
            let minutes = Math.floor((duration % 3600) / 60);
            console.log("hours : ", duration)
            console.log("minutes : ", minutes)
            let routeTime = hours > 0 ? `${hours}h ${minutes}min`: `${minutes}min`;
            routeDistance = (distance / 1000).toFixed(2);
            console.log('route : ', route);
            console.log('distance : ', routeDistance, " KM");


            document.getElementById("distance").innerHTML = `${routeDistance} KM`;
            let price_per_km = '<?php echo $price_per_km?>';
            totalPrice =  price_per_km * routeDistance;
            document.getElementById('totalPrice').innerHTML = `${totalPrice} DH`;
            document.getElementById('travelTime').innerHTML = `${routeTime}`;

            const routeCoordinates = route.map(coord => [coord[1], coord[0]]);
            const routePolyline = L.polyline(routeCoordinates, {
                color: '#1F1F1F',
                weight: 4,
                opacity: 0.7
            }).addTo(map);

            map.fitBounds(routePolyline.getBounds());

        } catch (error) {
            alert("Error fetching route data.");
            console.error(error);
        }
        document.getElementById("form_distance").value = routeDistance;
        document.getElementById("form_total_price").value = totalPrice;
    }
    getRoute(userLat, userLon, eventLat, eventLon);
</script>
</body>
</html>
