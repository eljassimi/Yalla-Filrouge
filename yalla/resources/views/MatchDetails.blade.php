<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yalla Match Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: "#1f1f1f",
                        foreground: "#ffffff",
                        card: "#0a0a0a",
                        primary: "#a22c29",
                        "primary-hover": "#8a2624",
                        accent: "#b9baa3",
                        border: "#313131",
                        muted: "#3b3b3b",
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #1f1f1f;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #1f1f1f;
        }

        ::-webkit-scrollbar-thumb {
            background: #3b3b3b;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #a22c29;
        }
    </style>
</head>
<body class="bg-yalla-dark min-h-screen flex flex-col font-['Poppins']">

<header class="bg-[#1f1f1f] border-b border-[#313131]">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center w-[150px]">
                <a href="/"><img class="w-full h-auto" src="assets/logo/Yalla2.png" alt="logo"></a>
            </div>
            <nav class="hidden md:flex space-x-8 ">
                <a href="/tickets" class="text-white hover:text-gray-300">Tickets</a>
                <a href="#" class="text-white hover:text-gray-300">Events</a>
                <a href="#" class="text-white hover:text-gray-300">Transport</a>
                <a href="#" class="text-white hover:text-gray-300">Booking</a>
            </nav>
            <div>
                <a href="/logout" class="bg-[#a22c29] text-white px-6 py-1 hover:bg-[#8a2624] transition-colors">
                    Logout
                </a>
            </div>
        </div>
    </div>
</header>
</body>
</html>
