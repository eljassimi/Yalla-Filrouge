<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions | Privacy Policy</title>
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
<div class="min-h-screen flex flex-col items-center justify-center relative pt-12 pb-12">
    <img src="assets/elements/arabesque.png" class="absolute left-0 bottom-10 w-46 opacity-25">
    <img src="assets/elements/arabesque.png" class="absolute right-0 top-10 w-46 opacity-25">

    <div class="bg-[#1F1F1F] p-8 shadow-xl w-full max-w-4xl">
        <div class="text-center mb-8">
            <h1 class="text-white text-3xl font-extrabold mb-2">Terms & Conditions & Privacy Policy</h1>
            <p class="text-white text-sm">By using Yalla, you agree to the following terms and conditions and privacy policy.</p>
        </div>

        <div class="space-y-6 text-white">
            <!-- Terms & Conditions Section -->
            <section>
                <h2 class="text-xl font-bold mb-4">Terms & Conditions</h2>
                <p>
                    Welcome to Yalla! These terms and conditions govern your use of our platform, and by using our services, you agree to abide by them. The following outlines your rights and obligations as a user:
                </p>
                <ul class="list-disc pl-5 mt-4">
                    <li>You must be at least 18 years old to use Yalla.</li>
                    <li>All personal data must be truthful and complete to the best of your knowledge.</li>
                    <li>You are responsible for maintaining the confidentiality of your account and password.</li>
                    <li>Any illegal activities will result in immediate account suspension.</li>
                    <li>Yalla reserves the right to modify or terminate the services at any time without notice.</li>
                </ul>
            </section>

            <!-- Privacy Policy Section -->
            <section>
                <h2 class="text-xl font-bold mb-4">Privacy Policy</h2>
                <p>
                    At Yalla, we value your privacy. The following explains how we collect, use, and protect your personal data:
                </p>
                <ul class="list-disc pl-5 mt-4">
                    <li>We collect personal data, including email and contact details, for account creation and service provision.</li>
                    <li>Your data will never be shared with third parties without your consent, except as required by law.</li>
                    <li>We implement advanced security measures to protect your information from unauthorized access.</li>
                    <li>You have the right to access, update, or delete your personal data at any time.</li>
                    <li>By using Yalla, you consent to our collection and use of your data as described here.</li>
                </ul>
            </section>

            <div class="text-center mt-8">
                <a href="/" class="custom-button w-full custom-color text-gray-900 py-3 px-6 font-medium custom-color-hover transition-colors mt-6">
                    Go Back to Sign Up
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
