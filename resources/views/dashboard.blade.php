<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Info Alumni') }}
        </h2>
    </x-slot>

    <div class="flex min-h-screen bg-gray-200 p-6">
        <div class="flex-1">
            <!-- Form Pencarian -->
            <form method="GET" action="{{ route('dashboard') }}" class="mb-4 flex">
                <input type="text" name="search" placeholder="Cari berdasarkan NISN atau Nama" 
                class="p-2 border rounded w-1/3 text-white bg-gray-800" value="{{ request('search') }}">
                     <button type="submit" class="p-2 bg-white border rounded ml-2">
                        <i class="fas fa-search"></i>
                    </button>
                </form>


            <!-- Filter Status -->
            <div class="mb-4 space-x-2">
                <a href="{{ route('dashboard') }}" class="p-2 bg-gray-300 rounded text-white">Semua</a>
                <a href="{{ route('dashboard', ['status' => 'Kerja']) }}" class="p-2 bg-green-300 rounded text-white {{ request('status') == 'Bekerja' ? 'font-bold' : '' }}">Bekerja</a>
                <a href="{{ route('dashboard', ['status' => 'Wirausaha']) }}" class="p-2 bg-yellow-300 rounded text-white {{ request('status') == 'Wirausaha' ? 'font-bold' : '' }}">Wirausaha</a>
                <a href="{{ route('dashboard', ['status' => 'Kuliah']) }}" class="p-2 bg-blue-300 rounded text-white {{ request('status') == 'Kuliah' ? 'font-bold' : '' }}">Kuliah</a>
                <a href="{{ route('dashboard', ['status' => 'Tidak']) }}" class="p-2 bg-red-300 rounded text-white {{ request('status') == 'Menganggur' ? 'font-bold' : '' }}">Menganggur</a>
            </div>

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
                            <th class="p-2 border">Status</th>
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
                                    <td class="p-2 border">{{ $alumni->status }}</td>
                                    <td class="p-2 border text-center">
                                        <a href="{{ route('alumni.edit', $alumni->id) }}" class="text-blue-500 px-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('alumni.destroy', $alumni->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 px-2">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="9" class="text-center p-2 border text-gray-500">Data tidak ditemukan</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
