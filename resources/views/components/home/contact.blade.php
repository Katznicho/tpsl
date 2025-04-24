<section id="contact" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Contact Us</h2>
            <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
        </div>
        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <h3 class="text-xl font-semibold mb-4">Get In Touch</h3>
                <form action="/contact" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-gray-700 mb-2">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required></textarea>
                    </div>
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        Send Message
                    </button>
                </form>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4">Contact Information</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-4">
                        <svg class="h-6 w-6 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold">Address</h4>
                            <p class="text-gray-600">Kampala, Uganda</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <svg class="h-6 w-6 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold">Phone</h4>
                            <p class="text-gray-600">+256 XXX XXX XXX</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <svg class="h-6 w-6 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold">Email</h4>
                            <p class="text-gray-600">info@trifectaservices.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>