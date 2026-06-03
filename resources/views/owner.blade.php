<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Owner Dashboard - Morning Bakery</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Outfit', 'sans-serif'] },
                    colors: {
                        cream: { light: '#FFFDF9', DEFAULT: '#FDF8F0', dark: '#F5EBE1' },
                        choco: { light: '#8B5E34', DEFAULT: '#5C3A21', dark: '#3A2415' }
                    }
                }
            }
        }
    </script>
    <style>body { font-family: 'Outfit', sans-serif; background-color: #FDF8F0; }</style>
</head>
<body class="text-choco-dark flex h-screen overflow-hidden bg-cream">

    <!-- Sidebar -->
    <aside class="w-64 bg-choco text-cream-light flex flex-col transition-all duration-300 relative z-20 shadow-xl hidden md:flex">
        <div class="p-6 flex items-center justify-center border-b border-choco-light/30">
            <svg class="w-8 h-8 mr-3 text-cream" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <h1 class="text-2xl font-bold tracking-wider">Morning<br/><span class="text-choco-light text-xl">Owner</span></h1>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
            <a href="#" class="flex items-center gap-3 px-4 py-3 bg-choco-light/20 text-cream rounded-xl transition-colors font-medium border border-choco-light/30">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                Statistik
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-cream-dark hover:bg-choco-light/10 hover:text-cream rounded-xl transition-colors font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                Data Pelanggan
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-cream-dark hover:bg-choco-light/10 hover:text-cream rounded-xl transition-colors font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"></path></svg>
                Data Pemesanan
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-cream-dark hover:bg-choco-light/10 hover:text-cream rounded-xl transition-colors font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                Riwayat Login
            </a>
        </nav>
        <div class="p-4 border-t border-choco-light/30">
            <div class="flex items-center gap-3 px-4 py-3 bg-choco-dark rounded-xl">
                <img src="https://ui-avatars.com/api/?name=Owner+Bakery&background=8B5E34&color=FFFDF9" alt="Owner" class="w-10 h-10 rounded-full border-2 border-choco-light">
                <div>
                    <p class="text-sm font-semibold text-cream">Owner</p>
                    <p class="text-xs text-cream-dark/70">owner@morning.com</p>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col h-screen overflow-hidden relative">
        
        <!-- Header -->
        <header class="h-20 bg-white/70 backdrop-blur-md border-b border-cream-dark flex items-center justify-between px-8 z-10">
            <div class="flex items-center gap-4">
                <button class="md:hidden text-choco hover:text-choco-light transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                <h2 class="text-2xl font-bold text-choco-dark hidden sm:block">Dashboard Pemilik</h2>
            </div>
            
            <div class="flex items-center gap-4">
                <button class="relative p-2 text-choco hover:bg-cream-dark rounded-full transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    <span class="absolute top-1 right-1 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-cream-light"></span>
                </button>
            </div>
        </header>

        <!-- Content Area -->
        <div class="flex-1 overflow-y-auto p-4 sm:p-8">
            
            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Stat: Pendapatan -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-cream-dark flex items-center justify-between transition-all hover:-translate-y-1 hover:shadow-md">
                    <div>
                        <p class="text-sm text-gray-500 font-medium mb-1">Total Pendapatan</p>
                        <h3 class="text-2xl font-bold text-choco">Rp 12.5M</h3>
                    </div>
                    <div class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                </div>
                <!-- Stat: Pemesanan -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-cream-dark flex items-center justify-between transition-all hover:-translate-y-1 hover:shadow-md">
                    <div>
                        <p class="text-sm text-gray-500 font-medium mb-1">Total Pemesanan</p>
                        <h3 class="text-2xl font-bold text-choco">845</h3>
                    </div>
                    <div class="w-12 h-12 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z"></path></svg>
                    </div>
                </div>
                <!-- Stat: Pelanggan -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-cream-dark flex items-center justify-between transition-all hover:-translate-y-1 hover:shadow-md">
                    <div>
                        <p class="text-sm text-gray-500 font-medium mb-1">Total Pelanggan</p>
                        <h3 class="text-2xl font-bold text-choco">324</h3>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 text-blue-500 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                </div>
                <!-- Stat: Login Hari Ini -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-cream-dark flex items-center justify-between transition-all hover:-translate-y-1 hover:shadow-md">
                    <div>
                        <p class="text-sm text-gray-500 font-medium mb-1">Login Hari Ini</p>
                        <h3 class="text-2xl font-bold text-choco">86</h3>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pb-10">
                <!-- Riwayat Pemesanan Terkini -->
                <div class="bg-white rounded-2xl shadow-sm border border-cream-dark overflow-hidden flex flex-col">
                    <div class="p-6 border-b border-cream-dark flex justify-between items-center">
                        <h3 class="text-xl font-bold text-choco-dark">Data Pemesanan Terkini</h3>
                        <a href="#" class="text-sm text-choco-light hover:text-choco font-medium">Lihat Semua</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-cream-light text-choco-light border-b border-cream-dark">
                                    <th class="p-4 text-sm font-semibold">ID Pesanan</th>
                                    <th class="p-4 text-sm font-semibold">Pelanggan</th>
                                    <th class="p-4 text-sm font-semibold">Total</th>
                                    <th class="p-4 text-sm font-semibold">Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                <tr class="border-b border-cream-dark/50 hover:bg-cream-light/50 transition-colors">
                                    <td class="p-4 font-medium text-choco">#ORD-092</td>
                                    <td class="p-4">Andi Setiawan</td>
                                    <td class="p-4 font-medium">Rp 85.000</td>
                                    <td class="p-4"><span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">Selesai</span></td>
                                </tr>
                                <tr class="border-b border-cream-dark/50 hover:bg-cream-light/50 transition-colors">
                                    <td class="p-4 font-medium text-choco">#ORD-093</td>
                                    <td class="p-4">Rina Yuliana</td>
                                    <td class="p-4 font-medium">Rp 120.000</td>
                                    <td class="p-4"><span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-bold">Diproses</span></td>
                                </tr>
                                <tr class="border-b border-cream-dark/50 hover:bg-cream-light/50 transition-colors">
                                    <td class="p-4 font-medium text-choco">#ORD-094</td>
                                    <td class="p-4">Budi Santoso</td>
                                    <td class="p-4 font-medium">Rp 45.000</td>
                                    <td class="p-4"><span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-bold">Diproses</span></td>
                                </tr>
                                <tr class="hover:bg-cream-light/50 transition-colors">
                                    <td class="p-4 font-medium text-choco">#ORD-095</td>
                                    <td class="p-4">Dewi Lestari</td>
                                    <td class="p-4 font-medium">Rp 250.000</td>
                                    <td class="p-4"><span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-bold">Menunggu</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Riwayat Data Login -->
                <div class="bg-white rounded-2xl shadow-sm border border-cream-dark overflow-hidden flex flex-col">
                    <div class="p-6 border-b border-cream-dark flex justify-between items-center">
                        <h3 class="text-xl font-bold text-choco-dark">Riwayat Data Login</h3>
                        <a href="#" class="text-sm text-choco-light hover:text-choco font-medium">Lihat Semua</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-cream-light text-choco-light border-b border-cream-dark">
                                    <th class="p-4 text-sm font-semibold">Nama / Akun</th>
                                    <th class="p-4 text-sm font-semibold">Peran</th>
                                    <th class="p-4 text-sm font-semibold">Waktu Login</th>
                                    <th class="p-4 text-sm font-semibold">Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                <tr class="border-b border-cream-dark/50 hover:bg-cream-light/50 transition-colors">
                                    <td class="p-4 font-medium">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-choco flex items-center justify-center text-cream font-bold text-xs">A</div>
                                            <span>Admin Bakery</span>
                                        </div>
                                    </td>
                                    <td class="p-4"><span class="px-2 py-1 bg-choco-light/20 text-choco rounded text-xs font-semibold">Admin</span></td>
                                    <td class="p-4 text-gray-500">Baru saja</td>
                                    <td class="p-4 text-green-600 font-medium">Berhasil</td>
                                </tr>
                                <tr class="border-b border-cream-dark/50 hover:bg-cream-light/50 transition-colors">
                                    <td class="p-4 font-medium">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs">R</div>
                                            <span>Rina Yuliana</span>
                                        </div>
                                    </td>
                                    <td class="p-4"><span class="px-2 py-1 bg-gray-100 text-gray-600 rounded text-xs font-semibold">Customer</span></td>
                                    <td class="p-4 text-gray-500">10 menit lalu</td>
                                    <td class="p-4 text-green-600 font-medium">Berhasil</td>
                                </tr>
                                <tr class="border-b border-cream-dark/50 hover:bg-cream-light/50 transition-colors">
                                    <td class="p-4 font-medium">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold text-xs">?</div>
                                            <span>Tidak dikenal</span>
                                        </div>
                                    </td>
                                    <td class="p-4">-</td>
                                    <td class="p-4 text-gray-500">1 jam lalu</td>
                                    <td class="p-4 text-red-500 font-medium">Gagal</td>
                                </tr>
                                <tr class="hover:bg-cream-light/50 transition-colors">
                                    <td class="p-4 font-medium">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center font-bold text-xs">A</div>
                                            <span>Andi Setiawan</span>
                                        </div>
                                    </td>
                                    <td class="p-4"><span class="px-2 py-1 bg-gray-100 text-gray-600 rounded text-xs font-semibold">Customer</span></td>
                                    <td class="p-4 text-gray-500">2 jam lalu</td>
                                    <td class="p-4 text-green-600 font-medium">Berhasil</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>
</html>
