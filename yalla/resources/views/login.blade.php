<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yalla Booking - Transport</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        primary: '#A22C29',
                        darkgray: '#1F1F1F',
                        lightgray: '#B9BAA3',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-lightgray">
<div class="min-h-screen flex items-center justify-center relative">
    <img src="assets/elements/arabesque.png" class="absolute left-0 bottom-10 w-46 opacity-25">
    <img src="assets/elements/arabesque.png" class="absolute right-0 top-10 w-46 opacity-25">

    <div class="bg-[#1F1F1F] p-8 shadow-xl w-full max-w-md">
        <div class="text-center mb-8">
            <img src="assets/logo/Yalla.png" alt="logo" class="w-40 mx-auto">
            <p class="text-white text-lg">Sign In with Yalla</p>
        </div>

        <form class="space-y-6" action="/login" method="POST">
            @csrf
            <div>
                <label  class="block text-[#B9BAA3] mb-2">Email Address</label>
                <input type="email" name="email" placeholder="Email Address" class="w-full px-4 py-3 bg-gray-100 border border-[#B9BAA3] focus:outline-none focus:border-[#B9BAA3]">
            </div>

            <div>
                <label  class="block text-[#B9BAA3] mb-2">Password</label>
                <input type="password" name="password" placeholder="Password" class="w-full px-4 py-3 bg-gray-100 border border-[#B9BAA3] focus:outline-none focus:border-[#B9BAA3]">
                <div class="text-right mt-1">
                    <a href="#" class="text-[#B9BAA3] hover:text-[#a8a994] text-sm">Forget Password?</a>
                </div>
            </div>

            <button type="submit" class="w-full bg-lightgray text-gray-900 py-3 px-6 font-medium custom-color-hover transition-colors">
                Log In
            </button>
        </form>

            <div class="text-center text-sm mt-4">
                <p class="text-white">Don't have an account? <a href="/register"  class="text-[#B9BAA3] hover:text-[#a8a994]">Click here to Sign Up</a></p>
            </div>
    </div>
</div>
</body>
</html>
