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
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


</body>
</html>
