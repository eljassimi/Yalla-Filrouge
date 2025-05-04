<x-head />
<body class="bg-darkgray text-white">
<div class="flex flex-col items-center justify-center min-h-screen p-4">
    <div class="w-full max-w-md bg-black rounded-lg shadow-lg p-8 text-center">
        <div class="mb-6">
            <div class="mx-auto w-16 h-16 flex items-center justify-center rounded-full bg-primary bg-opacity-20 text-primary mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
            </div>

            <h1 class="text-2xl font-bold mb-2">Account Suspended</h1>
            <p class="text-lightgray mb-6">Your account has been suspended due to violation of our terms of service.</p>

            <div class="bg-darkgray p-4 rounded-lg mb-6">
                <p class="text-sm text-lightgray">If you believe this is a mistake or would like to appeal this decision, please contact our support team.</p>
            </div>

            <a href="/login" class="inline-block w-full py-3 px-4 bg-primary hover:bg-opacity-90 text-white font-medium rounded-lg transition-colors duration-200">
                Return to Sign In
            </a>
        </div>

        <p class="text-xs text-lightgray">Need help? Contact <a href="mailto:support@yalla.com" class="text-primary hover:underline">support@yalla.com</a></p>
    </div>
</div>
</body>
</html>
