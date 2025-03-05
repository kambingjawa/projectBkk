<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $lowongan->judul }} - Detail Lowongan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gradient-to-b from-blue-500 to-white min-h-screen flex items-center justify-center p-4">

  <div class="bg-white w-full max-w-2xl p-8 rounded-xl shadow-lg relative pb-20">
    
    <!-- Judul -->
    <h2 class="text-center text-3xl font-bold">{{ $lowongan->judul }}</h2>

    <!-- Gambar -->
    <div class="w-full h-60 bg-gray-200 flex items-center justify-center rounded-md overflow-hidden mt-4">
      @if($lowongan->gambar)
        <img src="{{ asset('storage/' . $lowongan->gambar) }}" alt="{{ $lowongan->judul }}" class="w-full h-full object-contain rounded-md">
      @else
        <span class="text-gray-400">Gambar Tidak Tersedia</span>
      @endif
    </div>

    <!-- Deskripsi -->
    <p class="mt-6 text-gray-700 text-justify leading-relaxed">{{ $lowongan->deskripsi }}</p>

    <!-- Tanggal -->
    <div class="mt-8 text-sm text-gray-500">
      <p><strong>Diposting:</strong> {{ \Carbon\Carbon::parse($lowongan->tanggal_diposting)->format('d M Y') }}</p>
      <p><strong>Batas Waktu:</strong> {{ \Carbon\Carbon::parse($lowongan->tanggal_berakhir)->format('d M Y') }}</p>
    </div>

    <!-- Tombol Exit di Kiri Bawah -->
    <div class="absolute bottom-8 left-8">
      <a href="{{ route('infolowongan') }}" class="bg-red-500 text-white px-6 py-2 rounded-md hover:bg-red-600 transition">
        Exit
      </a>
    </div>

    <!-- Tags di Kanan Bawah -->
    @if($lowongan->tags)
      <div class="absolute bottom-8 right-8 bg-blue-100 text-blue-700 text-sm font-semibold px-4 py-1 rounded-md">
        #{{ $lowongan->tags }}
      </div>
    @endif

  </div>

</body>
</html>
