<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LowonganKerja;
use Illuminate\Support\Facades\Storage;

class InfoLowonganController extends Controller
{
    // Menampilkan daftar lowongan kerja dengan fitur pencarian
    public function index(Request $request)
    {
        $search = $request->input('search');

        $lowongans = LowonganKerja::when($search, function ($query) use ($search) {
            return $query->where('judul', 'like', "%{$search}%")
                         ->orWhere('deskripsi', 'like', "%{$search}%")
                         ->orWhere('tags', 'like', "%{$search}%");
        })->orderBy('created_at', 'desc')->get();

        return view('dashboard_lowongan', compact('lowongans'));
    }

    // Menampilkan detail lowongan kerja berdasarkan ID
    public function show($id)
    {
        $lowongan = LowonganKerja::findOrFail($id);
        return view('detail-lowongan', compact('lowongan'));
    }

    // Menampilkan halaman tambah lowongan kerja
    public function create()
    {
        return view('create-lowongan');
    }

    // Menyimpan data lowongan kerja ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_diposting' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_diposting',
            'gambar' => 'nullable|image|max:2048',
            'tags' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('lowongan_gambar', 'public');
        }

        LowonganKerja::create($validatedData);

        return redirect()->route('lowongan.index')->with('success', 'Lowongan berhasil ditambahkan!');
    }

    // Menampilkan halaman edit lowongan kerja
    public function edit($id)
    {
        $lowongan = LowonganKerja::findOrFail($id);
        return view('edit-lowongan', compact('lowongan'));
    }

    // Menyimpan perubahan data lowongan kerja
    public function update(Request $request, $id)
    {
        $lowongan = LowonganKerja::findOrFail($id);

        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_diposting' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_diposting',
            'gambar' => 'nullable|image|max:2048',
            'tags' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            if ($lowongan->gambar) {
                Storage::disk('public')->delete($lowongan->gambar);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('lowongan_gambar', 'public');
        }

        $lowongan->update($validatedData);

        return redirect()->route('lowongan.index')->with('success', 'Lowongan berhasil diperbarui!');
    }

    // Menghapus lowongan kerja
    public function destroy($id)
    {
        $lowongan = LowonganKerja::findOrFail($id);

        if ($lowongan->gambar) {
            Storage::disk('public')->delete($lowongan->gambar);
        }

        $lowongan->delete();

        return redirect()->route('lowongan.index')->with('success', 'Lowongan berhasil dihapus!');
    }
}
