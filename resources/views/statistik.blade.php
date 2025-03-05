<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Alumni</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-blue-500 to-blue-300 min-h-screen flex flex-col items-center py-10">

    <h2 class="text-white text-3xl font-bold mb-6">Statistik Data Bursa Kerjo Kito</h2>

    <div class="bg-white p-4 rounded-lg shadow-lg mb-6">
        <p class="text-gray-700">Total Seluruh Data Alumni</p>
        <div class="text-center text-lg font-bold bg-green-600 text-white rounded-md px-4 py-2">
            {{ \App\Models\Alumni::count() }}
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-6xl">
        <!-- Alumni Jurusan -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-bold mb-2">Alumni Jurusan</h3>
            <canvas id="chartJurusan"></canvas>
        </div>

        <!-- Alumni per Tahun -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-bold mb-2">Alumni per Tahun</h3>
            <canvas id="chartTahun"></canvas>
        </div>

        <!-- Rentang Gaji -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-bold mb-2">Rentang Gaji</h3>
            <canvas id="chartGaji"></canvas>
        </div>

        <!-- Rasio Profesi Alumni -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-bold mb-2">Rasio Profesi Alumni</h3>
            <canvas id="chartProfesi"></canvas>
        </div>
    </div>

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
    
  </footer>

    <script>
        // Chart Jurusan
        var ctxJurusan = document.getElementById('chartJurusan').getContext('2d');
        new Chart(ctxJurusan, {
            type: 'bar',
            data: {
                labels: @json($jurusanData->pluck('jurusan')),
                datasets: [{
                    label: 'Jumlah Data Lulusan',
                    data: @json($jurusanData->pluck('total')),
                    backgroundColor: 'rgba(255, 99, 132, 0.5)'
                }]
            }
        });

        // Chart Tahun Lulus
        var ctxTahun = document.getElementById('chartTahun').getContext('2d');
        new Chart(ctxTahun, {
            type: 'line',
            data: {
                labels: @json($tahunData->pluck('tahun_lulus')),
                datasets: [{
                    label: 'Lulusan per Tahun',
                    data: @json($tahunData->pluck('total')),
                    borderColor: 'blue',
                    fill: false
                }]
            }
        });

        // Chart Rentang Gaji
        var ctxGaji = document.getElementById('chartGaji').getContext('2d');
        new Chart(ctxGaji, {
            type: 'pie',
            data: {
                labels: @json(array_keys($gajiData)),
                datasets: [{
                    data: @json(array_values($gajiData)),
                    backgroundColor: ['red', 'blue', 'purple', 'green']
                }]
            }
        });

        // Chart Rasio Profesi
        var ctxProfesi = document.getElementById('chartProfesi').getContext('2d');
        new Chart(ctxProfesi, {
            type: 'doughnut',
            data: {
                labels: @json(array_keys($profesiData)),
                datasets: [{
                    data: @json(array_values($profesiData)),
                    backgroundColor: ['red', 'green', 'blue', 'gray']
                }]
            }
        });
    </script>



</body>
</html>    