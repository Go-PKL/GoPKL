<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $fillable = ['siswa_id', 'perusahaan_id', 'tgl_mulai', 'tgl_selesai', 'durasi_pkl'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('email', 'like', '%' . $search . '%')
                ->orWhere('nama', 'like', '%' . $search . '%')
                ->orWhere('jurusan', 'like', '%' . $search . '%')
                ->orWhere('kelas', 'like', '%' . $search . '%')
                ->orWhere('tgl_masuk', 'like', '%' . $search . '%')
                ->orWhere('tgl_keluar', 'like', '%' . $search . '%')
                ->orWhere('durasi_pkl', 'like', '%' . $search . '%');
        });
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'perusahaan_id');
    }
}
