<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - BKK SMKN 1 Bengkulu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        h1 {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-b from-blue-600 to-blue-300">
    <header class="flex justify-between items-center p-6 flex-wrap">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/bkk.svg') }}" alt="BKK SMKN 1 Bengkulu" class="h-12">
            <span class="text-white font-bold text-lg">BKK SMKN 1 KOTA BENGKULU</span>
        </div>
        <nav class="space-x-6 text-white">
            <a href="{{route('home')}}" class="hover:underline">HOME</a>
            <a href="{{route('menu')}}" class="hover:underline">DASHBOARD</a>
            <a href="{{ route('profilebkk') }}" class="hover:underline">PROFIL</a>
        </nav>
    </header>
    <div class="flex flex-col md:flex-row items-center justify-center min-h-screen px-6">
        <div class="md:w-1/2 text-left md:text-left">
            <h1 class="text-white font-bold text-4xl md:text-5xl">SELAMAT DATANG</h1>
            <p class="text-white mt-2 text-lg">Dihalaman Web</p>
            <p class="text-white mt-2 text-lg">Bursa Kerja Khusus</p>
            <p class="text-white mt-2 text-lg">SMKN 1 Bengkulu</p>
            <a href="{{route ('menu')}}" class="mt-6 inline-block bg-green-600 text-white py-2 px-4 rounded-full shadow-md hover:bg-green-700">GET START</a>
        </div>
        <div class="md:w-1/2 flex justify-center mt-8 md:mt-0">
            <img src="{{ asset('images/logo1.png') }}" alt="Illustrasi" class="w-2/3 md:w-full">
        </div>
    </div>
</body>
</html>
