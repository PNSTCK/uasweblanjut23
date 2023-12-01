<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mid extends Model
{
    use HasFactory;


    protected $table = 'nama';
    protected $fillable = ['judul_ujian', 'isi_ujian', 'penulis_soal', 'keterangan', 'tahun_ujian'];
}
