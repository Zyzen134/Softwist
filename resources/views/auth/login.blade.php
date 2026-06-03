<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk - Morning Bakery</title>
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
        <div class="mb-8 text-center">
            <svg class="w-12 h-12 text-choco mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <h1 class="text-3xl font-bold text-choco-dark tracking-wider">Morning Bakery</h1>
            <p class="text-choco-light mt-2">Silakan masuk ke akun Anda</p>
        </div>

        <div class="w-full bg-white p-8 rounded-3xl shadow-xl border border-cream-dark">
            <form action="{{ route('login') ?? '/login' }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="block text-sm font-medium text-choco-dark mb-2">Nama</label>
                    <input type="text" id="name" name="name" required class="w-full px-4 py-3 bg-cream rounded-xl border border-cream-dark focus:outline-none focus:border-choco-light focus:ring-1 focus:ring-choco-light transition-colors" placeholder="Masukkan nama Anda">
                </div>
                
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-choco-dark mb-2">Password</label>
                    <input type="password" id="password" name="password" required class="w-full px-4 py-3 bg-cream rounded-xl border border-cream-dark focus:outline-none focus:border-choco-light focus:ring-1 focus:ring-choco-light transition-colors" placeholder="Masukkan password Anda">
                </div>

                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-choco bg-cream border-cream-dark rounded focus:ring-choco-light">
                        <label for="remember" class="ml-2 text-sm text-gray-500">Ingat Saya</label>
                    </div>
                </div>

                <button type="submit" class="w-full py-3 bg-choco text-cream rounded-xl font-medium hover:bg-choco-dark transition-colors shadow-md">
                    Masuk
                </button>
            </form>
            
            <p class="mt-6 text-center text-sm text-gray-500">
                Belum punya akun? 
                <a href="{{ route('register') ?? '/register' }}" class="text-choco-light font-bold hover:text-choco transition-colors">Daftar di sini</a>
            </p>
        </div>
        
        <a href="{{ url('/') }}" class="mt-8 text-sm flex items-center text-choco hover:text-choco-light transition-colors">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Beranda
        </a>
    </div>
</body>
</html>
