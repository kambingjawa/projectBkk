<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Info Alumni') }}
        </h2>
    </x-slot>

    <div class="flex min-h-screen bg-gray-200">
        <!-- Sidebar -->
        <div class="w-1/4 bg-gray-300 p-6">
            <h2 class="font-bold text-lg">Info Alumni</h2>
            <ul class="mt-4">
                <li class="mb-2"><a href="#" class="text-black font-semibold">Tambah Lowongan</a></li>
                <li><a href="#" class="text-black font-semibold">Tambah Informasi</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="w-3/4 p-6">
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
</x-app-layout>
