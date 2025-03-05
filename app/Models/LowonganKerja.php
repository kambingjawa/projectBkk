<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LowonganKerja extends Model
{
    use HasFactory;
    

    protected $table = 'lowongan_kerja'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal_diposting',
        'tanggal_berakhir',
        'gambar',
        'tags',
    ];
    
}
