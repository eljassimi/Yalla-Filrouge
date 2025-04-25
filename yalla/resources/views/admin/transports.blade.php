<x-head />
<body class="bg-darkgray text-white">

<div class="flex h-screen overflow-hidden">
    <x-aside />
    <div class="flex-1 flex flex-col overflow-hidden">
        <x-DashboardHeader />
        <main class="flex-1 overflow-y-auto bg-black p-4">

            <div id="transport-page" class="page-content">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <div>
                        <h1 class="text-2xl font-bold">Transport Management</h1>
                        <p class="text-lightgray">Manage transport services</p>
                    </div>
                    <button onclick="ShowForm()"  class="mt-4 md:mt-0 bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Add Transport
                    </button>
                </div>

                <div class="bg-darkgray rounded-lg shadow overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-700">
                            <thead class="bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Transport Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Description</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Price Per Km</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Seats</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-lightgray uppercase tracking-wider">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-700">
                            @foreach($transports as $transport)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium">{{$transport->name}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm">{{$transport->description}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm">{{$transport->price_per_km}} DH</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm">{{$transport->available_seats}} passengers</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button onclick='displayEditForm({{ $transport->id }}, {!! json_encode($transport->name) !!}, {!! json_encode($transport->description) !!}, {{ $transport->price_per_km }}, {{ $transport->available_seats }})' class="text-primary hover:text-primary/80 mr-3">Edit</button>
                                    <a href="/deleteTransport/{{$transport->id}}" class="text-red-500 hover:text-red-400">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="px-6 py-4 border-t border-gray-700 flex items-center justify-between">
                        <div class="text-sm text-lightgray">
                            Showing <span class="font-medium">{{$transports->firstItem()}}</span> to <span class="font-medium">{{$transports->lastItem()}}</span> of <span class="font-medium">{{$transports->total()}}</span> results
                        </div>
                        <div class="flex items-center">
                            @if($transports->onFirstPage())
                                <span class="px-3 py-1 rounded-md bg-gray-800 text-gray-500 mr-2">Previous</span>
                            @else
                                <a href="{{$transports->previousPageUrl()}}" class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700 mr-2">Previous</a>
                            @endif
                            @foreach ($transports->getUrlRange(1, $transports->lastPage()) as $page => $url)
                                @if($page == $transports->currentPage())
                                    <span class="px-3 py-1 rounded-md bg-primary text-white mr-2">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}" class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700 mr-2">{{ $page }}</a>
                                @endif
                            @endforeach
                            @if($transports->hasMorePages())
                                <a href="{{ $transports->nextPageUrl() }}" class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700">Next</a>
                            @else
                                <span class="px-3 py-1 rounded-md bg-gray-800 text-gray-500">Next</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div id="transport-form-modal" class=" hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                    <div class="bg-darkgray rounded-lg shadow-lg w-full max-w-md mx-4">
                        <div class="p-4 border-b border-gray-700 flex items-center justify-between">
                            <h3 class="text-lg font-semibold" id="transport-form-title">Add New Transport</h3>
                            <button onclick="HideForm()" class="text-lightgray hover:text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-4">
                            <form id="transport-form" action="/transport" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="transportId" name="id" value="">
                                <input type="hidden" id="methodField" name="_method" value="POST">
                                <div class="mb-4">
                                    <label for="transportName" class="block text-sm font-medium text-lightgray mb-1">Transport Name</label>
                                    <input type="text" id="transportName" name="name" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div class="mb-4">
                                    <label for="transportDescription" class="block text-sm font-medium text-lightgray mb-1">Transport Description</label>
                                    <textarea id="transportDescription" name="description" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="transportLogo" class="block text-sm font-medium text-lightgray mb-1">Transport Logo</label>
                                    <input type="file" id="transportLogo" name="logo" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div class="mb-4">
                                    <label for="transportPrice" class="block text-sm font-medium text-lightgray mb-1">Price Per Km</label>
                                    <input type="number" id="transportPrice" name="price_per_km" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div class="mb-4">
                                    <label for="transportCapacity" class="block text-sm font-medium text-lightgray mb-1">Capacity</label>
                                    <input type="number" id="transportCapacity" name="available_seats" placeholder="Number of passengers" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div class="flex justify-end mt-6">
                                    <button type="button" onclick="HideForm()" class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg mr-2">Cancel</button>
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
    let TransportForm = document.getElementById("transport-form-modal");

    function HideForm(){
        TransportForm.classList.add("hidden");
    }

    function ShowForm() {
        TransportForm.classList.remove('hidden');
        document.getElementById('transport-form-title').textContent = 'Add New Transport';

        document.getElementById("transport-form").reset();
        document.getElementById("transportId").value = "";
        document.getElementById("methodField").value = "POST";

        document.querySelector('label[for="transportLogo"]').textContent = "Transport Logo";
    }

    function displayEditForm(id,name,description,price,seats){
        console.log(id,name,description,price,seats);
        TransportForm.classList.remove('hidden');
        document.getElementById("transportId").value = id;
        document.getElementById('transport-form-title').textContent = 'Edit Transport';
        document.getElementById("transportName").value = name;
        document.getElementById("transportDescription").value = description;
        document.getElementById("transportPrice").value = price;
        document.getElementById("transportCapacity").value = seats;

        document.getElementById("methodField").value = "PUT";
        document.querySelector('label[for="transportLogo"]').textContent = "Transport Logo (Optional)";
    }
</script>
</body>
</html>
