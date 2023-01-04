@extends('layout')

@section('main')

<h2 class="display-5 text-center">List Data Histori Pembayaran</h2>
<table id="dataTable" class="table table-hover table-bordered text-nowrap mb-5">
    <thead class="table-light text-center">
        <th>No</th>
        <th>Nama Petugas</th>
        <th>NISN</th>
        <th>Nama Siswa</th>
        <th>Tanggal Bayar</th>
        <th>Tahun Spp</th>
        <th>Jumlah Bayar</th>
        <th>Keterangan</th>
        
    </thead>
    @php $i = 0; @endphp
    @foreach ($pembayaran as $pembayaran)
    @php $i++; @endphp
    <tbody class="">
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $pembayaran->petugas->nama_petugas }}</td>
            <td>{{ $pembayaran->siswa->nisn }}</td>
            <td>{{ $pembayaran->siswa->nama }}</td>
            <td>{{ $pembayaran->tgl_bayar }}</td>
            <td>{{ $pembayaran->spp->tahun }}</td>
            <td>{{ $pembayaran->jumlah_bayar }}</td>
            <td>{{ $pembayaran->keterangan }}</td>
            
        </tr>
    </tbody>

    @endforeach
</table>
@endsection