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
            </div>
        </main>
    </div>
</div>

</body>
</html>
