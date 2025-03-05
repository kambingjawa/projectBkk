<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoAlumni;
use Illuminate\Support\Facades\Storage;

class InfoAlumniController extends Controller
{
    public function infoalumnimenu()
    {
        $infoAlumni = InfoAlumni::orderBy('tanggal', 'desc')->get();
        return view('infoalumnimenu', compact('infoAlumni'));
    }

    public function index()
    {
        $infoAlumni = InfoAlumni::orderBy('tanggal', 'desc')->get();
        return view('dashboard_info', compact('infoAlumni'));
    }

    public function show($id)
    {
        $infoAlumni = InfoAlumni::findOrFail($id);
        return view('detail-info', compact('infoAlumni'));
    }

    public function create()
    {
        return view('create-info');
    }

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

        if ($request->hasFile('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('infoalumni_gambar', 'public');
        }

        InfoAlumni::create($validatedData);

        return redirect()->route('infoalumni.index')->with('success', 'Informasi alumni berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $infoAlumni = InfoAlumni::findOrFail($id);
        return view('edit-info', compact('infoAlumni'));
    }

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

        if ($request->hasFile('gambar')) {
            if ($infoAlumni->gambar) {
                Storage::disk('public')->delete($infoAlumni->gambar);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('infoalumni_gambar', 'public');
        }

        $infoAlumni->update($validatedData);

        return redirect()->route('infoalumni.index')->with('success', 'Informasi alumni berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $infoAlumni = InfoAlumni::findOrFail($id);

        if ($infoAlumni->gambar) {
            Storage::disk('public')->delete($infoAlumni->gambar);
        }

        $infoAlumni->delete();

        return redirect()->route('infoalumni.index')->with('success', 'Informasi alumni berhasil dihapus!');
    }
}
