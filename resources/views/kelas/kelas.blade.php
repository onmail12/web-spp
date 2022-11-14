@extends('layout')

{{-- tambah Kelas modal --}}
<div class="modal modal-lg fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addModalLabel">Tambah Data Kelas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="px-2" action="{{route('create_kelas')}}" method="GET">
                    {{ csrf_field() }}
                    <div class="form-group my-2">
                        <label for="nama_kelas">Nama Kelas</label>
                        <input type="text" class="form-control" name="nama_kelas" placeholder="Enter Nama Kelas">
                    </div>


                    <div class="form-group my-2">
                        <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                        <input type="text" class="form-control" name="kompetensi_keahlian" placeholder="Enter Kompetensi Keahlian">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success"><i class="bi bi-person-plus px-2"></i>Tambah
                    Kelas</button>
            </div>
            </form>
        </div>
    </div>
</div>

@section('main')

<div class="border rounded mb-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-4 my-1 py-2">
            <li class="breadcrumb-item active" aria-current="page"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kelas</li>
        </ol>
    </nav>
</div>

@if (session('alert'))
<div class="alert my-2 {{session('alert')[0]}} alert-dismissible fade show w-50" role="alert">
    <strong>{{session('alert')[1]}}</strong> {{session('alert')[2]}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<h2 class="display-5">List Data Kelas</h2>
<a class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#addModal">
    <i class="bi bi-person-plus px-2"></i>Tambah Kelas</a>

<table id="dataTable" class="table table-hover table-bordered text-nowrap mb-5">
    <thead class="table-light text-center">
        <th>No</th>
        <th>Nama Kelas</th>
        <th>Kompetensi Keahlian</th>
        <th style="width:100px; text-align:center;" colspan=2>Aksi</th>
    </thead>
    @php $i = 0; @endphp
    @foreach ($kelas as $kelas)
    @php $i++; @endphp
    <tbody class="">
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $kelas->nama_kelas }}</td>
            <td>{{ $kelas->kompetensi_keahlian }}</td>

            <td class="text-center"><a class="btn btn-primary p-2" href="{{ route('edit_kelas', $kelas->id_kelas) }}"><i
                        class="bi bi-pencil-square"></i></a>
            <td class="text-center"><a class="btn btn-danger p-2" href="{{ route('delete_kelas', $kelas->id_kelas) }}"><i
                        class="bi bi-trash"></i></a></td>
        </tr>
    </tbody>

    @endforeach
</table>
@endsection