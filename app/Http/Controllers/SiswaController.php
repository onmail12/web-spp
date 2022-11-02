<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Spp;
use App\Models\Kelas;

class SiswaController extends Controller
{

    public function index(Siswa $siswa, Spp $spp)
    {
        // $siswa = [
        //     ['nisn' => 'nisncontoh', 'nis' => 12345, 'nama' => 'iqbal', 'id_spp' => 'id_sppContoh'],
        //     ['nisn' => 'nisncontoh2', 'nis' => 1234, 'nama' => 'tes', 'id_spp' => 'id_sppContoh2'],
        // ];
        $siswa = Siswa::all();
        return view("siswa/siswa", compact('siswa'));
    }

    public function indexTambah(Siswa $siswa)
    {
        $siswa = Siswa::all();
        $spp = Spp::all();
        $kelas = Kelas::all();
        return view("siswa/tambah_siswa", compact('siswa', 'spp', 'kelas'));
    }

    public function create(Request $request)
    {

        $siswa = Siswa::create([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
        ]);
        return redirect('/siswa');
    }



    public function edit(Siswa $siswa)
    {
        $siswa = Siswa::where('nisn', $siswa->nisn)->get();
        $spp = Spp::all();
        $kelas = Kelas::all();
        return view("siswa/edit_siswa", compact('siswa', 'spp', 'kelas'));
    }

    public function update(Siswa $siswa, Request $request)
    {
        Siswa::where('nisn', $request->nisn)->update([
            'nisn' => $request->nisn_new,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
        ]);
        return redirect('/siswa');
    }

    public function delete($nisn)
    {

        $siswa = Siswa::where('nisn', $nisn)->delete();

        return redirect('/siswa');
    }
}
