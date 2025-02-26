<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up - BKK SMKN 1 Bengkulu</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome (optional) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <style>
    body {
      font-family: Helvetica, Arial, sans-serif;
    }
  </style>
</head>
<body class="min-h-screen bg-gradient-to-r from-blue-500 to-blue-100 flex items-center justify-center relative">
  <!-- Tombol Back di pojok kiri atas, fixed dan berwarna merah -->
  <a href="{{ route('dashboard') }}" class="fixed top-4 left-4 bg-red-600 text-white px-3 py-2 rounded hover:bg-red-700 flex items-center space-x-1">
    <i class="fas fa-arrow-left"></i>
    <span>Back</span>
  </a>

  <!-- Container utama (lebih kecil) -->
  <div class="w-3/4 max-w-4xl bg-white/30 backdrop-blur-md p-4 md:p-6 rounded-lg shadow-lg flex flex-col md:flex-row items-center justify-center">
    
    <!-- Bagian kiri: ilustrasi buku -->
    <div class="md:w-1/2 flex justify-center mb-6 md:mb-0">
      <img src="{{ asset('images/signup.png') }}" alt="Ilustrasi Buku" class="w-3/4 h-auto md:w-2/3">
    </div>
    
    <!-- Bagian kanan: form sign up / sign in -->
    <div class="md:w-1/2 bg-white/80 rounded-lg shadow-lg p-4 md:p-6">
      <h2 class="text-xl font-bold mb-3 text-blue-600 text-center">Sign Up</h2>
      <form method="POST" action="{{ route('login') }}" class="mt-8">
        @csrf
        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="block text-gray-700 font-semibold mb-1">Email</label>
          <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan email Anda" required autofocus autocomplete="username" value="{{ old('email') }}">
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mb-3">
          <label for="password" class="block text-gray-700 font-semibold mb-1">Password</label>
          <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan password Anda" required autocomplete="current-password">
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <!-- Simpan sesi -->
        <div class="flex items-center mb-3">
          <input type="checkbox" id="remember_me" name="remember" class="mr-2">
          <label for="remember_me" class="text-gray-700">Simpan sesi</label>
        </div>
        <!-- Tombol Submit -->
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition w-full">
          Sign In
        </button>
      </form>
    </div>
  </div>
</body>
</html>
