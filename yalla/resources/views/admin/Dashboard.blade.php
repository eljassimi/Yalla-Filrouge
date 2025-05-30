<x-head />
<body class="bg-darkgray text-white">

<div class="flex h-screen overflow-hidden">
    <x-aside />
    <div class="flex-1 flex flex-col overflow-hidden">
        <x-DashboardHeader />
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
                                <h3 class="text-2xl font-bold">{{$usersCount}}</h3>
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
                                <h3 class="text-2xl font-bold">{{count($Matches)}}</h3>
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
                                <h3 class="text-2xl font-bold">{{$hotelsCount}}</h3>
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
                                <h3 class="text-2xl font-bold">{{$transportsCount}}</h3>
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
                            @foreach($paymentsArray as $payment)
                            <li class="py-3">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-primary flex items-center justify-center text-white font-medium mr-3">
                                        {{ substr($payment['name'], 0, 2) }}
                                    </div>
                                    <div>
                                        <p class="text-sm">{{$payment['name']}} Make a payement : <strong class=" text-primary">{{$payment['amount']}} DH</strong></p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-darkgray rounded-lg shadow">
                        <div class="p-4 border-b border-gray-700">
                            <h2 class="text-lg font-semibold">Stats</h2>
                        </div>
                        <div class="p-4 h-64">
                            <canvas id="statsChart"></canvas>
                        </div>
                    </div>

                    <div class="bg-darkgray rounded-lg shadow">
                        <div class="p-4 border-b border-gray-700">
                            <h2 class="text-lg font-semibold">Upcoming Matches</h2>
                        </div>
                        <div class="p-4">
                            <ul class="divide-y divide-gray-700">
                                @foreach($Matches->take(3) as $match)
                                    <li class="py-3 flex justify-between items-center">
                                        <div>
                                            <p class="font-medium">{{$match->name}}</p>
                                            <p class="text-xs text-lightgray">{{$match->date}}</p>
                                        </div>
                                        <span class="px-2 py-1 text-xs rounded-full bg-green-900 text-green-200">Upcoming</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('statsChart').getContext('2d');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Users', 'Matches', 'Hotels'],
                datasets: [{
                    label: 'Dashboard Statistics',
                    data: [
                        {{ $usersCount }},
                        {{ count($Matches) }},
                        {{ $hotelsCount }}
                    ],
                    backgroundColor: [
                        '#A22C29',
                        '#A22C29',
                        '#A22C29'
                    ],
                    borderWidth: 1,
                    borderRadius: 8,
                    maxBarThickness: 50
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#1f1f1f',
                        titleColor: '#fff',
                        bodyColor: '#e2e2e2',
                        padding: 10,
                        cornerRadius: 4,
                        displayColors: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        },
                        ticks: {
                            color: '#9ca3af'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#9ca3af'
                        }
                    }
                }
            }
        });
    });
</script>
</body>
</html>
