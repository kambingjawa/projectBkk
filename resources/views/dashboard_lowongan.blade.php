<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Lowongan Kerja') }}
        </h2>
    </x-slot>
    

    <div class="container mx-auto p-6">
        <a href="{{ route('lowongan.create') }}">
            <button class="bg-green-600 text-white font-bold py-2 px-4 rounded mb-3 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                Tambah Lowongan
            </button>
        </a>

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
                                    <form action="{{ route('lowongan.destroy', $lowongan->id) }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="text-red-500 px-2">
        <i class="fas fa-trash"></i>
    </button>
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
</x-app-layout>
