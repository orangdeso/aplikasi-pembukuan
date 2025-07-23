<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - Aplikasi Pembukuan</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-50 min-h-screen">
        <!-- Header -->
        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-6">
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold text-gray-900">Laravel</h1>
                        <span class="ml-2 text-sm text-gray-500">Aplikasi Pembukuan</span>
                    </div>
                    
                    @if (Route::has('login'))
                        <nav class="flex items-center space-x-4">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900 transition">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="text-center">
                <!-- Welcome Section -->
                <div class="mb-12">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">
                        Selamat Datang di Laravel
                    </h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                        Framework PHP yang elegan dan ekspresif untuk pengembangan web modern.
                        Mulai membangun aplikasi pembukuan Anda dengan mudah.
                    </p>
                </div>

                <!-- Features Grid -->
                <div class="grid md:grid-cols-3 gap-8 mb-12">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Dokumentasi</h3>
                        <p class="text-gray-600 mb-4">Pelajari Laravel dengan dokumentasi lengkap dan tutorial yang mudah diikuti.</p>
                        <a href="https://laravel.com/docs" target="_blank" class="text-red-600 hover:text-red-700 font-medium">
                            Baca Dokumentasi →
                        </a>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Laracasts</h3>
                        <p class="text-gray-600 mb-4">Video tutorial berkualitas tinggi untuk mempelajari Laravel dan ekosistemnya.</p>
                        <a href="https://laracasts.com" target="_blank" class="text-blue-600 hover:text-blue-700 font-medium">
                            Tonton Video →
                        </a>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Laravel News</h3>
                        <p class="text-gray-600 mb-4">Tetap update dengan berita terbaru, tips, dan trik dari komunitas Laravel.</p>
                        <a href="https://laravel-news.com" target="_blank" class="text-green-600 hover:text-green-700 font-medium">
                            Baca Berita →
                        </a>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        Siap Memulai Proyek Pembukuan?
                    </h3>
                    <p class="text-gray-600 mb-6">
                        Laravel menyediakan semua tools yang Anda butuhkan untuk membangun aplikasi web modern.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://laravel.com/docs/installation" target="_blank" class="bg-red-600 text-white px-6 py-3 rounded-md hover:bg-red-700 transition font-medium">
                            Mulai Instalasi
                        </a>
                        <a href="https://github.com/laravel/laravel" target="_blank" class="border border-gray-300 text-gray-700 px-6 py-3 rounded-md hover:bg-gray-50 transition font-medium">
                            Lihat di GitHub
                        </a>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-200 mt-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="text-center text-gray-500">
                    <p>&copy; {{ date('Y') }} Laravel. Framework untuk Aplikasi Pembukuan.</p>
                    <p class="mt-2">Dibuat dengan ❤️ menggunakan Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
                </div>
            </div>
        </footer>
    </body>
</html>
