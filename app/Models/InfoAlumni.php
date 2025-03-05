<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoAlumni extends Model
{
    use HasFactory;

    protected $table = 'info_alumni';

    protected $fillable = [
        'judul', 'subjudul', 'author', 'gambar', 'deskripsi', 'tanggal', 'tags'
    ];
}
