<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'nama', 'kelas', 'jurusan_id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('kelas', 'like', '%' . request('search') . '%');
            // ->orWhere('singkatan', 'like', '%' . request('search') . '%');
        });
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function permohonan()
    {
        return $this->hasMany(Permohonan::class, 'permohonan_id');
    }
}
