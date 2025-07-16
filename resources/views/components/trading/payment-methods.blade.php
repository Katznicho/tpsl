<section class="py-16 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <!-- Header with Stats -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-primary mb-4">Secure Payment Methods</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-6">Choose from our comprehensive range of secure payment options to start trading with confidence</p>
            
            <!-- Trust Stats -->
            <div class="flex justify-center items-center gap-8 mb-8">
                <div class="text-center">
                    <div class="text-2xl font-bold text-primary">$2B+</div>
                    <div class="text-sm text-gray-600">Processed Monthly</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-primary">99.9%</div>
                    <div class="text-sm text-gray-600">Success Rate</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-primary">150+</div>
                    <div class="text-sm text-gray-600">Countries Supported</div>
                </div>
            </div>

            <!-- Search/Filter -->
            <div class="max-w-md mx-auto mb-8">
                <div class="relative">
                    <input type="text" placeholder="Search payment methods..." class="w-full px-4 py-2 rounded-full border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    <svg class="absolute right-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
            <!-- Mobile Money with Tooltip -->
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 cursor-pointer transform hover:-translate-y-1 hover:scale-105 animate-fade-in group relative">
                <div class="text-center">
                    <div class="absolute top-2 right-2">
                        <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full">Popular</span>
                    </div>
                    <img src="{{ asset("images/mtn.png") }}" alt="MTN Mobile Money" class="h-12 w-auto mx-auto mb-4 object-contain animate-pulse">
                    <h3 class="font-semibold text-gray-800 text-base">MTN Mobile Money</h3>
                    <p class="text-gray-500 text-xs mt-2">Instant Mobile Transfers</p>
                    
                    <!-- Tooltip Content -->
                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-3 py-2 bg-gray-800 text-white text-xs rounded-lg w-48 pointer-events-none">
                        <p class="font-semibold mb-1">Transaction Fee: 1%</p>
                        <p>Processing Time: Instant</p>
                        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 w-2 h-2 bg-gray-800 rotate-45"></div>
                    </div>
                </div>
            </div>
            
            <!-- Repeat the same pattern for other payment methods, updating the classes accordingly -->
            <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 cursor-pointer transform hover:scale-105 hover:bg-gray-50">
                <div class="text-center">
                    <img src="{{ asset("images/airtel.jpeg") }}" alt="Airtel Money" class="h-12 w-auto mx-auto mb-4 object-contain">
                    <h3 class="font-semibold text-gray-800 text-base">Airtel Money</h3>
                    <p class="text-gray-500 text-xs mt-1">Quick Mobile Payments</p>
                </div>
            </div>

            <!-- Continue with the same pattern for all other payment methods -->
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                <div class="text-center">
                    <img src="{{ asset("images/visa.png") }}" alt="Visa" class="h-16 w-auto mx-auto mb-6 object-contain">
                    <h3 class="font-semibold text-gray-800 text-lg">Visa</h3>
                    <p class="text-gray-500 text-sm mt-2">Global Card Payments</p>
                </div>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                <div class="text-center">
                    <img src="{{ asset("images/mastercard.jpeg") }}" alt="Mastercard" class="h-16 w-auto mx-auto mb-6 object-contain">
                    <h3 class="font-semibold text-gray-800 text-lg">Mastercard</h3>
                    <p class="text-gray-500 text-sm mt-2">Worldwide Acceptance</p>
                </div>
            </div>

            <!-- Digital Wallets -->
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                <div class="text-center">
                    <img src="{{ asset("images/google_pay.jpg") }}" alt="Google Pay" class="h-16 w-auto mx-auto mb-6 object-contain">
                    <h3 class="font-semibold text-gray-800 text-lg">Google Pay</h3>
                    <p class="text-gray-500 text-sm mt-2">Smart Digital Payments</p>
                </div>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                <div class="text-center">
                    <img src="{{ asset("images/apple_pay.png") }}" alt="Apple Pay" class="h-16 w-auto mx-auto mb-6 object-contain">
                    <h3 class="font-semibold text-gray-800 text-lg">Apple Pay</h3>
                    <p class="text-gray-500 text-sm mt-2">Seamless iOS Payments</p>
                </div>
            </div>

            <!-- Additional Payment Methods -->
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                <div class="text-center">
                    <img src="{{ asset("images/paypal.png") }}" alt="PayPal" class="h-16 w-auto mx-auto mb-6 object-contain">
                    <h3 class="font-semibold text-gray-800 text-lg">PayPal</h3>
                    <p class="text-gray-500 text-sm mt-2">Secure Online Transfers</p>
                </div>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                <div class="text-center">
                    <img src="{{ asset("images/stripe.png") }}" alt="Stripe" class="h-16 w-auto mx-auto mb-6 object-contain">
                    <h3 class="font-semibold text-gray-800 text-lg">Stripe</h3>
                    <p class="text-gray-500 text-sm mt-2">Professional Payments</p>
                </div>
            </div>

            <!-- Cryptocurrency -->
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                <div class="text-center">
                    <img src="{{ asset("images/bitcoin.png") }}" alt="Bitcoin" class="h-16 w-auto mx-auto mb-6 object-contain">
                    <h3 class="font-semibold text-gray-800 text-lg">Bitcoin</h3>
                    <p class="text-gray-500 text-sm mt-2">Crypto Payments</p>
                </div>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                <div class="text-center">
                    <img src="{{ asset("images/litecoin.png") }}" alt="Litecoin" class="h-16 w-auto mx-auto mb-6 object-contain">
                    <h3 class="font-semibold text-gray-800 text-lg">Litecoin</h3>
                    <p class="text-gray-500 text-sm mt-2">Fast Crypto Transfers</p>
                </div>
            </div>
        </div>

        <!-- Testimonial Section -->
        <div class="mt-16 max-w-4xl mx-auto">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0">
                        <svg class="h-8 w-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-600 italic">"The payment process was seamless and instant. Best trading platform I've used!"</p>
                        <p class="text-sm font-semibold text-gray-800 mt-2">- Sarah K., Verified Trader</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Security Badges with Enhanced Design -->
        <div class="mt-12 flex flex-wrap justify-center gap-4">
            <div class="inline-flex items-center space-x-2 bg-white px-4 py-2 rounded-full shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 cursor-pointer">
                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="text-sm font-medium text-gray-700">256-bit SSL Encryption</span>
            </div>
            <div class="inline-flex items-center space-x-3 bg-white px-6 py-3 rounded-full shadow-sm border border-gray-100">
                <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 116 0v2h2V7a5 5 0 00-5-5z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-700 font-medium">Secure Processing</span>
            </div>
            <div class="inline-flex items-center space-x-3 bg-white px-6 py-3 rounded-full shadow-sm border border-gray-100">
                <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-700 font-medium">PCI DSS Compliant</span>
            </div>
        </div>
    </div>
</section>

<style>
.animate-fade-in {
    animation: fadeIn 0.5s ease-in forwards;
    opacity: 0;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.animate-pulse {
    animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: .8; }
}
</style>