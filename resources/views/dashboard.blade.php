<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Info Alumni') }}
        </h2>
    </x-slot>

    <div class="flex min-h-screen bg-gray-200">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white p-6">
            <!-- Tombol Hamburger -->
            <button id="hamburgerButton" class="lg:hidden p-2 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <h2 class="font-bold text-lg mb-6">Info Alumni</h2>
            <!-- Menu yang bisa ditutup/dibuka -->
            <div id="menuContainer">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-300 hover:bg-gray-700 rounded transition duration-200">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <span>Tambah Lowongan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-300 hover:bg-gray-700 rounded transition duration-200">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <span>Tambah Informasi</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <!-- Search Bar -->
            <div class="mb-4 flex">
                <input type="text" placeholder="Search" class="p-2 border rounded w-1/3">
                <button class="p-2 bg-white border rounded ml-2">🔍</button>
            </div>

            <!-- Table -->
            <div class="bg-white p-4 rounded shadow">
                <table class="w-full border-collapse border border-gray-400 text-xs">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-2 border">NISN</th>
                            <th class="p-2 border">Nama</th>
                            <th class="p-2 border">Alamat</th>
                            <th class="p-2 border">Email</th>
                            <th class="p-2 border">No HP</th>
                            <th class="p-2 border">Jurusan</th>
                            <th class="p-2 border">Tahun Lulus</th>
                            <th class="p-2 border">Status</th>
                            <th class="p-2 border">Detail</th>
                            <th class="p-2 border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumnis as $alumni)
                        <tr>
                            <td class="p-2 border">{{ $alumni->nisn }}</td>
                            <td class="p-2 border">{{ $alumni->nama }}</td>
                            <td class="p-2 border">{{ $alumni->alamat }}</td>
                            <td class="p-2 border">{{ $alumni->email }}</td>
                            <td class="p-2 border">{{ $alumni->no_hp }}</td>
                            <td class="p-2 border">{{ $alumni->jurusan }}</td>
                            <td class="p-2 border">{{ $alumni->tahun_lulus }}</td>
                            <td class="p-2 border">{{ $alumni->status }}</td>
                            
                            <!-- Kondisi berdasarkan status -->
                            <td class="p-2 border">
                                @if($alumni->status == 'Bekerja')
                                    <strong>Profesi:</strong> {{ $alumni->profesi }} <br>
                                    <strong>Jabatan:</strong> {{ $alumni->jabatan }} <br>
                                    <strong>Lokasi Kerja:</strong> {{ $alumni->lokasi_kerja }} <br>
                                    <strong>Gaji:</strong> {{ $alumni->gaji_kerja }} <br>
                                    <strong>Alasan Kerja:</strong> {{ $alumni->alasan_kerja }}
                                @elseif($alumni->status == 'Kuliah')
                                    <strong>Kampus:</strong> {{ $alumni->kampus }} <br>
                                    <strong>Jurusan:</strong> {{ $alumni->jurusan_kuliah }} <br>
                                    <strong>Lokasi:</strong> {{ $alumni->lokasi_kuliah }} <br>
                                    <strong>Alasan Kuliah:</strong> {{ $alumni->alasan_kuliah }}
                                @elseif($alumni->status == 'Wirausaha')
                                    <strong>Bidang Usaha:</strong> {{ $alumni->bidang_usaha }} <br>
                                    <strong>Lokasi:</strong> {{ $alumni->lokasi_wirausaha }} <br>
                                    <strong>Gaji:</strong> {{ $alumni->gaji_wirausaha }} <br>
                                    <strong>Alasan:</strong> {{ $alumni->alasan_wirausaha }}
                                @else
                                    <span class="text-gray-500">Tidak ada data</span>
                                @endif
                            </td>

                            <!-- Tombol Aksi -->
                            <td class="p-2 border text-center">
                                <a href="#" class="text-blue-500">✏️</a>
                                <a href="#" class="text-red-500 ml-2">🗑️</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- JavaScript untuk Toggle Menu -->
    <script>
        const hamburgerButton = document.getElementById('hamburgerButton');
        const menuContainer = document.getElementById('menuContainer');

        hamburgerButton.addEventListener('click', () => {
            menuContainer.classList.toggle('hidden');
        });
    </script>
</x-app-layout>