@extends('layout')
@section('layout')
<h1 class="display-5 fw-bolder text-white mb-2">Daftar Spp SMKN 6</h1>

@endsection
@section('main')
<a class="btn btn-outline-success sm-2 my-2" href="{{route('tambah_spp') }}">
    <i class="bi bi-person-plus px-2"></i>Tambah Spp</a>

<table class="table table-hover text-nowrap table-bordered geeks">
    <thead class="table-dark">
        <th>No</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th colspan=2>Aksi</th>
    </thead>
    @php $i = 0; @endphp
    @foreach ($spp as $spp)
    @php $i++; @endphp
    <tr>
        <td>{{ $i }}</td>
        <td>{{ $spp->tahun }}</td>
        <td>{{ $spp->nominal }}</td>
        <td><a class="btn btn-outline-primary" href="{{route('edit_spp', $spp->id_spp)}}"><i
                    class="bi bi-pencil-square"></i></a>
        <td><a class="btn btn-outline-danger" href="{{route('delete_spp', $spp->id_spp)}}"><i
                    class="bi bi-trash"></i></a></td>
    </tr>
    @endforeach
</table>
@endsection