<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In with Yalla</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @font-face {
            font-family: 'Publica Sans Round';
            src: url('path-to-your-font/PublicaSansRound.woff2') format('woff2');
        }
        body {
            font-family: 'Publica Sans Round', sans-serif;
            background: linear-gradient(to right, #D6D5C9, #B9BAA3);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .custom-button {
            clip-path: polygon(10px 0, calc(100% - 10px) 0, 100% 50%, calc(100% - 10px) 100%, 10px 100%, 0 50%);
        }

        .custom-color {
            background-color: #B9BAA3;
        }

        .custom-color-hover:hover {
            background-color: #a8a994;
        }
    </style>
</head>
<body>
<div class="min-h-screen flex items-center justify-center relative">
    <img src="assets/elements/arabesque.png" class="absolute left-0 bottom-10 w-46 opacity-25">
    <img src="assets/elements/arabesque.png" class="absolute right-0 top-10 w-46 opacity-25">

    <div class="bg-[#1F1F1F] p-8 shadow-xl w-full max-w-md">
        <div class="text-center mb-8">
            <img src="assets/logo/Yalla.png" alt="logo" class="w-40 mx-auto">
            <p class="text-white text-lg">Sign In with Yalla</p>
        </div>

        <form class="space-y-6">
            <div>
                <label  class="block text-[#B9BAA3] mb-2">Email Address</label>
                <input type="email" placeholder="Email Address" class="w-full px-4 py-3 bg-gray-100 border border-[#B9BAA3] focus:outline-none focus:border-[#B9BAA3]">
            </div>

            <div>
                <label  class="block text-[#B9BAA3] mb-2">New Password</label>
                <input type="password" placeholder="New Password" class="w-full px-4 py-3 bg-gray-100 border border-[#B9BAA3] focus:outline-none focus:border-[#B9BAA3]">
                <div class="text-right mt-1">
                    <a href="#" class="text-[#B9BAA3] hover:text-[#a8a994] text-sm">Forget Password?</a>
                </div>
            </div>

            <button class="custom-button w-full custom-color text-gray-900 py-3 px-6 font-medium custom-color-hover transition-colors">
                Create
            </button>

            <div class="text-center text-sm">
                <p class="text-white">Don't have an account? <a href="/register"  class="text-[#B9BAA3] hover:text-[#a8a994]">Click here to Sign Up</a></p>
                <p class="text-white">If you have registered previously using another method please</p>
                <p class="text-white"> create a new Hayya account using the same email address</p>
                <p class="text-white">to retrieve your data <a href="/register" class="text-[#B9BAA3] hover:text-[#a8a994]">Click here to Sign Up</a></p>
            </div>
        </form>
    </div>
</div>
</body>
</html>
