<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profil - BKK SMKN 1 Bengkulu</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
  </style>
</head>
<body class="min-h-screen bg-gradient-to-b from-blue-600 to-blue-300 flex flex-col justify-between">

  <!-- Header -->
  <header class="flex justify-between items-center p-6">
    <div class="flex items-center space-x-4">
      <!-- Logo BKK -->
      <img src="{{ asset('images/bkk.svg') }}" alt="BKK SMKN 1 Bengkulu" class="h-12" />
      <span class="text-white font-bold text-lg">BKK SMKN 1 KOTA BENGKULU</span>
    </div>
    <nav class="space-x-6 text-white text-lg">
      <a href="{{ route('home') }}" class="hover:underline">HOME</a>
      <a href="{{ route('menu') }}" class="hover:underline">DASHBOARD</a>
      <a href="{{ route('profilebkk') }}" class="hover:underline">PROFIL</a>
    </nav>
  </header>

  <!-- Main Content -->
  <main class="p-6 flex-grow container mx-auto">
    <!-- Paragraf Profil -->
    <div class="bg-white rounded-lg p-6 shadow-md mb-6">
      <h1 class="text-3xl font-bold text-center mb-4">Profil Bursa Kerja Khusus SMKN 1 Bengkulu</h1>
      <p class="text-gray-700 mb-4">
        Bursa Kerja Khusus merupakan unit kerja yang bertujuan untuk memasarkan lulusan SMK khususnya SMKN 1 Kota Bengkulu. Didirikan pada 10 Agustus 2016, BKK memiliki status kelembagaan dan departemen dibawah naungan Dinas Tenaga Kerja Pemuda dan Olahraga Kota Bengkulu. Badan hukum BKK didasari oleh Surat Keputusan Direktur Jenderal Pembinaan Pelatihan dan Penempatan Tenaga Kerja, Nomor: KEP/DPPTK/IX/2008 tanggal 22 September 2008, serta Surat Persetujuan Ijin Operasional Dinas Tenaga Kerja Pemuda dan Olahraga Kota Bengkulu, Nomor: 560/987/DTKPDR/2016.
      </p>
      <p class="text-gray-700 mb-4">
        Visi:
      </p>
      <p class="text-gray-700 mb-4">
        Terwujudnya organisasi BKK yang dapat memasarkan 75% tamatan SMK dalam pelayanan di bidang ketenagakerjaan.
      </p>
      <p class="text-gray-700 mb-4">
        Misi :
      </p>
      <p class="text-gray-700">
        <li>Mendorong perluasan kesempatan kerja dan penempatan kerja bagi tamatan SMKN 1 Kota Bengkulu.</li>
        <li>Memfasilitasi pemenuhan kebutuhan tenaga kerja terampil dan kompeten bagi industri.</li>
        <li>Meningkatkan pelayanan kepada peserta didik maupun tamatan SMK Negeri 1 Bengkulu di bidang ketenagakerjaan.</li>
        <li>Mengembangkan sistem informasi ketenagakerjaan melalui pemanfaatan teknologi informasi.</li>        
      </p>

      <p class="text-gray-700 mb-4">
        Tujuan :
      </p>
      <p class="text-gray-700">
        <li>Mempertemukan tamatan SMK dengan IDUKA.</li>
        <li>Meningkatkan wawasan peluang kerja terhadap tamatan SMK.</li>
        <li>Mengurangi pengangguran.</li>
        <li>Terjadinya proses recruitment calon tenaga kerja dari tamatan SMK.</li>     
        <li>Terserapnya tamatan SMK ke dunia kerja.</li>   
      </p>
    </div>

    <!-- Konten Foto/Poster Kegiatan -->
    <img src="{{ asset('images/structure.png') }}" alt="Foto Kegiatan BKK" class="object-cover w-1/2 h-auto rounded-lg mx-auto mb-6">

    <!-- Kegiatan BKK -->
    <div id="videos" class="w-full bg-white rounded-lg p-6 mb-6 shadow-md">
      <h2 class="text-2xl font-bold text-center mb-4">Kegiatan Bursa Kerja Khusus SMKN 1 Bengkulu</h2>
      <div class="overflow-hidden rounded-lg">
        <iframe class="w-full h-80" src="https://www.youtube.com/embed/videoseries?controls=0&amp;list=PLnNvegSvisBdIOwiWTjRR6EjXuOLJeU7U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </main>

 
  <footer class="bg-blue-800 text-white p-6 mt-8">
    <!-- Grid dengan dua kolom: Logo & Informasi (kiri) & Ikon Sosial Media (kanan) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-center md:text-left">
      <!-- Kolom Logo & Informasi -->
      <div class="flex items-center">
        <img src="{{ asset('images/logo smk1.png') }}" alt="Logo SMKN 1 Bengkulu" class="h-24" />
        <div class="ml-4 text-left">
          <p>SMK Negeri 1 Bengkulu</p>
          <p>Jalan Jati No 41, 
            <p>Kelurahan Padang Jati,</p> 
            <p>Kecamatan Ratu Samban, 
            <p>Kota Bengkulu</p>
          <p>38222</p>
        </div>
      </div>
      <!-- Kolom Ikon Sosial Media, diletakkan di kanan -->
      <div class="flex justify-end pr-8">
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-8">
          <div class="col-span-2 sm:col-span-1 grid place-items-center">
            <a href="https://www.youtube.com/channel/UCydN3u2tCciDrJKo06ug-oQ">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 sm:w-16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
                <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
              </svg>
            </a>
          </div>
          <div class="col-span-1 sm:col-span-1 grid place-items-center">
            <a href="https://twitter.com/smkn1kotabkl">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 sm:w-16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
              </svg>
            </a>
          </div>
          <div class="col-span-1 sm:col-span-1 grid place-items-center">
            <a href="https://web.facebook.com/Smkn1KotaBengkulu/">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 sm:w-16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
              </svg>
            </a>
          </div>
          <div class="col-span-2 sm:col-span-1 grid place-items-center">
            <a href="https://instagram.com/bkk_smkn1bengkulu">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 sm:w-16" viewBox="0 0 32 32" fill="#fff">
                <g data-name="camera android app aplication phone">
                  <path d="M30.56 8.47a8 8 0 0 0-7-7 64.29 64.29 0 0 0-15.06 0 8 8 0 0 0-7 7 64.29 64.29 0 0 0 0 15.06 8 8 0 0 0 7 7 64.29 64.29 0 0 0 15.06 0 8 8 0 0 0 7-7 64.29 64.29 0 0 0 0-15.06zM8.7 3.42a63.65 63.65 0 0 1 14.6 0 6 6 0 0 1 5.28 5.28A63 63 0 0 1 29 15h-5a8 8 0 0 0-15.93 0H3a63 63 0 0 1 .39-6.3A6 6 0 0 1 8.7 3.42zM22 16a6 6 0 1 1-6-6 6 6 0 0 1 6 6zm1.3 12.58a63.65 63.65 0 0 1-14.6 0 6 6 0 0 1-5.28-5.28A63 63 0 0 1 3 17h5a8 8 0 0 0 15.86 0h5a63 63 0 0 1-.39 6.3 6 6 0 0 1-5.17 5.28z"/>
                  <path d="M16 12a4 4 0 1 0 4 4 4 4 0 0 0-4-4zm0 6a2 2 0 1 1 2-2 2 2 0 0 1-2 2z"/>
                  <circle cx="24" cy="8" r="1"/>
                </g>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Divider Line -->
    <div class="border-t border-white mt-6"></div>
    <!-- Bagian Hubungi Kami dan Kontak Tambahan -->
    <div class="mt-6">
      <p class="font-semibold tracking-wider text-sm text-center">Hubungi kami di:</p>
      <div class="w-1/2 grid grid-cols-2 mx-auto place-items-center">
        <a href="http://wa.me/6289628893111">
          <svg xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 512 512">
            <path fill="#dfe900" d="M255.995 73.82A182.18 182.18 0 1 0 438.185 256a182.183 182.183 0 0 0-182.19-182.18zm93.956 251.72c-7.823 12.093-14.617 24.635-47.285 25.382-33.399.035-67.931-27.624-93.085-55.213-25.111-24.433-48.35-55.986-48.314-86.572.747-32.678 13.298-39.48 25.383-47.285a12.372 12.372 0 0 1 12.384 2.232c5.757 5.001 31.007 30.26 31.007 30.26s8.974 7.49 2.778 15.778c-4.922 6.608-16.287 18.773-17.78 20.372l4.271 8.033c5.704 9.404 16.576 25.928 32.854 39.323 10.986 9.017 29.558 18.923 29.558 18.914 2.672-2.479 13.763-12.761 19.95-17.385 8.298-6.205 15.786 2.778 15.786 2.778s25.26 25.26 30.27 31.024a12.361 12.361 0 0 1 2.223 12.358z" data-name="Call"/>
          </svg>
          <span class="text-xs">Maya</span>
        </a>
        <a href="http://wa.me/6282261962048">
          <svg xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 512 512">
            <path fill="#dfe900" d="M255.995 73.82A182.18 182.18 0 1 0 438.185 256a182.183 182.183 0 0 0-182.19-182.18zm93.956 251.72c-7.823 12.093-14.617 24.635-47.285 25.382-33.399.035-67.931-27.624-93.085-55.213-25.111-24.433-48.35-55.986-48.314-86.572.747-32.678 13.298-39.48 25.383-47.285a12.372 12.372 0 0 1 12.384 2.232c5.757 5.001 31.007 30.26 31.007 30.26s8.974 7.49 2.778 15.778c-4.922 6.608-16.287 18.773-17.78 20.372l4.271 8.033c5.704 9.404 16.576 25.928 32.854 39.323 10.986 9.017 29.558 18.923 29.558 18.914 2.672-2.479 13.763-12.761 19.95-17.385 8.298-6.205 15.786 2.778 15.786 2.778s25.26 25.26 30.27 31.024a12.361 12.361 0 0 1 2.223 12.358z" data-name="Call"/>
          </svg>
          <span class="text-xs">Fachri</span>
        </a>
      </div>
    </div>
  </footer>
</body>
</html>
