<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembimbing extends Model
{
    use HasFactory;

    protected $fillable = ['permohonan_id', 'guru_id', 'perusahaan_id', 'status'];

    // public function scopeFilter($query, array $filters)
    // {
    //     $query->when($filters['search'] ?? false, function ($query, $search) {
    //         return $query->where('email', 'like', '%' . $search . '%')
    //             ->orWhere('nama', 'like', '%' . $search . '%')
    //             ->orWhere('jabatan', 'like', '%' . $search . '%');
    //     });
    // }

    public function permohonan()
    {
        return $this->belongsTo(Permohonan::class, 'permohonan_id');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }
}
