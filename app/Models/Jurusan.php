<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    
    protected $fillable = ['nama'];

    public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }

    public function perusahaans()
    {
        return $this->hasMany(Perusahaan::class);
    }
}
