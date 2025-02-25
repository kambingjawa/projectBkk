<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Info Alumni - BKK SMKN 1 Bengkulu</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <style>
    body {
      font-family: Helvetica, Arial, sans-serif;
    }
  </style>
</head>
<body class="bg-gradient-to-b from-blue-500 to-white min-h-screen">
  <!-- Header -->
  <header class="flex justify-between items-center p-5">
    <div class="flex items-center space-x-4">
      <img src="{{ asset('images/bkk.svg') }}" alt="Logo BKK" class="w-16 h-16">
      <h1 class="text-white font-bold text-xl">BKK SMKN 1 BENGKULU</h1>
    </div>
    <nav class="space-x-6">
      <a href="{{ route('home') }}" class="text-white hover:underline">HOME</a>
      <a href="{{ route('menu') }}" class="text-white hover:underline">MENU</a>
      <a href="{{ route('profilebkk') }}" class="text-white hover:underline">PROFIL</a>
    </nav>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto px-5 py-8">
    <!-- Baris dengan search di kiri dan judul di kanan -->
    <div class="flex justify-between items-center mb-8">
      <!-- Input Pencarian di kiri -->
      <div class="flex-shrink-0">
        <input type="text" placeholder="Cari alumni..." class="p-3 rounded-md w-80 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>
      <!-- Judul Info Alumni di kanan -->
      <div class="flex-grow text-right">
        <h2 class="text-4xl font-bold text-white">INFO ALUMNI</h2>
      </div>
    </div>

    <!-- Grid Card Alumni -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10 max-w-5xl mx-auto">
      <!-- Card Alumni 1 -->
      <div class="bg-white p-5 rounded-xl shadow-lg">
        <div class="w-full h-40 bg-gray-200 flex items-center justify-center rounded-md">
          <span class="text-gray-400">Gambar Alumni</span>
        </div>
        <p class="mt-3">Deskripsi singkat alumni</p>
        <button class="mt-3 bg-teal-700 text-white px-4 py-2 rounded-md hover:bg-teal-800 transition">Baca Selengkapnya</button>
      </div>
      <!-- Card Alumni 2 -->
      <div class="bg-white p-5 rounded-xl shadow-lg">
        <div class="w-full h-40 bg-gray-200 flex items-center justify-center rounded-md">
          <span class="text-gray-400">Gambar Alumni</span>
        </div>
        <p class="mt-3">Deskripsi singkat alumni</p>
        <button class="mt-3 bg-teal-700 text-white px-4 py-2 rounded-md hover:bg-teal-800 transition">Baca Selengkapnya</button>
      </div>
      <!-- Card Alumni 3 -->
      <div class="bg-white p-5 rounded-xl shadow-lg">
        <div class="w-full h-40 bg-gray-200 flex items-center justify-center rounded-md">
          <span class="text-gray-400">Gambar Alumni</span>
        </div>
        <p class="mt-3">Deskripsi singkat alumni</p>
        <button class="mt-3 bg-teal-700 text-white px-4 py-2 rounded-md hover:bg-teal-800 transition">Baca Selengkapnya</button>
      </div>
    </div>
  </main>
</body>
</html>
