@extends('layout')

{{-- tambah siswa modal --}}
<div class="modal modal-lg fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addModalLabel">Tambah Data Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="px-2" action="{{route('create_siswa')}}" method="GET">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col form-group my-2">
                            <label for="nisn">NISN</label>
                            <input type="text" class="form-control" name="nisn" placeholder="Enter NISN" required>
                        </div>
                        <div class="col form-group my-2">
                            <label for="nis">NIS</label>
                            <input type="text" class="form-control" name="nis" placeholder="Enter NIS" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col form-group my-2">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Enter Nama" required>
                        </div>

                        <div class="col form-group my-2">
                            <label for="id_kelas">Kelas</label>
                            <select class="form-select" name="id_kelas">
                                <option value="1">Pilih Kelas</option>
                                @foreach ($kelas as $kelas)
                                <option value="{{$kelas->id_kelas}}">{{$kelas->nama_kelas}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="col form-group my-2">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Enter Alamat" required>
                    </div>

                    <div class="row">
                        <div class="col form-group my-2">
                            <label for="no_telp">No.Telp</label>
                            <input type="text" class="form-control" name="no_telp" placeholder="Enter No. Telpon" required>
                        </div>


                        <div class="col form-group my-2">
                            <label for="id_spp">Spp Tahun</label>
                            <select class="form-select" name="id_spp">
                                <option value="1">Pilih Spp</option>
                                @foreach ($spp as $spp)
                                <option value="{{$spp->id_spp}}">{{$spp->tahun}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success"><i class="bi bi-person-plus px-2"></i>Tambah
                    Siswa</button>
            </div>
            </form>
        </div>
    </div>
</div>

@section('main')

@if (session('alert'))
<div class="alert my-2 {{session('alert')[0]}} alert-dismissible fade show w-50" role="alert">
    <strong>{{session('alert')[1]}}</strong> {{session('alert')[2]}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (($siswa->count() == 0))
<h2 class="display-5 text-center my-3">Data Siswa Tidak Ditemukan!</h2>
<a class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#addModal">
    <i class="bi bi-person-plus px-2"></i>Tambah Siswa</a>
@else
<h2 class="display-5 text-center">List Data Siswa</h2>

<a class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#addModal">
    <i class="bi bi-person-plus px-2"></i>Tambah Siswa</a>

<table id="dataTable" class="table table-hover table-bordered text-nowrap mb-5">
    <thead class="table-light text-center">
        <th>No</th>
        <th>NISN</th>
        <th>NIS</th>
        <th>Nama</th>
        {{-- <th>Alamat</th> --}}
        <th>Kelas</th>
        <th style="width:100px; text-align:center;" colspan=2>Aksi</th>
    </thead>
    @php $i = 0; @endphp
    @foreach ($siswa as $siswa)
    @php $i++; @endphp
    <tbody>
        <tr>
            <td class="text-center">{{ $i }}</td>
            <td class="text-center">{{ $siswa->nisn }}</td>
            <td class="text-center">{{ $siswa->nis }}</td>
            <td>{{ $siswa->nama }}</td>
            {{-- <td>{{ $siswa->alamat }}</td> --}}
            <td class="text-center">{{ $siswa->kelas->nama_kelas }}</td>

            <td class="text-center"><a class="btn btn-primary p-2" href="{{ route('edit_siswa', $siswa->nisn) }}"><i
                        class="bi bi-pencil-square"></i></a>
            <td class="text-center"><a class="btn btn-danger p-2" href="{{ route('delete_siswa', $siswa->nisn) }}"><i
                        class="bi bi-trash"></i></a></td>
        </tr>
    </tbody>

    @endforeach
</table>
@endif
@endsection