<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    public function user()
{
    return $this->belongsTo(User::class, 'siswa_id'); // Kolom siswa_id mengacu ke tabel users
}

    use HasFactory;

    protected $table = 'submission'; // Nama tabel Anda

    protected $fillable = [
        'tugas_id',
        'siswa_id',
        'file_url',
        'nilai',
        'feedback',
    ];
}