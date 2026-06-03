<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Morning Bakery</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        cream: {
                            light: '#FFFDF9',
                            DEFAULT: '#FDF8F0',
                            dark: '#F5EBE1',
                        },
                        choco: {
                            light: '#8B5E34',
                            DEFAULT: '#5C3A21',
                            dark: '#3A2415',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Outfit', sans-serif; background-color: #FDF8F0; }
        .glass { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(10px); }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 25px -5px rgba(92, 58, 33, 0.15); }
        /* Hide scrollbar for category pills */
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="text-choco-dark flex flex-col min-h-screen">

    <!-- Top Navigation -->
    <nav class="bg-choco text-cream-light sticky top-0 z-50 shadow-xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3">
                    <svg class="w-8 h-8 text-cream" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h1 class="text-2xl font-bold tracking-wider leading-none">Morning<br/><span class="text-choco-light text-lg">Bakery</span></h1>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-6">
                        <a href="#" class="px-4 py-2 bg-choco-light/20 text-cream rounded-full transition-colors font-medium border border-choco-light/30">Beranda</a>
                        <a href="#" class="px-4 py-2 text-cream-dark hover:bg-choco-light/10 hover:text-cream rounded-full transition-colors font-medium">Menu</a>
                        <a href="#" class="px-4 py-2 text-cream-dark hover:bg-choco-light/10 hover:text-cream rounded-full transition-colors font-medium">Tentang Kami</a>
                        <a href="#" class="px-4 py-2 text-cream-dark hover:bg-choco-light/10 hover:text-cream rounded-full transition-colors font-medium">Kontak</a>
                    </div>
                </div>

                <!-- Right Side Actions -->
                <div class="flex items-center gap-4">
                    <div class="relative hidden sm:block">
                        <input type="text" placeholder="Cari menu..." class="pl-10 pr-4 py-2 bg-choco-dark/50 border border-choco-light/30 text-cream placeholder-cream-dark/50 rounded-full text-sm focus:outline-none focus:border-cream focus:ring-1 focus:ring-cream w-48 transition-all shadow-sm">
                        <svg class="w-4 h-4 absolute left-4 top-2.5 text-cream-dark/70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <a href="/login" class="hidden sm:inline-flex px-4 py-2 text-cream font-medium hover:text-cream-light transition-colors">Masuk</a>
                    <a href="/register" class="hidden sm:inline-flex px-4 py-2 bg-cream text-choco rounded-full font-medium hover:bg-white transition-colors shadow-md">Daftar</a>
                    
                    <button class="relative p-2 text-cream hover:bg-choco-light/20 rounded-full transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"></path></svg>
                        <span class="absolute top-1 right-1 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-choco"></span>
                    </button>
                    <button class="md:hidden p-2 text-cream hover:bg-choco-light/20 rounded-full transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Hero Banner -->
        <div class="relative bg-choco-dark rounded-3xl overflow-hidden mb-12 shadow-xl">
            <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Bakery Hero" class="w-full h-64 md:h-80 object-cover opacity-60">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
                <h2 class="text-3xl md:text-5xl font-bold text-cream mb-4 drop-shadow-md">Selamat Pagi, Pecinta Roti!</h2>
                <p class="text-cream-light text-lg md:text-xl max-w-2xl drop-shadow-md">Awali harimu dengan senyuman dan roti hangat yang baru dipanggang dari oven kami.</p>
            </div>
        </div>

        <!-- Menu Section -->
        <div class="flex items-center justify-between mb-8">
            <h3 class="text-3xl font-bold text-choco-dark border-l-4 border-choco-light pl-4">Pilihan Menu Favorit</h3>
            <button class="text-choco-light hover:text-choco font-medium flex items-center gap-1 transition-colors px-4 py-2 bg-white rounded-full shadow-sm border border-cream-dark hidden sm:flex">
                Lihat Semua Menu <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>

        <!-- Category Pills -->
        <div class="flex gap-4 mb-8 overflow-x-auto pb-2 scrollbar-hide">
            <button class="px-6 py-2 bg-choco text-cream rounded-full font-medium whitespace-nowrap shadow-md">Semua Menu</button>
            <button class="px-6 py-2 bg-white text-choco border border-cream-dark hover:border-choco-light hover:bg-cream rounded-full font-medium whitespace-nowrap transition-all shadow-sm">Roti Kering</button>
            <button class="px-6 py-2 bg-white text-choco border border-cream-dark hover:border-choco-light hover:bg-cream rounded-full font-medium whitespace-nowrap transition-all shadow-sm">Pastry</button>
            <button class="px-6 py-2 bg-white text-choco border border-cream-dark hover:border-choco-light hover:bg-cream rounded-full font-medium whitespace-nowrap transition-all shadow-sm">Kue Manis</button>
            <button class="px-6 py-2 bg-white text-choco border border-cream-dark hover:border-choco-light hover:bg-cream rounded-full font-medium whitespace-nowrap transition-all shadow-sm">Minuman Hangat</button>
        </div>

        <!-- Menu Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 pb-12">
            
            <!-- Menu Item 1 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-cream-dark card-hover group flex flex-col relative">
                <div class="h-56 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1549903072-7e6e0bedb7fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Croissant" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-choco-dark shadow-md">Terlaris</div>
                </div>
                <div class="p-6 flex-1 flex flex-col relative bg-white">
                    <button class="absolute -top-6 right-6 w-12 h-12 bg-choco text-cream rounded-full flex items-center justify-center shadow-lg hover:bg-choco-light hover:scale-110 transition-all z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    </button>
                    <div class="mb-2 pr-12">
                        <h4 class="text-xl font-bold text-choco-dark mb-1">Butter Croissant</h4>
                        <span class="text-choco-light font-bold text-lg">Rp 25.000</span>
                    </div>
                    <p class="text-sm text-gray-500 mb-2 flex-1">Renyah di luar, lembut dan kaya akan mentega premium di dalam.</p>
                </div>
            </div>

            <!-- Menu Item 2 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-cream-dark card-hover group flex flex-col relative">
                <div class="h-56 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1586444248902-2f64eddc13df?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Cupcake" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6 flex-1 flex flex-col relative bg-white">
                    <button class="absolute -top-6 right-6 w-12 h-12 bg-cream text-choco-dark border border-cream-dark rounded-full flex items-center justify-center shadow-lg hover:bg-choco hover:text-cream hover:scale-110 transition-all z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    </button>
                    <div class="mb-2 pr-12">
                        <h4 class="text-xl font-bold text-choco-dark mb-1">Choco Cupcake</h4>
                        <span class="text-choco-light font-bold text-lg">Rp 20.000</span>
                    </div>
                    <p class="text-sm text-gray-500 mb-2 flex-1">Kue bolu cokelat lembut dengan frosting cokelat Belgia manis.</p>
                </div>
            </div>

            <!-- Menu Item 3 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-cream-dark card-hover group flex flex-col relative">
                <div class="h-56 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1605807646983-377bc5a76493?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Cinnamon Roll" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-red-500/90 text-white backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold shadow-md">Baru</div>
                </div>
                <div class="p-6 flex-1 flex flex-col relative bg-white">
                    <button class="absolute -top-6 right-6 w-12 h-12 bg-cream text-choco-dark border border-cream-dark rounded-full flex items-center justify-center shadow-lg hover:bg-choco hover:text-cream hover:scale-110 transition-all z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    </button>
                    <div class="mb-2 pr-12">
                        <h4 class="text-xl font-bold text-choco-dark mb-1">Cinnamon Roll</h4>
                        <span class="text-choco-light font-bold text-lg">Rp 30.000</span>
                    </div>
                    <p class="text-sm text-gray-500 mb-2 flex-1">Gulungan kayu manis hangat dengan lapisan cream cheese glaze lumer.</p>
                </div>
            </div>

            <!-- Menu Item 4 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-cream-dark card-hover group flex flex-col relative">
                <div class="h-56 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1558961363-a0c6e1894d03?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Choco Cookie" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6 flex-1 flex flex-col relative bg-white">
                    <button class="absolute -top-6 right-6 w-12 h-12 bg-cream text-choco-dark border border-cream-dark rounded-full flex items-center justify-center shadow-lg hover:bg-choco hover:text-cream hover:scale-110 transition-all z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    </button>
                    <div class="mb-2 pr-12">
                        <h4 class="text-xl font-bold text-choco-dark mb-1">Classic Cookie</h4>
                        <span class="text-choco-light font-bold text-lg">Rp 18.000</span>
                    </div>
                    <p class="text-sm text-gray-500 mb-2 flex-1">Kue kering renyah dengan lelehan cokelat di setiap gigitannya.</p>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-choco-dark text-cream py-8 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-2">
                <svg class="w-6 h-6 text-choco-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span class="font-bold tracking-wider">Morning Bakery</span>
            </div>
            <p class="text-sm text-cream-dark/70">&copy; 2026 Morning Bakery. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
