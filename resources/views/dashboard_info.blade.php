<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Info Alumni') }}
        </h2>
    </x-slot>
    
    <div class="container mx-auto p-6">
        <a href="{{ route('infoalumni.create') }}">
            <button class="bg-green-600 text-white font-bold py-2 px-4 rounded mb-3 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                Tambah Info Alumni
            </button>
        </a>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow rounded p-4">
            @if($infoAlumni->count() > 0)
                <table class="table-auto w-full border border-gray-300">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="p-3 border">Judul</th>
                            <th class="p-3 border">Subjudul</th>
                            <th class="p-3 border">Author</th>
                            <th class="p-3 border">Deskripsi</th>
                            <th class="p-3 border">Tanggal</th>
                            <th class="p-3 border">Gambar</th>
                            <th class="p-3 border">Tags</th>
                            <th class="p-3 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($infoAlumni as $info)
                            <tr class="bg-gray-100">
                                <td class="p-3 border">{{ $info->judul }}</td>
                                <td class="p-3 border">{{ $info->subjudul ?? '-' }}</td>
                                <td class="p-3 border">{{ $info->author }}</td>
                                <td class="p-3 border">{{ Str::limit($info->deskripsi, 50) }}</td>
                                <td class="p-3 border">{{ $info->tanggal }}</td>
                                <td class="p-3 border text-center">
                                    @if($info->gambar)
                                        <img src="{{ asset('storage/' . $info->gambar) }}" width="100" class="rounded shadow">
                                    @else
                                        <p class="text-gray-500 italic">Tidak ada gambar</p>
                                    @endif
                                </td>
                                <td class="p-3 border">{{ $info->tags ?? '-' }}</td>
                                <td class="p-2 border text-center">
                                    <a href="{{ route('infoalumni.edit', $info->id) }}" class="text-blue-500 px-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('infoalumni.destroy', $info->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 px-2" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?');">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-gray-500 italic text-center py-5">Belum ada informasi alumni yang tersedia.</p>
            @endif
        </div>
    </div>
</x-app-layout>
