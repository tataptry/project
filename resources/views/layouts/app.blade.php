<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Produk')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold text-red-600">RedConnect</a>
            <div class="space-x-4">
                <a href="{{ route('product.index') }}" class="text-gray-700 hover:text-red-600">Produk</a>
                {{-- Tambahkan menu lain jika perlu --}}
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <main class="py-6">
        <div class="max-w-7xl mx-auto px-4">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-10 py-4 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} Product. Semua hak dilindungi.
    </footer>

</body>
</html>
