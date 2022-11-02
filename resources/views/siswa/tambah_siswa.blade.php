@extends('layout')
@section('layout')
<h2 class="display-5 fw-bold text-white mb-2">Tambah Siswa</h2>
@endsection

@section('main')
<h2>Masukkan Data Siswa</h2>

<div class="border rounded-4">
    <form class="p-3 m-3" action="{{route('create_siswa')}}" method="GET">
        {{ csrf_field() }}
        <div class="row">
            <div class="col form-group my-2">
                <label for="nisn">NISN</label>
                <input type="text" class="form-control" name="nisn" placeholder="Enter NISN">
            </div>
            <div class="col form-group my-2">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" name="nis" placeholder="Enter NIS">
            </div>
        </div>

        <div class="row">
            <div class="col form-group my-2">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Enter Nama">
            </div>

            <div class="col form-group my-2">
                <label for="id_kelas">Kelas</label>
                <select class="form-select" name="id_kelas">
                    @foreach ($kelas as $kelas)
                    <option value="{{$kelas->id_kelas}}">{{$kelas->nama_kelas}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col form-group my-2">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="Enter Alamat">
            </div>

            <div class="col form-group my-2">
                <label for="no_telp">No.Telp</label>
                <input type="text" class="form-control" name="no_telp" placeholder="Enter No. Telpon">
            </div>
        </div>

        <div class="form-group my-2">
            <label for="id_spp">Spp Tahun</label>
            <select class="form-select" name="id_spp">
                @foreach ($spp as $spp)
                <option value="{{$spp->id_spp}}">{{$spp->tahun}}</option>
                @endforeach
            </select>
        </div>
</div>

<div class="form-group my-2">
    <button type="submit" class="btn btn-primary px-4 me-sm-2 my-2">Submit</button>
</div>
</form>
</div>
@endsection