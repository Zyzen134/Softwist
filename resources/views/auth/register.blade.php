<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar - Morning Bakery</title>
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
    <div class="flex-1 flex flex-col justify-center items-center p-6 w-full max-w-md mx-auto">
        <div class="mb-6 text-center">
            <svg class="w-10 h-10 text-choco mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <h1 class="text-2xl font-bold text-choco-dark tracking-wider">Bergabung dengan Kami</h1>
            <p class="text-choco-light mt-1 text-sm">Buat akun untuk memesan roti favoritmu</p>
        </div>

        <div class="w-full bg-white p-8 rounded-3xl shadow-xl border border-cream-dark">
            <form action="{{ route('register') ?? '/register' }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-choco-dark mb-1">Email (Gmail)</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2.5 bg-cream rounded-xl border border-cream-dark focus:outline-none focus:border-choco-light focus:ring-1 focus:ring-choco-light transition-colors" placeholder="contoh@gmail.com">
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-choco-dark mb-1">Nama</label>
                    <input type="text" id="name" name="name" required class="w-full px-4 py-2.5 bg-cream rounded-xl border border-cream-dark focus:outline-none focus:border-choco-light focus:ring-1 focus:ring-choco-light transition-colors" placeholder="Masukkan nama Anda">
                </div>
                
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-choco-dark mb-1">Password</label>
                    <input type="password" id="password" name="password" required class="w-full px-4 py-2.5 bg-cream rounded-xl border border-cream-dark focus:outline-none focus:border-choco-light focus:ring-1 focus:ring-choco-light transition-colors" placeholder="Buat password">
                </div>

                <button type="submit" class="w-full py-3 bg-choco text-cream rounded-xl font-medium hover:bg-choco-dark transition-colors shadow-md">
                    Daftar Sekarang
                </button>
            </form>
            
            <p class="mt-5 text-center text-sm text-gray-500">
                Sudah punya akun? 
                <a href="{{ route('login') ?? '/login' }}" class="text-choco-light font-bold hover:text-choco transition-colors">Masuk di sini</a>
            </p>
        </div>
        
        <a href="{{ url('/') }}" class="mt-6 text-sm flex items-center text-choco hover:text-choco-light transition-colors">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Beranda
        </a>
    </div>
</body>
</html>
