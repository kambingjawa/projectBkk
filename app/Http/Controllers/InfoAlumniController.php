<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoAlumni;
use Illuminate\Support\Facades\Storage;

class InfoAlumniController extends Controller
{
    // Menampilkan daftar informasi alumni dengan fitur pencarian
    public function index(Request $request)
    {
        $search = $request->input('search');

        $infoAlumni = InfoAlumni::when($search, function ($query) use ($search) {
            return $query->where('judul', 'like', "%{$search}%")
                         ->orWhere('author', 'like', "%{$search}%");
        })->orderBy('tanggal', 'desc')->get();

        return view('dashboard_info', compact('infoAlumni'));
    }

    // Menampilkan menu informasi alumni
    public function infoalumnimenu()
    {
        $infoAlumni = InfoAlumni::orderBy('tanggal', 'desc')->get();
        return view('infoalumnimenu', compact('infoAlumni'));
    }

    // Menampilkan detail informasi alumni berdasarkan ID
    public function show($id)
    {
        $infoAlumni = InfoAlumni::findOrFail($id);
        return view('detail-info', compact('infoAlumni'));
    }

    // Menampilkan form tambah informasi alumni
    public function create()
    {
        return view('create-info');
    }

    // Menyimpan data informasi alumni yang baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'subjudul' => 'nullable|string|max:255',
            'author' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|max:2048',
            'tags' => 'nullable|string',
        ]);

        // Simpan gambar jika ada
        if ($request->hasFile('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('infoalumni_gambar', 'public');
        }

        InfoAlumni::create($validatedData);

        return redirect()->route('infoalumni.index')->with('success', 'Informasi alumni berhasil ditambahkan!');
    }

    // Menampilkan form edit informasi alumni
    public function edit($id)
    {
        $infoAlumni = InfoAlumni::findOrFail($id);
        return view('edit-info', compact('infoAlumni'));
    }

    // Memperbarui data informasi alumni berdasarkan ID
    public function update(Request $request, $id)
    {
        $infoAlumni = InfoAlumni::findOrFail($id);

        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'subjudul' => 'nullable|string|max:255',
            'author' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|max:2048',
            'tags' => 'nullable|string',
        ]);

        // Update gambar jika ada
        if ($request->hasFile('gambar')) {
            if ($infoAlumni->gambar) {
                Storage::disk('public')->delete($infoAlumni->gambar);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('infoalumni_gambar', 'public');
        }

        $infoAlumni->update($validatedData);

        return redirect()->route('infoalumni.index')->with('success', 'Informasi alumni berhasil diperbarui!');
    }

    // Menghapus informasi alumni berdasarkan ID
    public function destroy($id)
    {
        $infoAlumni = InfoAlumni::findOrFail($id);

        // Hapus gambar jika ada
        if ($infoAlumni->gambar) {
            Storage::disk('public')->delete($infoAlumni->gambar);
        }

        $infoAlumni->delete();

        return redirect()->route('infoalumni.index')->with('success', 'Informasi alumni berhasil dihapus!');
    }
}
