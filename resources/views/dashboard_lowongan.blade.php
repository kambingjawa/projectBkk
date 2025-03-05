<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Lowongan Kerja') }}
        </h2>
    </x-slot>
        <div class="container mx-auto p-6">
        <!-- Form Pencarian & Tombol Tambah Info Alumni dalam Satu Baris -->
        <div class="flex justify-between items-center mb-4">
            <form method="GET" action="{{ route('lowongan.index') }}" class="flex w-1/3">
                <input type="text" name="search" placeholder="Cari berdasarkan Judul, Tags dan Deskripsi" 
                    class="p-2 border rounded w-full text-black bg-white" value="{{ request('search') }}">
                <button type="submit" class="p-2 bg-gray-800 text-white border rounded ml-2">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <a href="{{ route('lowongan.create') }}">
                <button class="bg-green-600 text-white font-bold py-2 px-4 rounded hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                    Tambah Info Lowongan
                </button>
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow rounded p-4">
            @if($lowongans->count() > 0)
                <table class="table-auto w-full border border-gray-300">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="p-3 border">Judul</th>
                            <th class="p-3 border">Deskripsi</th>
                            <th class="p-3 border">Tanggal Diposting</th>
                            <th class="p-3 border">Tanggal Berakhir</th>
                            <th class="p-3 border">Gambar</th>
                            <th class="p-3 border">Tags</th>
                            <th class="p-3 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lowongans as $lowongan)
                            <tr class="bg-gray-100">
                                <td class="p-3 border">{{ $lowongan->judul }}</td>
                                <td class="p-3 border">{{ Str::limit($lowongan->deskripsi, 50) }}</td>
                                <td class="p-3 border">{{ $lowongan->tanggal_diposting }}</td>
                                <td class="p-3 border">{{ $lowongan->tanggal_berakhir }}</td>
                                <td class="p-3 border text-center">
                                    @if($lowongan->gambar)
                                        <img src="{{ asset('storage/' . $lowongan->gambar) }}" width="100" class="rounded shadow">
                                    @else
                                        <p class="text-gray-500 italic">Tidak ada gambar</p>
                                    @endif
                                </td>
                                <td class="p-3 border">{{ $lowongan->tags }}</td>
                                <td class="p-2 border text-center">
                                    <a href="{{ route('lowongan.edit', $lowongan->id) }}" class="text-blue-500 px-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button class="text-red-500 px-2 delete-btn" data-id="{{ $lowongan->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                     <form id="delete-form-{{ $lowongan->id }}" action="{{ route('lowongan.destroy', $lowongan->id) }}" method="POST" class="hidden">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-gray-500 italic text-center py-5">Belum ada lowongan kerja yang tersedia.</p>
            @endif
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
