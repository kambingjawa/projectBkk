<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Data Alumni') }}
        </h2>
    </x-slot>

    <div class="flex min-h-screen bg-gray-900 p-6">
        <div class="flex-1">
            <!-- Form Pencarian -->
            <form method="GET" action="{{ route('dashboard') }}" class="mb-4 flex">
                <input type="text" name="search" placeholder="Cari berdasarkan NISN atau Nama" 
                    class="p-2 border rounded w-1/3 text-black bg-white" value="{{ request('search') }}">
                <button type="submit" class="p-2 bg-gray-800 text-white border rounded ml-2">
                    <i class="fas fa-search"></i>
                </button>
            </form>

            <!-- Filter Status -->
            <div class="mb-4 space-x-2">
                <a href="{{ route('dashboard', ['status' => 'Kerja']) }}" 
                    class="p-2 bg-green-300 rounded text-white {{ request('status') == 'Kerja' ? 'font-bold' : '' }}">
                    Bekerja
                </a>
                <a href="{{ route('dashboard', ['status' => 'Wirausaha']) }}" 
                    class="p-2 bg-yellow-300 rounded text-white {{ request('status') == 'Wirausaha' ? 'font-bold' : '' }}">
                    Wirausaha
                </a>
                <a href="{{ route('dashboard', ['status' => 'Kuliah']) }}" 
                    class="p-2 bg-blue-300 rounded text-white {{ request('status') == 'Kuliah' ? 'font-bold' : '' }}">
                    Kuliah
                </a>
                <a href="{{ route('dashboard', ['status' => 'Tidak']) }}" 
                    class="p-2 bg-red-300 rounded text-white {{ request('status') == 'Menganggur' ? 'font-bold' : '' }}">
                    Menganggur
                </a>
            </div>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Table -->
            <div class="bg-gray-800 p-4 rounded shadow">
                <table class="w-full border-collapse border border-gray-400 text-xs bg-white">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="p-2 border">NISN</th>
                            <th class="p-2 border">Nama</th>
                            <th class="p-2 border">Alamat</th>
                            <th class="p-2 border">Email</th>
                            <th class="p-2 border">No HP</th>
                            <th class="p-2 border">Jurusan</th>
                            <th class="p-2 border">Tahun Lulus</th>
                            @if(request('status') == 'Kerja')
                                <th class="p-2 border">Profesi</th>
                                <th class="p-2 border">Jabatan</th>
                                <th class="p-2 border">Lokasi Kerja</th>
                                <th class="p-2 border">Gaji</th>
                                <th class="p-2 border">Alasan</th>
                            @elseif(request('status') == 'Kuliah')
                                <th class="p-2 border">Nama Kampus</th>
                                <th class="p-2 border">Jurusan</th>
                                <th class="p-2 border">Alamat Kuliah</th>
                                <th class="p-2 border">Alasan</th>
                            @elseif(request('status') == 'Wirausaha')
                                <th class="p-2 border">Bidang Usaha</th>
                                <th class="p-2 border">Lokasi</th>
                                <th class="p-2 border">Gaji</th>
                                <th class="p-2 border">Alasan</th>
                            @endif
                            <th class="p-2 border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($alumnis) && count($alumnis) > 0)
                            @foreach ($alumnis as $alumni)
                                <tr>
                                    <td class="p-2 border">{{ $alumni->nisn }}</td>
                                    <td class="p-2 border">{{ $alumni->nama }}</td>
                                    <td class="p-2 border">{{ $alumni->alamat }}</td>
                                    <td class="p-2 border">{{ $alumni->email }}</td>
                                    <td class="p-2 border">{{ $alumni->no_hp }}</td>
                                    <td class="p-2 border">{{ $alumni->jurusan }}</td>
                                    <td class="p-2 border">{{ $alumni->tahun_lulus }}</td>
                                    @if(request('status') == 'Kerja')
                                        <td class="p-2 border">{{ $alumni->profesi }}</td>
                                        <td class="p-2 border">{{ $alumni->jabatan }}</td>
                                        <td class="p-2 border">{{ $alumni->lokasi_kerja }}</td>
                                        <td class="p-2 border">{{ $alumni->gaji_kerja }}</td>
                                        <td class="p-2 border">{{ $alumni->alasan_kerja }}</td>
                                    @elseif(request('status') == 'Kuliah')
                                        <td class="p-2 border">{{ $alumni->kampus }}</td>
                                        <td class="p-2 border">{{ $alumni->jurusan_kuliah }}</td>
                                        <td class="p-2 border">{{ $alumni->lokasi_kuliah }}</td>
                                        <td class="p-2 border">{{ $alumni->alasan_kuliah }}</td>
                                    @elseif(request('status') == 'Wirausaha')
                                        <td class="p-2 border">{{ $alumni->bidang_usaha }}</td>
                                        <td class="p-2 border">{{ $alumni->lokasi_wirausaha }}</td>
                                        <td class="p-2 border">{{ $alumni->gaji_wirausaha }}</td>
                                        <td class="p-2 border">{{ $alumni->alasan_wirausaha }}</td>
                                    @endif
                                    <td class="p-2 border text-center">
                                    <button class="text-red-500 px-2 delete-btn" data-id="{{ $alumni->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                     <form id="delete-form-{{ $alumni->id }}" action="{{ route('alumni.destroy', $alumni->id) }}" method="POST" class="hidden">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="12" class="text-center p-2 border text-gray-500">Data tidak ditemukan</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                let infoId = this.getAttribute('data-id');
                Swal.fire({
                    title: "Apakah Anda yakin?",
                    text: "Data ini akan dihapus secara permanen!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Ya, hapus!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form-' + infoId).submit();
                    }
                });
            });
        });
    </script>

</x-app-layout>
