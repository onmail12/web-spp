<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['nisn', 'nis', 'nama', 'id_kelas', 'alamat', 'no_tlp', 'id_spp'];
    protected $primaryKey = 'nisn';
    public $timestamps = false;

    public function spp()
    {
        return $this->belongsTo(Spp::class, "id_spp", "id_spp");
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, "id_kelas", "id_kelas");
    }
}
