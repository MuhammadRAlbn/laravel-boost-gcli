<x-layout>
    <x-slot:title>Unit Pelayanan Publik</x-slot:title>

    <div x-data="{
        activeTab: 'layanan-A',
        lightbox: {
            open: false,
            src: ''
        },
        openLightbox(src) {
            this.lightbox.src = src;
            this.lightbox.open = true;
            document.body.style.overflow = 'hidden';
        },
        closeLightbox() {
            this.lightbox.open = false;
            setTimeout(() => {
                this.lightbox.src = '';
                document.body.style.overflow = '';
            }, 300);
        }
    }" class="bg-white text-slate-800 antialiased font-sans">

        <!-- Main Container -->
        <section class="max-w-6xl mx-auto px-6 py-20">

            <!-- Header -->
            <div class="mb-10 p-4 rounded-lg">
                <h1 class="text-4xl md:text-5xl tracking-tight text-primary font-bold">
                    Unit Pelayanan Publik
                </h1>
            </div>

            <!-- Navigation Tabs (6 Menus) -->
            <div class="flex flex-wrap justify-center mb-16 gap-2 sm:gap-3 bg-white rounded-full p-1.5 sm:p-2">
                <button @click="activeTab = 'layanan-A'"
                    :class="activeTab === 'layanan-A' ? 'bg-brand-orange text-white' : 'bg-slate-100 text-slate-700'"
                    class="tab-btn px-3 sm:px-3 py-2 sm:py-3 rounded-full text-xs sm:text-sm md:text-[16px] font-semibold whitespace-nowrap transition-all duration-300 grow">
                    Profil UPP
                </button>
                <button @click="activeTab = 'layanan-B'"
                    :class="activeTab === 'layanan-B' ? 'bg-brand-orange text-white' : 'bg-slate-100 text-slate-700'"
                    class="tab-btn px-3 sm:px-3 py-2 sm:py-3 rounded-full text-xs sm:text-sm md:text-[16px] font-semibold whitespace-nowrap transition-all duration-300 grow">
                    Visi & Misi UPP
                </button>
                <button @click="activeTab = 'layanan-C'"
                    :class="activeTab === 'layanan-C' ? 'bg-brand-orange text-white' : 'bg-slate-100 text-slate-700'"
                    class="tab-btn px-3 sm:px-3 py-2 sm:py-3 rounded-full text-xs sm:text-sm md:text-[16px] font-semibold whitespace-nowrap transition-all duration-300 grow">
                    Maklumat Pelayanan
                </button>
                <button @click="activeTab = 'layanan-D'"
                    :class="activeTab === 'layanan-D' ? 'bg-brand-orange text-white' : 'bg-slate-100 text-slate-700'"
                    class="tab-btn px-3 sm:px-3 py-2 sm:py-3 rounded-full text-xs sm:text-sm md:text-[16px] font-semibold whitespace-nowrap transition-all duration-300 grow">
                    Daftar SOP & Formulir
                </button>
                <button @click="activeTab = 'layanan-E'"
                    :class="activeTab === 'layanan-E' ? 'bg-brand-orange text-white' : 'bg-slate-100 text-slate-700'"
                    class="tab-btn px-3 sm:px-3 py-2 sm:py-3 rounded-full text-xs sm:text-sm md:text-[16px] font-semibold whitespace-nowrap transition-all duration-300 grow">
                    Pengaduan
                </button>
                <button @click="activeTab = 'layanan-F'"
                    :class="activeTab === 'layanan-F' ? 'bg-brand-orange text-white' : 'bg-slate-100 text-slate-700'"
                    class="tab-btn px-3 sm:px-3 py-2 sm:py-3 rounded-full text-xs sm:text-sm md:text-[16px] font-semibold whitespace-nowrap transition-all duration-300 grow">
                    Informasi Publik
                </button>
            </div>

            <!-- Content Area -->
            <div class="relative rounded-[2.5rem] px-3 min-h-[500px]">

                <!-- Tab 1 -->
                <div x-show="activeTab === 'layanan-A'"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="mb-2">
                        <!-- Waktu Layanan Section -->
                        <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                            <!-- Kolom Kiri: Gambar -->
                            <div class="relative group">
                                <div class="absolute -inset-4 bg-brand-orange/30 rounded-[2.5rem] transform -rotate-2">
                                </div>
                                <img src="https://placehold.co/600x400" alt="Waktu Layanan"
                                    class="relative rounded-[2rem] shadow-xl w-full h-80 object-cover border-4 border-white cursor-pointer hover:scale-[1.02] transition-transform duration-500"
                                    @click="openLightbox('https://placehold.co/600x400')">
                            </div>

                            <!-- Kolom Kanan: Info Waktu -->
                            <div>
                                <h3 class="text-xl font-bold mb-6 text-slate-800 flex items-center gap-2">
                                    <svg class="w-6 h-6 text-brand-orange" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Waktu Layanan
                                </h3>
                                <div class="space-y-4">
                                    <div
                                        class="bg-white py-4 px-6 rounded-2xl shadow-sm border border-orange-300 border-l-4 border-l-brand-orange">
                                        <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Senin s.d
                                            Kamis</p>
                                        <p class="text-slate-800 font-semibold">08.00 - 12.00 WIB & 13.00 - 16.00 WIB</p>
                                    </div>
                                    <div
                                        class="bg-white py-4 px-6 rounded-2xl shadow-sm border border-orange-300 border-l-4 border-l-brand-orange">
                                        <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Jumat</p>
                                        <p class="text-slate-800 font-semibold">08.00 - 12.00 WIB & 14.00 - 16.30 WIB</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tupoksi & Image Section -->
                        <div class="">
                            <div class="space-y-6">
                                <h3 class="text-xl font-bold text-slate-800 flex items-center gap-2">
                                    <svg class="w-6 h-6 text-brand-orange" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                        </path>
                                    </svg>
                                    Tupoksi
                                </h3>
                                <div class="text-slate-600 leading-relaxed space-y-4 text-justify">
                                    <p class="text-lg">
                                        Unit Pelayanan Publik Balai Standardisasi dan Pelayanan Jasa Industri Banda Aceh
                                        (UPP BSPJI Banda Aceh) merupakan unit kerja non struktural di bawah Badan
                                        Standardisasi dan Kebijakan Jasa Industri (BSKJI) yang melakukan kegiatan
                                        penyelengaraan pelayanan publik di lingkungan Balai Standardisasi dan Pelayanan Jasa
                                        Industri (BSPJI) Industri Banda Aceh Kementerian Perindustrian.
                                    </p>
                                    <p class="text-lg">
                                        Tugas UPP BSPJI Banda Aceh adalah memberikan pelayanan kepada masyarakat atau badan
                                        hukum atas permintaan informasi, konsultansi, dan pelaksanaan pelayanan publik yang
                                        merupakan tugas pokok dan fungsi dari BSPJI Banda Aceh.
                                    </p>
                                </div>
                            </div>
                            <div class="mt-12">
                                <img src="https://placehold.co/800x400" alt="Ilustrasi Tambahan"
                                    class="w-full h-auto rounded-[2rem] shadow-lg border border-slate-100 bg-slate-200 cursor-pointer hover:opacity-95 transition-opacity"
                                    @click="openLightbox('https://placehold.co/800x400')">
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Tab 2 -->
                <div x-show="activeTab === 'layanan-B'" x-cloak
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="max-w-5xl space-y-10">

                        <!-- Visi Card -->
                        <div
                            class="relative overflow-hidden bg-white p-8 md:p-12 rounded-[2.5rem] shadow-xl border border-slate-400">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-brand-orange/5 rounded-full -mr-16 -mt-16">
                            </div>
                            <div class="relative z-10 flex flex-col md:flex-row items-center gap-8">
                                <div class="bg-brand-orange/10 p-5 rounded-3xl">
                                    <svg class="w-10 h-10 text-brand-orange" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-center md:text-left">
                                    <h3 class="text-xs font-extrabold uppercase tracking-[0.2em] text-brand-orange mb-3">
                                        Visi</h3>
                                    <p class="text-2xl md:text-3xl font-bold text-primary leading-tight">
                                        Menjadi Unit Pelayanan Publik yang profesional dalam memberikan layanan kepada
                                        pelanggan.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-10">
                            <!-- Misi Card -->
                            <div
                                class="relative overflow-hidden bg-white p-8 rounded-[2.5rem] border border-slate-400 shadow-xl">
                                <div
                                    class="absolute bottom-0 left-0 w-24 h-24 bg-brand-orange/10 rounded-full -ml-12 -mb-12">
                                </div>
                                <div class="relative z-10">
                                    <h3 class="text-xl font-extrabold text-primary mb-8 flex items-center gap-3">
                                        <span
                                            class="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center text-sm">M</span>
                                        Misi Kami
                                    </h3>
                                    <ul class="space-y-6">
                                        <li class="flex items-start gap-4">
                                            <div class="mt-1 bg-slate-50 p-1.5 rounded-lg shadow-sm">
                                                <svg class="w-4 h-4 text-brand-orange" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7"></path>
                                                </svg>
                                            </div>
                                            <p class="text-slate-700 font-medium">Meningkatkan profesionalisme aparatur dan
                                                kualitas pelayanan kepada publik.</p>
                                        </li>
                                        <li class="flex items-start gap-4">
                                            <div class="mt-1 bg-slate-50 p-1.5 rounded-lg shadow-sm">
                                                <svg class="w-4 h-4 text-brand-orange" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7"></path>
                                                </svg>
                                            </div>
                                            <p class="text-slate-700 font-medium">Membantu sistem pelayanan secara online.
                                            </p>
                                        </li>
                                        <li class="flex items-start gap-4">
                                            <div class="mt-1 bg-slate-50 p-1.5 rounded-lg shadow-sm">
                                                <svg class="w-4 h-4 text-brand-orange" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7"></path>
                                                </svg>
                                            </div>
                                            <p class="text-slate-700 font-medium">Menciptakan kepercayaan pelanggan terhadap
                                                aparatur penyelenggara pelayanan publik.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Motto Card -->
                            <div
                                class="relative overflow-hidden bg-white p-8 rounded-[2.5rem] border border-slate-400 shadow-xl flex flex-col justify-center items-center text-center">
                                <div class="absolute top-0 right-0 w-24 h-24 bg-brand-orange/10 rounded-full -mr-12 -mt-12">
                                </div>
                                <div class="absolute bottom-0 left-0 w-20 h-20 bg-slate-100/50 rounded-full -ml-10 -mb-10">
                                </div>
                                <div class="relative z-10">
                                    <div class="mb-6 opacity-20">
                                        <svg class="w-12 h-12 text-brand-orange" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H16.017C15.4647 8 15.017 8.44772 15.017 9V12C15.017 12.5523 14.5693 13 14.017 13H12.017C11.4647 13 11.017 12.5523 11.017 12V9C11.017 7.34315 12.3602 6 14.017 6H19.017C20.6739 6 22.017 7.34315 22.017 9V15C22.017 16.6569 20.6739 18 19.017 18H17.017L14.017 21ZM5.017 21L5.017 18C5.017 16.8954 5.91243 16 7.017 16H10.017C10.5693 16 11.017 15.5523 11.017 15V9C11.017 8.44772 10.5693 8 10.017 8H7.017C6.46472 8 6.017 8.44772 6.017 9V12C6.017 12.5523 5.56928 13 5.017 13H3.017C2.46472 13 2.017 12.5523 2.017 12V9C2.017 7.34315 3.36015 6 5.017 6H10.017C11.6739 6 13.017 7.34315 13.017 9V15C13.017 16.6569 11.6739 18 10.017 18H8.017L5.017 21Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xs font-extrabold uppercase tracking-[0.2em] text-slate-400 mb-4">Motto
                                        Kami</h3>
                                    <p class="text-xl font-bold text-slate-800 italic leading-relaxed">
                                        "Memberikan pelayanan dengan cepat, tepat dan akurat yang berorientasi pada kepuasan
                                        pelanggan."
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tab 3 s/d 6 (Dummy Content) -->
                <div x-show="activeTab === 'layanan-C'" x-cloak
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0">
                    <img src="https://placehold.co/800x400" alt="Maklumat Pelayanan"
                        class="object-cover w-full sm:w-[60%] rounded-2xl cursor-pointer hover:opacity-95 transition-opacity mx-auto shadow-lg"
                        @click="openLightbox('https://placehold.co/800x400')">
                </div>
                <div x-show="activeTab === 'layanan-D'" x-cloak
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                        <!-- SOP Card 1 -->
                        <div class="flex flex-col group h-full">
                            <div
                                class="aspect-[16/10] bg-slate-200 rounded-2xl overflow-hidden mb-6 border border-black/10">
                                <img src="https://placehold.co/300x200" alt="SOP Pengujian"
                                    class="w-full h-full object-cover cursor-pointer group-hover:scale-110 transition-transform duration-500"
                                    @click="openLightbox('https://placehold.co/300x200')">
                            </div>
                            <div class="flex flex-col flex-grow p-2">
                                <h3 class="text-2xl font-bold text-slate-800 mb-3 leading-tight">SOP Pengujian
                                    Laboratorium
                                </h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Prosedur standar operasional untuk pengujian
                                    mutu
                                    komoditi unggulan daerah di laboratorium kami yang terakreditasi.</p>
                                <a href="#"
                                    class="mt-auto inline-flex items-center justify-between w-fit px-6 py-2.5 bg-white border border-black/35 rounded-full text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors gap-2">
                                    Selengkapnya
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- SOP Card 2 -->
                        <div class="flex flex-col group h-full">
                            <div
                                class="aspect-[16/10] bg-slate-200 rounded-2xl overflow-hidden mb-6 border border-black/10">
                                <img src="https://placehold.co/300x200" alt="SOP Kalibrasi"
                                    class="w-full h-full object-cover cursor-pointer group-hover:scale-110 transition-transform duration-500"
                                    @click="openLightbox('https://placehold.co/300x200')">
                            </div>
                            <div class="flex flex-col flex-grow p-2">
                                <h3 class="text-2xl font-bold text-slate-800 mb-3 leading-tight">SOP Layanan Kalibrasi Alat
                                </h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Langkah-langkah teknis penjaminan
                                    ketelusuran
                                    alat ukur Anda melalui layanan kalibrasi profesional kami.</p>
                                <a href="#"
                                    class="mt-auto inline-flex items-center justify-between w-fit px-6 py-2.5 bg-white border border-black/35 rounded-full text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors gap-2">
                                    Selengkapnya
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- SOP Card 3 -->
                        <div class="flex flex-col group h-full">
                            <div
                                class="aspect-[16/10] bg-slate-200 rounded-2xl overflow-hidden mb-6 border border-black/10">
                                <img src="https://placehold.co/300x200" alt="SOP Sertifikasi"
                                    class="w-full h-full object-cover cursor-pointer group-hover:scale-110 transition-transform duration-500"
                                    @click="openLightbox('https://placehold.co/300x200')">
                            </div>
                            <div class="flex flex-col flex-grow p-2">
                                <h3 class="text-2xl font-bold text-slate-800 mb-3 leading-tight">SOP Sertifikasi Produk
                                    (SPPT
                                    SNI)</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Panduan lengkap pengurusan sertifikasi
                                    produk
                                    untuk meningkatkan daya saing industri Anda di pasar nasional.</p>
                                <a href="#"
                                    class="mt-auto inline-flex items-center justify-between w-fit px-6 py-2.5 bg-white border border-black/35 rounded-full text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors gap-2">
                                    Selengkapnya
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- SOP Card 4 -->
                        <div class="flex flex-col group h-full">
                            <div
                                class="aspect-[16/10] bg-slate-200 rounded-2xl overflow-hidden mb-6 border border-black/10">
                                <img src="https://placehold.co/300x200" alt="Formulir Permohonan"
                                    class="w-full h-full object-cover cursor-pointer group-hover:scale-110 transition-transform duration-500"
                                    @click="openLightbox('https://placehold.co/300x200')">
                            </div>
                            <div class="flex flex-col flex-grow p-2">
                                <h3 class="text-2xl font-bold text-slate-800 mb-3 leading-tight">Formulir Permohonan
                                    Layanan
                                </h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Unduh berbagai formulir permohonan layanan
                                    jasa
                                    industri mulai dari pengujian hingga konsultasi teknis.</p>
                                <a href="#"
                                    class="mt-auto inline-flex items-center justify-between w-fit px-6 py-2.5 bg-white border border-black/35 rounded-full text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors gap-2">
                                    Selengkapnya
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- SOP Card 5 -->
                        <div class="flex flex-col group h-full">
                            <div
                                class="aspect-[16/10] bg-slate-200 rounded-2xl overflow-hidden mb-6 border border-black/10">
                                <img src="https://placehold.co/300x200" alt="SOP Pengaduan"
                                    class="w-full h-full object-cover cursor-pointer group-hover:scale-110 transition-transform duration-500"
                                    @click="openLightbox('https://placehold.co/300x200')">
                            </div>
                            <div class="flex flex-col flex-grow p-2">
                                <h3 class="text-2xl font-bold text-slate-800 mb-3 leading-tight">SOP Penanganan Pengaduan
                                </h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Prosedur resmi untuk menyampaikan aspirasi
                                    atau
                                    keluhan pelanggan demi perbaikan kualitas layanan kami.</p>
                                <a href="#"
                                    class="mt-auto inline-flex items-center justify-between w-fit px-6 py-2.5 bg-white border border-black/35 rounded-full text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors gap-2">
                                    Selengkapnya
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- SOP Card 6 -->
                        <div class="flex flex-col group h-full">
                            <div
                                class="aspect-[16/10] bg-slate-200 rounded-2xl overflow-hidden mb-6 border border-black/10">
                                <img src="https://placehold.co/300x200" alt="Survey Kepuasan"
                                    class="w-full h-full object-cover cursor-pointer group-hover:scale-110 transition-transform duration-500"
                                    @click="openLightbox('https://placehold.co/300x200')">
                            </div>
                            <div class="flex flex-col flex-grow p-2">
                                <h3 class="text-2xl font-bold text-slate-800 mb-3 leading-tight">Survey Kepuasan Pelanggan
                                </h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Ikut serta dalam penilaian kinerja pelayanan
                                    kami
                                    melalui pengisian survey kepuasan pelanggan secara berkala.</p>
                                <a href="#"
                                    class="mt-auto inline-flex items-center justify-between w-fit px-6 py-2.5 bg-white border border-black/35 rounded-full text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors gap-2">
                                    Selengkapnya
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'layanan-E'" x-cloak
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0">
                    <h2 class="text-3xl font-bold mb-4">Pengaduan Masyarakat</h2>
                    <p class="text-slate-600">Sampaikan keluhan atau aspirasi Anda melalui sistem SP4N-LAPOR! Kami akan
                        merespon dalam waktu maksimal 2x24 jam.</p>
                </div>
                <div x-show="activeTab === 'layanan-F'" x-cloak
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0">
                    <h2 class="text-3xl font-bold mb-4">Informasi Publik</h2>
                    <p class="text-slate-600">Akses keterbukaan informasi mengenai anggaran daerah, regulasi terbaru, dan
                        laporan kinerja instansi.</p>
                </div>

            </div>
        </section>

        <!-- Lightbox Modal -->
        <div x-show="lightbox.open" 
             style="display: none;"
            class="fixed inset-0 z-[100] bg-black/95 flex items-center justify-center p-4 md:p-10 cursor-zoom-out"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click="closeLightbox()"
            @keydown.escape.window="closeLightbox()">
            
            <button @click.stop="closeLightbox()" class="absolute top-6 right-6 text-white/70 hover:text-white transition-colors z-[110]">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            
            <img :src="lightbox.src" alt="Enlarged Image"
                class="max-w-full max-h-full rounded-xl shadow-2xl transition-all duration-300 transform"
                x-show="lightbox.open"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="scale-95 opacity-0"
                x-transition:enter-end="scale-100 opacity-100"
                @click.stop>
        </div>
    </div>
</x-layout>
