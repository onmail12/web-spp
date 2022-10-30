@extends('layout')

@section('main')
<h2 class="display-5 my-2">List Data Siswa</h2>
<a class="btn btn-outline-success sm-2 my-2" href="{{route('tambah_siswa') }}">
    <i class="bi bi-person-plus px-2"></i>Tambah Siswa</a>

<table class="table table-hover text-nowrap table-bordered">
    <thead class="table-dark">
        <th>No</th>
        <th>NISN</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th style="width:100px;" colspan=2>Aksi</th>
    </thead>
    @php $i = 0; @endphp
    @foreach ($siswa as $siswa)

    @php $i++; @endphp
    <tr>
        <td>{{ $i }}</td>
        <td>{{ $siswa->nisn }}</td>
        <td>{{ $siswa->nis }}</td>
        <td>{{ $siswa->nama }}</td>

        <td>{{ $siswa->spp->tahun }}</td>
        <td>{{ $siswa->spp->nominal }}</td>

        <td><a class="btn btn-outline-primary" href="{{ route('edit_siswa', $siswa->nisn) }}"><i
                    class="bi bi-pencil-square"></i></a>
        <td><a class="btn btn-outline-danger" href="{{ route('delete_siswa', $siswa->nisn) }}"><i
                    class="bi bi-trash"></i></a></td>
    </tr>

    @endforeach
</table>
@endsection