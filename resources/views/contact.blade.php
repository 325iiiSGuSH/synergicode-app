<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Figtree', 'ui-sans-serif', 'system-ui'],
                        serif: ['ui-serif', 'Georgia'],
                        mono: ['ui-monospace', 'SFMono-Regular'],
                        display: ['Oswald'],
                        body: ['"Open Sans"'],
                    },
                    colors: {
                        cyan: {
                            100: '#e0f7fa',
                            200: '#b2ebf2',
                            300: '#80deea',
                            400: '#4dd0e1',
                            500: '#26c6da',
                            600: '#00acc1',
                            700: '#0097a7',
                            800: '#00838f',
                            900: '#006064',
                        },
                    },
                },
            }
        }
    </script>
</head>
<body class="font-sans antialiased bg-gray-100">

    <!-- Navigation Bar -->
    <nav class="bg-cyan-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white text-lg font-semibold">
                <div class="w-48 h-auto">
                    <img src="/img/logo.svg" alt="Logo" class="w-full h-full object-contain">
                </div>
            </div>
            <div class="hidden md:flex space-x-4">
                <a href="#" class="text-white hover:text-cyan-200 transition">Home</a>
                <a href="#" class="text-white hover:text-cyan-200 transition">About</a>
                <a href="#" class="text-white hover:text-cyan-200 transition">Contact</a>
            </div>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden">
            <a href="#" class="block text-white py-2 px-4 hover:bg-cyan-600">Home</a>
            <a href="#" class="block text-white py-2 px-4 hover:bg-cyan-600">About</a>
            <a href="#" class="block text-white py-2 px-4 hover:bg-cyan-600">Contact</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-10 p-4">
        <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-cyan-600 mb-4">Contact Us</h2>
            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="/contact">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-cyan-500 focus:border-cyan-500 transition duration-300" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-cyan-500 focus:border-cyan-500 transition duration-300" required>
                </div>
                <div class="mb-4">
                    <label for="comments" class="block text-gray-700">Comments</label>
                    <textarea id="comments" name="comments" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-cyan-500 focus:border-cyan-500 transition duration-300" required></textarea>
                </div>
                <button type="submit" class="w-full bg-cyan-500 text-white px-4 py-2 rounded-lg hover:bg-cyan-600 transition duration-300">Submit</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
