<section x-data="{
    currentSlide: 0,
    slides: [{
            image: 'https://images.unsplash.com/photo-1642790106117-e829e14a795f?auto=format&fit=crop&w=2000&q=80',
            title: 'Next-Gen AI Trading',
            subtitle: 'Powered by Advanced Algorithms',
            body: 'Experience the future of trading with our sophisticated AI algorithms that analyze market patterns 24/7.'
        },
        {
            image: 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=2000&q=80',
            title: 'Real-Time Market Analysis',
            subtitle: 'Instant Decision Making',
            body: 'Get real-time insights and execute trades automatically with our advanced market analysis system.'
        },
        {
            image: 'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=2000&q=80',
            title: 'Smart Portfolio Management',
            subtitle: 'Optimized Returns',
            body: 'Let our AI optimize your portfolio with risk-adjusted strategies for maximum potential returns.'
        }
    ],
    autoplay: true,
    init() {
        if (this.autoplay) {
            setInterval(() => {
                this.currentSlide = (this.currentSlide + 1) % this.slides.length
            }, 5000)
        }
        this.initMatrix();
        this.initTradingGraph();
    },
    initMatrix() {
        const canvas = document.getElementById('matrix-rain');
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        const matrix = '01';
        const characters = matrix.split('');
        const fontSize = 14;
        const columns = canvas.width/fontSize;
        const drops = Array(Math.floor(columns)).fill(1);

        function draw() {
            ctx.fillStyle = 'rgba(1, 20, 120, 0.05)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            ctx.fillStyle = '#0f0';
            ctx.font = fontSize + 'px monospace';
            for(let i = 0; i < drops.length; i++) {
                const text = characters[Math.floor(Math.random() * characters.length)];
                ctx.fillText(text, i * fontSize, drops[i] * fontSize);
                if(drops[i] * fontSize > canvas.height && Math.random() > 0.975)
                    drops[i] = 0;
                drops[i]++;
            }
        }
        setInterval(draw, 35);
    },
    initTradingGraph() {
        const ctx = document.getElementById('trading-graph').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: Array(24).fill('').map((_, i) => `${i}:00`),
                datasets: [{
                    label: 'Trading Activity',
                    data: Array(24).fill(0).map(() => Math.random() * 100),
                    borderColor: 'rgba(34, 197, 94, 0.8)',
                    backgroundColor: 'rgba(34, 197, 94, 0.2)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    duration: 2000,
                    easing: 'easeInOutQuart'
                },
                scales: {
                    y: { display: false },
                    x: { display: false }
                },
                plugins: {
                    legend: { display: false }
                }
            }
        });
    }
}" class="relative h-screen flex items-center overflow-hidden bg-[#011478]" x-init="init()">
    <!-- Matrix Rain Canvas Background -->
    <canvas id="matrix-rain" class="absolute inset-0 z-0 opacity-30"></canvas>

    <!-- 3D Floating Elements -->
    <div class="absolute inset-0 z-5 perspective-1000">
        <div class="floating-cube transform-style-3d animate-float-1"></div>
        <div class="floating-cube transform-style-3d animate-float-2"></div>
        <div class="floating-cube transform-style-3d animate-float-3"></div>
    </div>

    <!-- Trading Graph Overlay -->
    <div class="absolute bottom-20 right-0 w-full md:w-1/3 h-24 md:h-32 opacity-30 z-5">
        <canvas id="trading-graph"></canvas>
    </div>

    <!-- AI Processing Status -->
    <div class="absolute top-2 md:top-4 right-2 md:right-4 z-30 flex items-center space-x-2 text-xs md:text-sm text-white/80">
        <div class="h-2 w-2 bg-green-500 rounded-full animate-pulse"></div>
        <span class="font-mono">AI System Active</span>
        <span class="ml-2 font-mono typing-effect">Processing Market Data...</span>
    </div>

    <!-- Enhanced Gradient Overlay with 3D Depth -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#011478]/90 via-[#011478]/70 to-[#011478]/90 z-10 animate-gradient backdrop-blur-sm"></div>

    <!-- Slides with Enhanced Animations -->
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="currentSlide === index" 
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 transform translate-x-full"
             x-transition:enter-end="opacity-100 transform translate-x-0"
             x-transition:leave="transition ease-in duration-500"
             x-transition:leave-start="opacity-100 transform translate-x-0"
             x-transition:leave-end="opacity-0 transform -translate-x-full"
             class="absolute inset-0">
            <div class="absolute inset-0">
                <img :src="slide.image" :alt="slide.title"
                     class="w-full h-full object-cover object-center filter brightness-50 hover:scale-105 transition-transform duration-3000">
            </div>
            <div class="relative z-20 container mx-auto px-4 h-full flex items-center">
                <div class="max-w-4xl mx-auto text-center px-4 md:px-0">
                    <h1 class="text-3xl sm:text-5xl md:text-7xl font-bold text-white mb-2 md:mb-4 tracking-tight animate-text-glow">
                        <span class="block transform hover:scale-105 transition-transform duration-300" x-text="slide.title"></span>
                        <span class="block text-green-400 mt-1 md:mt-2 text-xl sm:text-3xl md:text-5xl animate-pulse" x-text="slide.subtitle"></span>
                    </h1>
                    <p class="text-base sm:text-xl md:text-2xl text-gray-200 mb-4 md:mb-8 typing-animation" x-text="slide.body"></p>
                    <div class="flex flex-col sm:flex-row justify-center gap-2 md:gap-4">
                        <a href="https://app.nextgentraderai.com/register" 
                           class="px-4 sm:px-6 md:px-8 py-3 md:py-4 text-base md:text-lg bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-green-500/50 animate-button-glow">
                            Start Trading
                        </a>
                        <a href="https://app.nextgentraderai.com/register"
                           class="px-4 sm:px-6 md:px-8 py-3 md:py-4 text-base md:text-lg bg-white/10 text-white font-semibold rounded-lg hover:bg-white/20 backdrop-blur-sm transform hover:scale-105 transition-all duration-300 border border-white/30 hover:border-white/50">
                            Explore Features
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <!-- Enhanced Navigation with Animation -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-30 flex space-x-3">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="currentSlide = index"
                    :class="{'bg-white scale-125': currentSlide === index, 'bg-white/50': currentSlide !== index}"
                    class="w-3 h-3 rounded-full transition-all duration-300 hover:bg-white hover:scale-125"></button>
        </template>
    </div>

    <!-- Enhanced Market Stats Ticker with Animation -->
    <div class="absolute bottom-0 left-0 right-0 bg-black/30 backdrop-blur-sm z-30 py-1 md:py-2 px-2 md:px-4 border-t border-white/10">
        <div class="flex justify-center space-x-4 md:space-x-8 text-xs md:text-sm text-white/90 animate-marquee overflow-hidden">
            <span class="flex items-center hover:scale-105 transition-transform cursor-pointer">
                <span class="text-green-400 mr-2 animate-pulse">BTC</span>
                <span>$43,521.00</span>
                <span class="text-green-400 ml-1">+2.5%</span>
            </span>
            <span class="flex items-center hover:scale-105 transition-transform cursor-pointer">
                <span class="text-green-400 mr-2 animate-pulse">ETH</span>
                <span>$2,891.00</span>
                <span class="text-green-400 ml-1">+3.2%</span>
            </span>
            <span class="flex items-center hover:scale-105 transition-transform cursor-pointer">
                <span class="text-red-400 mr-2 animate-pulse">DOW</span>
                <span>34,721.00</span>
                <span class="text-red-400 ml-1">-0.8%</span>
            </span>
        </div>
    </div>
</section>

<!-- Add these additional styles -->
<style>
.animate-gradient {
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
}

.animate-text-glow {
    text-shadow: 0 0 10px rgba(255,255,255,0.5);
    animation: textGlow 2s ease-in-out infinite;
}

.animate-button-glow {
    animation: buttonGlow 2s ease-in-out infinite;
}

/* Add responsive adjustments for typing animation */
.typing-animation {
    overflow: hidden;
    border-right: 2px solid #ffffff;
    white-space: normal;
    animation: blink-caret 0.75s step-end infinite;
}

@media (min-width: 768px) {
    .typing-animation {
        white-space: nowrap;
        animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
    }
}

/* Adjust marquee animation for mobile */
@media (max-width: 767px) {
    .animate-marquee {
        animation: marquee 15s linear infinite;
    }
}

@keyframes gradient {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

@keyframes textGlow {
    0% { text-shadow: 0 0 10px rgba(255,255,255,0.5); }
    50% { text-shadow: 0 0 20px rgba(255,255,255,0.8), 0 0 30px rgba(255,255,255,0.3); }
    100% { text-shadow: 0 0 10px rgba(255,255,255,0.5); }
}

@keyframes buttonGlow {
    0% { box-shadow: 0 0 5px rgba(34,197,94,0.5); }
    50% { box-shadow: 0 0 20px rgba(34,197,94,0.8); }
    100% { box-shadow: 0 0 5px rgba(34,197,94,0.5); }
}

@keyframes typing {
    from { width: 0 }
    to { width: 100% }
}

@keyframes blink-caret {
    from, to { border-color: transparent }
    50% { border-color: #ffffff }
}

.animate-marquee {
    animation: marquee 20s linear infinite;
}

@keyframes marquee {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
}

.perspective-1000 {
    perspective: 1000px;
}

.transform-style-3d {
    transform-style: preserve-3d;
}

.floating-cube {
    position: absolute;
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(5px);
}

@keyframes float-1 {
    0%, 100% { transform: translate3d(100px, 100px, 0) rotate3d(1, 1, 1, 0deg); }
    50% { transform: translate3d(150px, 150px, 100px) rotate3d(1, 1, 1, 180deg); }
}

@keyframes float-2 {
    0%, 100% { transform: translate3d(300px, 200px, 0) rotate3d(1, 1, 1, 0deg); }
    50% { transform: translate3d(350px, 250px, 150px) rotate3d(1, 1, 1, -180deg); }
}

@keyframes float-3 {
    0%, 100% { transform: translate3d(500px, 300px, 0) rotate3d(1, 1, 1, 0deg); }
    50% { transform: translate3d(550px, 350px, 200px) rotate3d(1, 1, 1, 360deg); }
}

.animate-float-1 { animation: float-1 15s ease-in-out infinite; }
.animate-float-2 { animation: float-2 20s ease-in-out infinite; }
.animate-float-3 { animation: float-3 25s ease-in-out infinite; }

.typing-effect {
    overflow: hidden;
    white-space: nowrap;
    border-right: 2px solid #ffffff;
    animation: typing 3s steps(40) infinite, blink-caret 0.75s step-end infinite;
    max-width: fit-content;
}

/* Add smooth transitions for all interactive elements */
.transition-all-smooth {
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}
</style>

<!-- Add Particles.js -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    particlesJS('particles-js', {
        particles: {
            number: { value: 80, density: { enable: true, value_area: 800 } },
            color: { value: '#ffffff' },
            shape: { type: 'circle' },
            opacity: {
                value: 0.5,
                random: false,
                animation: { enable: true, speed: 1, opacity_min: 0.1, sync: false }
            },
            size: {
                value: 3,
                random: true,
                animation: { enable: true, speed: 2, size_min: 0.1, sync: false }
            },
            line_linked: {
                enable: true,
                distance: 150,
                color: '#ffffff',
                opacity: 0.4,
                width: 1
            },
            move: {
                enable: true,
                speed: 2,
                direction: 'none',
                random: false,
                straight: false,
                out_mode: 'out',
                bounce: false,
            }
        },
        interactivity: {
            detect_on: 'canvas',
            events: {
                onhover: { enable: true, mode: 'repulse' },
                onclick: { enable: true, mode: 'push' },
                resize: true
            },
            modes: {
                repulse: { distance: 100, duration: 0.4 },
                push: { particles_nb: 4 }
            }
        },
        retina_detect: true
    });
});
</script>