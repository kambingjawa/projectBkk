<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class StatistikController extends Controller
{
    public function statistik()
    {
        // Data Alumni per Jurusan
        $jurusanData = Alumni::select('jurusan')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('jurusan')
            ->get();

        // Data Alumni per Tahun
        $tahunData = Alumni::select('tahun_lulus')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('tahun_lulus')
            ->orderBy('tahun_lulus', 'ASC')
            ->get();

        // Data Rentang Gaji
        $gajiData = [
            '<=2.500.000' => Alumni::where('gaji_kerja', '<=', 2500000)->count(),
            '2.500.000 - 5.000.000' => Alumni::whereBetween('gaji_kerja', [2500000, 5000000])->count(),
            '5.000.000 - 15.000.000' => Alumni::whereBetween('gaji_kerja', [5000000, 15000000])->count(),
            '>15.000.000' => Alumni::where('gaji_kerja', '>', 15000000)->count(),
        ];

        // Data Profesi Alumni
        $profesiData = [
            'Kuliah' => Alumni::where('status', 'Kuliah')->count(),
            'Bekerja' => Alumni::where('status', 'Kerja')->count(),
            'Wirausaha' => Alumni::where('status', 'Wirausaha')->count(),
            'Menganggur' => Alumni::where('status', 'Tidak')->count(),
        ];

        return view('statistik', compact('jurusanData', 'tahunData', 'gajiData', 'profesiData'));
    }
}
