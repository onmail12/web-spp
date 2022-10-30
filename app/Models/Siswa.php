<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['nama', 'nisn','nis', 'id_spp'];
    public $timestamps = false;

    public function spp()
    {
        return $this->belongsTo(Spp::class, "id_spp", "id_spp");
    }
}
