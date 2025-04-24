<section x-data="{
    currentSlide: 0,
    slides: [{
            image: 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80',
            title: 'Professional Security Services',
            subtitle: 'Your Safety, Our Priority',
            body: 'Delivering comprehensive security solutions with unmatched expertise and dedication to protect what matters most.'
        },
        {
            image: 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80',
            title: 'Expert Training',
            subtitle: 'Building Excellence',
            body: 'World-class security training programs designed to develop skilled professionals and enhance organizational security.'
        },
        {
            image: 'https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80',
            title: 'Advanced Security Solutions',
            subtitle: 'Innovation & Reliability',
            body: 'Utilizing cutting-edge technology and proven methodologies to deliver superior security services.'
        }
    ],
    init() {}
}" class="relative h-[100vh] flex items-center overflow-hidden pt-[96px]" x-init="init()">

    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="currentSlide === index" x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0 transform translate-x-full"
            x-transition:enter-end="opacity-100 transform translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-x-0"
            x-transition:leave-end="opacity-0 transform -translate-x-full" class="absolute inset-0">
            <div class="absolute inset-0 z-0 bg-gray-900">
                <img :src="slide.image" :alt="slide.title"
                    :class="['w-full h-full object-cover object-[50%_40%] sm:object-[50%_35%] brightness-50']">
            </div>
            <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-white h-full flex items-center">
                <div class="text-center w-full">
                    <h1 class="text-4xl font-bold tracking-tight sm:text-5xl md:text-6xl">
                        <span class="block" x-text="slide.title"></span>
                        <span class="block text-[#13AFD1]" x-text="slide.subtitle"></span>
                    </h1>
                    <p class="mx-auto mt-3 max-w-md text-base sm:text-lg md:mt-5 md:max-w-3xl md:text-xl"
                        x-text="slide.body"></p>
                    <div class="mt-8 flex justify-center gap-x-6">
                        <a href="#contact" 
                            class="rounded-md bg-[#13AFD1] px-6 py-3 text-lg font-semibold text-white shadow-sm hover:bg-[#0F8FA8] transition-colors">
                            Contact Us
                        </a>
                        <a href="#services"
                            class="rounded-md bg-white px-6 py-3 text-lg font-semibold text-[#13AFD1] shadow-sm hover:bg-gray-100 transition-colors">
                            Our Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <!-- Navigation Buttons -->
    <button @click="currentSlide = (currentSlide - 1 + slides.length) % slides.length"
        class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 rounded-full p-2 z-20">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
    <button @click="currentSlide = (currentSlide + 1) % slides.length"
        class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 rounded-full p-2 z-20">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    <!-- Indicators -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-20">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="currentSlide = index"
                :class="{ 'bg-white': currentSlide === index, 'bg-white/50': currentSlide !== index }"
                class="w-2 h-2 rounded-full transition-all duration-300"></button>
        </template>
    </div>
</section>