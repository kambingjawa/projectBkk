<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class DashboardController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function menu(){
        return view('menu');
    }

    public function dashboard(Request $request) {
        $query = Alumni::query();
    
        if ($request->has('status') && !empty($request->status)) {
            $query->where('status', $request->status);
        }
    
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('nisn', 'like', '%' . $request->search . '%')
                  ->orWhere('nama', 'like', '%' . $request->search . '%');
            });
        }
    
        $alumnis = $query->get(); // Ambil data
    
        return view('dashboard', compact('alumnis')); // Kirim ke view
    }
    
    public function index(Request $request)
{
    $query = Alumni::query();

    if ($request->has('status')) {
        $status = $request->status;

        if ($status == 'Kerja') {
            $query->select('nisn', 'nama', 'alamat', 'email', 'no_hp', 'jurusan', 'tahun_lulus', 'profesi', 'jabatan', 'lokasi_kerja', 'gaji_kerja', 'alasan_kerja');
        } elseif ($status == 'Kuliah') {
            $query->select('nisn', 'nama', 'alamat', 'email', 'no_hp', 'jurusan', 'tahun_lulus', 'nama_kampus', 'jurusan_kuliah', 'alamat_kuliah', 'alasan_kuliah');
        } elseif ($status == 'Wirausaha') {
            $query->select('nisn', 'nama', 'alamat', 'email', 'no_hp', 'jurusan', 'tahun_lulus', 'bidang_usaha', 'lokasi_wirausaha', 'gaji_wirausaha', 'alasan_wirausaha');
        } elseif ($status == 'Tidak') {
            $query->select('nisn', 'nama', 'alamat', 'email', 'no_hp', 'jurusan', 'tahun_lulus');
        }
    }

    $alumnis = $query->get();

    return view('dashboard', compact('alumnis'));
}


       

    
    
    
}
