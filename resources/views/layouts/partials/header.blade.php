<header class="fixed w-full bg-[#011478] text-white transition-all duration-300 z-50" id="main-header">
    <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="NextGenTraderAI" class="h-10 w-auto">
                    <span class="ml-2 text-xl font-semibold tracking-tight">NextGenTraderAI</span>
                </a>
            </div>

            <!-- Desktop Nav -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="https://app.nextgentraderai.com/login"
                   class="px-4 py-2 text-sm font-medium border border-white rounded-md hover:bg-white hover:text-[#011478] transition">
                    Login
                </a>
                <a href="https://app.nextgentraderai.com/register"
                   class="px-4 py-2 text-sm font-medium border border-white rounded-md hover:bg-white hover:text-[#011478] transition">
                    Register
                </a>
            </div>

            <!-- Mobile Toggle Button -->
            <div class="md:hidden">
                <button id="mobileMenuToggle" class="focus:outline-none">
                    <svg id="menuIcon" class="w-6 h-6 text-white block" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="closeIcon" class="w-6 h-6 text-white hidden" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden mt-2 pb-4 space-y-2">
            <a href="https://app.nextgentraderai.com/login"
               class="block mx-4 px-4 py-2 text-sm font-medium border border-white rounded-md hover:bg-white hover:text-[#011478] transition">
                Login
            </a>
            <a href="https://app.nextgentraderai.com/register"
               class="block mx-4 px-4 py-2 text-sm font-medium border border-white rounded-md hover:bg-white hover:text-[#011478] transition">
                Register
            </a>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('mobileMenuToggle');
        const menu = document.getElementById('mobileMenu');
        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');

        toggle.addEventListener('click', function () {
            menu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // Optional: Hide menu when a link is clicked
        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });
    });
</script>
