<x-head />
<body class="bg-darkgray text-white">

<div class="flex h-screen overflow-hidden">
    <x-aside />
    <div class="flex-1 flex flex-col overflow-hidden">
        <x-DashboardHeader />
        <main class="flex-1 overflow-y-auto bg-black p-4">
            <div id="users-page" class="page-content">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <div>
                        <h1 class="text-2xl font-bold">User Management</h1>
                        <p class="text-lightgray">Manage registered users</p>
                    </div>
                </div>

                <div class="bg-darkgray rounded-lg shadow overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-700">
                            <thead class="bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Email</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Role</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-lightgray uppercase tracking-wider">Status</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-lightgray uppercase tracking-wider">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-700">
                                @foreach($users as $user)
                            <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 rounded-full bg-primary flex items-center justify-center text-white font-medium">
                                                {{ substr($user['name'],0,2)}}
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium">{{$user["name"]}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm">{{$user["email"]}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm">@if($user["is_admin"]) Admin @else User @endif</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($user['suspend'])
                                            <span class="px-2 py-1 text-xs rounded-full bg-red-900 text-red-200">Suspend</span>
                                        @else
                                            <span class="px-2 py-1 text-xs rounded-full bg-green-900 text-green-200">Active</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        @if($user['suspend'])
                                        <a href="/active-user/{{$user["id"]}}" class="text-green-500 hover:text-green-400">Activate</a>
                                        @else
                                        <a href="/suspend-user/{{$user["id"]}}" class="text-red-500 hover:text-red-400">Suspend</a>
                                        @endif
                                    </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- pagination-->
                    <div class="px-6 py-4 border-t border-gray-700 flex items-center justify-between">
                        <div class="text-sm text-lightgray">
                            Showing
                            <span class="font-medium">{{ $users->firstItem() }}</span>
                            to
                            <span class="font-medium">{{ $users->lastItem() }}</span>
                            of
                            <span class="font-medium">{{ $users->total() }}</span> results
                        </div>

                        <div class="flex items-center">
                            @if ($users->onFirstPage())
                                <span class="px-3 py-1 rounded-md bg-gray-800 text-gray-500 mr-2">Previous</span>
                            @else
                                <a href="{{ $users->previousPageUrl() }}" class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700 mr-2">Previous</a>
                            @endif
                            @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                                @if ($page == $users->currentPage())
                                    <span class="px-3 py-1 rounded-md bg-primary text-white mr-2">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}" class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700 mr-2">{{ $page }}</a>
                                @endif
                            @endforeach

                            @if ($users->hasMorePages())
                                <a href="{{ $users->nextPageUrl() }}" class="px-3 py-1 rounded-md bg-gray-800 text-lightgray hover:bg-gray-700">Next</a>
                            @else
                                <span class="px-3 py-1 rounded-md bg-gray-800 text-gray-500">Next</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


</body>
</html>
