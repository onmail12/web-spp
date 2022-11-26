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
        $siswa = Siswa::orderBy('created_at', 'DESC')->orderBy('updated_at', 'DESC')->get();
        $kelas = Kelas::all();
        $spp = Spp::all();
        return view("siswa/siswa", compact('siswa', 'kelas', 'spp'));
    }

    public function create(Request $request)
    {
        $matched_siswa = Siswa::where('nisn', $request->nisn)->get();
        if (!empty($matched_siswa[0])) { //exist?
            return redirect('/siswa')->with('alert', ['alert-danger', 'Gagal!', ' Siswa Gagal Ditambahkan Karena NISN Terduplikat!']); //class, strong text, message
        } else {
            Siswa::create([
                'nisn' => $request->nisn,
                'nis' => $request->nis,
                'nama' => $request->nama,
                'id_kelas' => $request->id_kelas,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
                'id_spp' => $request->id_spp,
                'keterangan' => 'belum lunas',
            ]);
        }

        return redirect('/siswa')->with('alert', ['alert-success', 'Berhasil!', ' Siswa Telah Ditambahkan!']);
    }

    public function edit(Siswa $siswa)
    {
        $siswa = Siswa::where('nisn', $siswa->nisn)->get();
        $spp = Spp::all();
        $kelas = Kelas::all();
        return view("siswa/edit_siswa", compact('siswa', 'spp', 'kelas'));
    }

    public function update(Request $request)
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
        return redirect('/siswa')->with('alert', ['alert-success', 'Berhasil!', ' Data Siswa Telah Diubah!'])->with('last_updated', $request->nisn);
    }

    public function delete($nisn)
    {

        $siswa = Siswa::where('nisn', $nisn)->delete();

        return redirect('/siswa')->with('alert', ['alert-success', 'Berhasil!', ' Data Siswa Telah Dihapus!']);
    }
}
