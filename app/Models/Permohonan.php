<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $fillable = ['siswa_id', 'tgl_mulai', 'tgl_selesai', 'durasi_pkl'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

}
