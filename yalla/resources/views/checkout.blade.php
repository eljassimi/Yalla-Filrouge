<x-head />
<body class="bg-darkgray text-white font-poppins min-h-screen">
<x-navbar />

<!-- Payment Section -->
<section class="py-12 md:py-20 relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute top-0 left-0 w-48 h-48 bg-primary/10 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-primary/10 rounded-full translate-x-1/2 translate-y-1/2 blur-3xl"></div>
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-12">
            <p class="text-lightgray uppercase tracking-wider mb-2">SECURE CHECKOUT</p>
            <h1 class="text-3xl md:text-4xl font-bold inline-block relative">
                Complete Your Payment
                <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-primary"></span>
            </h1>
        </div>

        <div class="bg-darkgray/80 backdrop-blur-sm border border-gray-800 rounded-xl shadow-2xl overflow-hidden">

                <!-- Order Summary -->
                <div class="w-full  bg-gray-900/50 p-6 md:p-8">
                    <h2 class="text-xl font-bold mb-6 pb-3 border-b border-gray-700">Order Summary</h2>

                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between">
                            <span class="text-lightgray">Event : </span>
                            <span class="font-medium">{{$event["name"]}}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-lightgray">Quantity</span>
                            <span class="font-medium">{{$quantity}}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-lightgray">Price per ticket</span>
                            <span class="font-medium">{{$ticket_price}} DH</span>
                        </div>
                        @if($hotel_price != null)
                        <div class="flex justify-between">
                            <span class="text-lightgray">Total Hotel Price</span>
                            <span class="font-medium">{{$hotel_price}} DH</span>
                        </div>
                        @endif

                        @if($transport_price != null)
                        <div class="flex justify-between">
                            <span class="text-lightgray">Transport Price</span>
                            <span class="font-medium">{{$transport_price}} DH</span>
                        </div>
                        @endif
                    </div>

                    <div class="py-3 border-t border-gray-700">
                        <div class="flex justify-between text-lg font-bold">
                            <span>Total</span>
                            <span class="text-primary">{{$total_price}} DH </span>
                        </div>
                    </div>

                    <form action="/payment" method="post">
                        @csrf
                        <input type="hidden" name="total_price" value="{{$total_price}}">
                    <button type="submit" id="submit-button" class="w-full bg-primary hover:bg-primary/90 text-white py-3 px-6 rounded-lg font-bold transition-all transform hover:scale-[1.02] active:scale-[0.98] shadow-lg flex items-center justify-center">
                        <span>Pay {{$total_price}} DH</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </button>
                    </form>

                    <div class="mt-6 bg-primary/10 p-4 rounded-lg">
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-sm text-lightgray">Your tickets will be available in the Yalla mobile app after successful payment.</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-center space-x-4 mt-6">
                        <img src="https://cdn.cdnlogo.com/logos/v/69/visa.svg" alt="Visa" class="h-8">
                        <img src="https://cdn.cdnlogo.com/logos/m/33/mastercard.svg" alt="Mastercard" class="h-8">
                        <img src="https://cdn.cdnlogo.com/logos/a/57/american-express.svg" alt="American Express" class="h-8">
                        <img src="https://cdn.cdnlogo.com/logos/p/26/paypal.svg" alt="PayPal" class="h-8">
                    </div>
                </div>
        </div>
        <!-- Security Notice -->
        <div class="mt-8 text-center">
            <div class="flex items-center justify-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
                <span class="text-lightgray text-sm">Secure Payment Processed by Stripe</span>
            </div>
            <p class="text-xs text-lightgray">Your payment information is encrypted and securely processed by Stripe.</p>
        </div>
    </div>
</section>

<script src="https://js.stripe.com/v3/"></script>
<script>
    // Initialize Stripe with your publishable key
    const stripe = Stripe('{{ env("STRIPE_KEY") }}');

    // Create an elements instance
    const elements = stripe.elements();

    const card = elements.create("card", {
        style: {
            base: {
                color: "#ffffff",
                fontSize: "16px",
                fontFamily: "'Poppins', sans-serif",
                "::placeholder": {
                    color: "#cccccc"
                }
            },
            invalid: {
                color: "#ff6b6b"
            }
        }
    });

    // Create the card element
    const cardElement = elements.create('card', {
        style: style,
        hidePostalCode: true // Since you're collecting it separately
    });

    // Wait for the DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Mount the card element
        cardElement.mount('#card-element');
    });

    // Handle real-time validation errors
    cardElement.addEventListener('change', function(event) {
        const displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });


    // Handle form submission
    const form = document.getElementById('payment-form');
    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        // Disable the submit button to prevent repeated clicks
        document.getElementById('submit-button').disabled = true;

        // Collect customer information
        const billingDetails = {
            name: document.getElementById('first-name').value + ' ' + document.getElementById('last-name').value,
            email: document.getElementById('email').value,
            phone: document.getElementById('phone').value,
            address: {
                line1: document.getElementById('address').value,
                city: document.getElementById('city').value,
                postal_code: document.getElementById('postal-code').value,
                country: document.getElementById('country').value,
            }
        };

        // Create a token
        const {token, error} = await stripe.createToken(cardElement, billingDetails);

        if (error) {
            // Show error message
            const errorElement = document.getElementById('card-errors');
            errorElement.textContent = error.message;
            document.getElementById('submit-button').disabled = false;
        } else {
            // Send token to server
            stripeTokenHandler(token);
        }
    });

    // Function to handle the token and submit the form
    function stripeTokenHandler(token) {
        const form = document.getElementById('payment-form');

        // Create hidden input for the token
        const hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
    }
</script>
</body>
</html>
