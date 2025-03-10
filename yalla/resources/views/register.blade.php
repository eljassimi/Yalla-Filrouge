<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up with Yalla</title>
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

        .custom-checkbox {
            appearance: none;
            width: 30px;
            height: 24px;
            border: 2px solid #B9BAA3;
            background-color: transparent;
            cursor: pointer;
            transform: rotate(45deg); /* Rotates the checkbox */
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .custom-checkbox:checked::after {
            content: '✓';
            position: absolute;
            color: #B9BAA3;
            font-size: 16px;
            transform: rotate(-45deg); /* Aligns the checkmark properly */
        }

    </style>
</head>
<body>
<div class="flex items-center justify-center relative min-h-screen pt-12 pb-12">
    <img src="assets/elements/arabesque.png" class="absolute left-0 bottom-10 w-46 opacity-25">
    <img src="assets/elements/arabesque.png" class="absolute right-0 top-10 w-46 opacity-25">

    <div class="bg-[#1F1F1F] p-8 shadow-xl w-full max-w-md">
        <div class="text-center mb-6">
            <h1 class="text-white text-2xl font-extrabold mb-2">User Details</h1>
            <p class="text-white text-sm">Let's get your Account created, so you can enjoy the Hayya experience!</p>
        </div>

        <form action="/register" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-[#B9BAA3] mb-2">Email Address*</label>
                <input type="email" name="email" placeholder="Email Address" class="w-full px-4 py-3 bg-gray-100 border border-[#B9BAA3] focus:outline-none focus:border-[#B9BAA3]">
            </div>

            <div>
                <label class="block text-[#B9BAA3] mb-2">New Password*</label>
                <input type="password" name="password" placeholder="New Password" class="w-full px-4 py-3 bg-gray-100 border border-[#B9BAA3] focus:outline-none focus:border-[#B9BAA3]">
            </div>

            <div>
                <label class="block text-[#B9BAA3] mb-2">Confirm New Password*</label>
                <input type="password" name="password_confirmation" placeholder="Confirm New Password" class="w-full px-4 py-3 bg-gray-100 border border-[#B9BAA3] focus:outline-none focus:border-[#B9BAA3]">
            </div>

            <div>
                <label class="block text-[#B9BAA3] mb-2">Given Name*</label>
                <input type="text" name="name" placeholder="name" class="w-full px-4 py-3 bg-gray-100 border border-[#B9BAA3] focus:outline-none focus:border-[#B9BAA3]">
            </div>

            <div>
                <label class="block text-[#B9BAA3] mb-2">Current City*</label>
                <select  name="current_city" class="w-full px-4 py-3 bg-gray-100 border border-[#B9BAA3] focus:outline-none focus:border-[#B9BAA3]" required>
                    @foreach($cities as $city)
                        <option value="{{ $city }}" >{{ $city }}</option>
                    @endforeach
                </select>
            </div>

            <div class="space-y-4 mt-6">
                <div class="flex items-start gap-3">
                    <input type="checkbox" class="custom-checkbox mt-1">
                    <label class="text-white text-sm">
                        I have read and accepted the
                        <a href="/privacy" class="text-[#B9BAA3] hover:text-[#a8a994]">Terms & Conditions</a> and the
                        <a href="/privacy" class="text-[#B9BAA3] hover:text-[#a8a994]">Privacy Policy</a>.
                    </label>
                </div>

                <div class="flex items-start gap-3">
                    <input type="checkbox" class="custom-checkbox mt-1">
                    <label class="text-white text-sm">
                        I wish to receive offers, marketing content & communications from Yalla.
                    </label>
                </div>
            </div>

            <button type="submit" class="custom-button w-full custom-color text-gray-900 py-3 px-6 font-medium custom-color-hover transition-colors mt-6">
                Create
            </button>

            <div class="text-center text-sm mt-4">
                <p class="text-white">Already have an account? <a href="/" class="text-[#B9BAA3] hover:text-[#a8a994]">Sign In</a></p>
            </div>
        </form>
    </div>
</div>

</body>
</html>
