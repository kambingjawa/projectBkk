<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumni;


class FormAlumniController extends Controller
{


    public function formalumni(){
        return view('formalumni');
    }


    public function store(Request $request)
    {
        DB::enableQueryLog(); // Aktifkan query log

        $validatedData = $request->validate([
            'nisn' => 'required|unique:alumnis',
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email|unique:alumnis',
            'no_hp' => 'required',
            'jurusan' => 'required',
            'tahun_lulus' => 'required',
            'status' => 'required',
            'profesi' => 'nullable',
            'jabatan' => 'nullable',
            'lokasi_kerja' => 'nullable',
            'gaji_kerja' => 'nullable',
            'alasan_kerja' => 'nullable',
            'kampus' => 'nullable',
            'jurusan_kuliah' => 'nullable',
            'lokasi_kuliah' => 'nullable',
            'alasan_kuliah' => 'nullable',
            'bidang_usaha' => 'nullable',
            'lokasi_wirausaha' => 'nullable',
            'gaji_wirausaha' => 'nullable',
            'alasan_wirausaha' => 'nullable',
        ]);

        Alumni::create($validatedData);

        return redirect()->route('menu')->with('success', 'Data berhasil disimpan!');

        dd(DB::getQueryLog()); // Cek query yang dieksekusi
    }


public function edit($id)
{
    $alumni = Alumni::findOrFail($id);
    return view('alumni.edit', compact('alumni'));
}

public function update(Request $request, $id)
{
    $alumni = Alumni::findOrFail($id);
    $alumni->update($request->all());

    return redirect()->route('dashboard')->with('success', 'Data berhasil diperbarui!');


}

public function destroy($id)
{
    $alumni = Alumni::findOrFail($id);
    $alumni->delete();

    return redirect()->route('alumni.index')->with('success', 'Data berhasil dihapus');
}
public function index()
{
    $alumnis = Alumni::all(); // Pastikan variabel ini ada
    return view('alumni.index', compact('alumnis')); // Pastikan ini sesuai
}




}





