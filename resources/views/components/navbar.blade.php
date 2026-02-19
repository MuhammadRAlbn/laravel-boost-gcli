<nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo (Left) -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center">
                    <svg class="h-8 w-8 text-blue-600 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                        <path d="M2 17l10 5 10-5"></path>
                        <path d="M2 12l10 5 10-5"></path>
                    </svg>
                    <span class="text-xl font-bold text-gray-900 tracking-tight">SIPINTU</span>
                </a>
            </div>

            <!-- Nav Menu (Middle) -->
            <div class="hidden md:flex flex-grow justify-center space-x-8">
                <a href="#" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition duration-150 ease-in-out">Beranda</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition duration-150 ease-in-out">Profil</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition duration-150 ease-in-out">Layanan</a>
                
                <!-- Dropdown Informasi Publik -->
                <div class="relative group">
                    <button class="flex items-center text-gray-600 group-hover:text-blue-600 px-3 py-2 text-sm font-medium transition duration-150 ease-in-out focus:outline-none">
                        Informasi Publik
                        <svg class="ml-1 h-4 w-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 w-56 mt-0 origin-top-left bg-white border border-gray-100 rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="py-2 p-1">
                            <a href="{{ route('public-service-unit.index') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-150 ease-in-out">
                                Unit Pelayanan Publik
                            </a>
                        </div>
                    </div>
                </div>

                <a href="#" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition duration-150 ease-in-out">Tautan</a>
            </div>

            <!-- Button (Right) -->
            <div class="flex items-center">
                <a href="#" class="inline-flex items-center px-5 py-2 border border-transparent text-sm font-semibold rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out shadow-sm">
                    Aplikasi SIPINTU
                </a>
            </div>
        </div>
    </div>
</nav>
