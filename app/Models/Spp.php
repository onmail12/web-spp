<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;
    protected $table = 'spp';
    protected $fillable = ['tahun', 'nominal'];
    protected $primaryKey = 'id_spp';
    public $timestamps = false;

    //spp belongs to a siswa
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_spp', 'id_spp');
    }
    
}
