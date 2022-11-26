@extends('layout')

@section('main')

<a class="btn btn-outline-success sm-2 my-2" data-bs-toggle="modal" data-bs-target="#addModal">
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