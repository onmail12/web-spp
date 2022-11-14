<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view("kelas/kelas", compact('kelas'));
    }

    public function create(Request $request)
    {
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
        ]);

        return redirect('/kelas')->with('alert', ['alert-success', 'Berhasil!', ' Kelas Telah Ditambahkan!']);
    }

    public function edit(Kelas $kelas)
    {
        $kelas = Kelas::where('id_kelas', $kelas->id_kelas)->get();
        return view("kelas/edit_kelas", compact('kelas'));
    }

    public function update(Request $request)
    {

        Kelas::where('id_kelas', $request->id_kelas)->update([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
        ]);
        return redirect('/kelas')->with('alert', ['alert-success', 'Berhasil!', ' Data Kelas Telah Diubah!']);
    }

    public function delete($id_kelas)
    {

        Kelas::where('id_kelas', $id_kelas)->delete();

        return redirect('/kelas')->with('alert', ['alert-success', 'Berhasil!', ' Data Kelas Telah Dihapus!']);
    }
}
