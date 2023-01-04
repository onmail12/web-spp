<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pembayaran;
use App\Models\Kelas;
use App\Models\Spp;
use App\Models\Petugas;

class PembayaranController extends Controller
{
    public function index()
    {
        $siswa = Siswa::belumlunas()->get();
        $kelas = Kelas::all();
        $spp = Spp::all();
        return view('pembayaran/pembayaran', compact('siswa', 'kelas', 'spp'));
    }

    public function histori()
    {
        $pembayaran = Pembayaran::all();
        return view('pembayaran/histori', compact('pembayaran'));
    }

    public function tambah_pembayaran(Siswa $siswa)
    {
        $petugas = Petugas::all();

        return view('pembayaran/tambah_pembayaran', compact('siswa', 'petugas'));
    }

    public function create(Request $request, Siswa $siswa)
    {
        Pembayaran::create([
            'id_petugas' => $request->id_petugas,
            'nisn' => $siswa->nisn,
            'id_spp' => $siswa->id_spp,
            //tgl_bayar filled by model
            'jumlah_bayar' => $request->jumlah_bayar,
            'keterangan' => $request->keterangan
        ]);
        return redirect('/pembayaran')->with('alert', ['alert-success', 'Berhasil!', ' Pembayaran Telah Ditambahkan!']);
    }
}
