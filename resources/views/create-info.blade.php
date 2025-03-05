<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Informasi Alumni') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Tambah Informasi Alumni</h1>

        <form action="{{ route('infoalumni.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="judul" class="block font-medium text-gray-700">Judul</label>
                <input type="text" name="judul" class="w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="subjudul" class="block font-medium text-gray-700">Subjudul</label>
                <input type="text" name="subjudul" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <div class="mb-4">
                <label for="author" class="block font-medium text-gray-700">Author</label>
                <input type="text" name="author" class="w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" class="w-full border-gray-300 rounded-md shadow-sm" required></textarea>
            </div>

            <div class="mb-4">
                <label for="tanggal" class="block font-medium text-gray-700">Tanggal</label>
                <input type="date" name="tanggal" class="w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="gambar" class="block font-medium text-gray-700">Gambar</label>
                <input type="file" name="gambar" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <div class="mb-4">
                <label for="tags" class="block font-medium text-gray-700">Tags</label>
                <input type="text" name="tags" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md">Simpan</button>
            <a href="{{ route('infoalumni.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md">Batal</a>
        </form>
    </div>
</x-app-layout>
