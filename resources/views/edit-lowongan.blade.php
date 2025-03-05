<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Lowongan Kerja') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Edit Lowongan Kerja</h1>

        <form action="{{ route('lowongan.update', $lowongan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="judul" class="block font-medium text-gray-700">Judul</label>
                <input type="text" name="judul" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ $lowongan->judul }}" required>
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" class="w-full border-gray-300 rounded-md shadow-sm" required>{{ $lowongan->deskripsi }}</textarea>
            </div>

            <div class="mb-4">
                <label for="tanggal_diposting" class="block font-medium text-gray-700">Tanggal Diposting</label>
                <input type="date" name="tanggal_diposting" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ $lowongan->tanggal_diposting }}" required>
            </div>

            <div class="mb-4">
                <label for="tanggal_berakhir" class="block font-medium text-gray-700">Tanggal Berakhir</label>
                <input type="date" name="tanggal_berakhir" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ $lowongan->tanggal_berakhir }}" required>
            </div>

            <div class="mb-4">
                <label for="gambar" class="block font-medium text-gray-700">Gambar</label>
                <input type="file" name="gambar" class="w-full border-gray-300 rounded-md shadow-sm">
                @if($lowongan->gambar)
                    <img src="{{ asset('storage/' . $lowongan->gambar) }}" width="100" class="mt-2">
                @endif
            </div>

            <div class="mb-4">
                <label for="tags" class="block font-medium text-gray-700">Tags</label>
                <input type="text" name="tags" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ $lowongan->tags }}">
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Update</button>
            <a href="{{ route('lowongan.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md">Batal</a>
        </form>
    </div>
</x-app-layout>
