@extends('layout')

@section('main')
@if (session('alert'))
<div class="alert my-2 {{session('alert')[0]}} alert-dismissible fade show w-50" role="alert">
    <strong>{{session('alert')[1]}}</strong> {{session('alert')[2]}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (($siswa->count() == 0))
<h2 class="display-5 text-center my-3">Semua Siswa Lunas!</h2>
@else

<h2 class="display-5 text-center">List Data Pembayaran</h2>
<table id="dataTable" class="table table-hover table-bordered text-nowrap mb-5">
    <thead class="table-light text-center">
        <th>No</th>
        <th>NISN</th>
        <th>NIS</th>
        <th>Nama</th>
        {{-- <th>Alamat</th> --}}
        <th>Kelas</th>
        <th>Nominal</th>
        <th style="width:100px; text-align:center;">Aksi</th>
        
    </thead>
    @php $i = 0; @endphp
    @foreach ($siswa as $siswa)
    @php $i++; @endphp
    <tbody class="">
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $siswa->nisn }}</td>
            <td>{{ $siswa->nis }}</td>
            <td>{{ $siswa->nama }}</td>
            {{-- <td>{{ $siswa->alamat }}</td> --}}
            <td>{{ $siswa->kelas->nama_kelas }}</td>
            <td>Rp{{ $siswa->spp->nominal }}.000</td>

            <td class="text-center"><a class="btn btn-primary p-2"
                    href="{{ route('tambah_pembayaran', $siswa->nisn) }}">Bayar</a>
            
        </tr>
    </tbody>

    @endforeach
</table>
@endif
@endsection