<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $guarded = ['id'];
    protected $primaryKey = 'nisn';
    public $timestamps = false;

    public function spp()
    {
        return $this->belongsTo(Spp::class, "id_spp", "id_spp");
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class, "id_kelas", "id_kelas");
    }
}
