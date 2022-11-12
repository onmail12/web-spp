@extends('layout')
<div class="modal modal-lg fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addModalLabel">Tambah Data SPP</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="px-2" action="{{route('create_spp')}}" method="GET">
                    {{ csrf_field() }}

                    <div class="col form-group my-2">
                        <label for="nominal">Nominal</label>
                        <input type="text" class="form-control" name="nominal">
                    </div>
                    <div class="col form-group my-2">
                        <label for="tahun">Tahun</label>
                        <input type="text" class="form-control" name="tahun">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success"><i class="bi bi-person-plus px-2"></i>Tambah
                    SPP</button>
            </div>
            </form>
        </div>
    </div>
</div>
@section('layout')

@endsection
@section('main')

<div class="border rounded mb-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-4 my-1 py-2">
            <li class="breadcrumb-item active" aria-current="page"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Spp</li>
        </ol>
    </nav>
</div>

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