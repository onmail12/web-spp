@extends('layout')
@section('layout')
<h2 class="display-5 fw-bold text-white mb-2">Tambah Siswa</h2>
@endsection

@section('main')
<h2>Masukkan Data Siswa</h2>

<div class="border rounded-4">
    <form class="px-3 mx-3 mt-3 mb-3" action="{{route('create_siswa')}}" method="GET">
        {{ csrf_field() }}
        <div class="form-group mb-3 my-2">
            <label for="nisn">NISN</label>
            <input type="text" class="form-control" name="nisn" placeholder="Enter NISN">
        </div>
        <div class="form-group mb-3 my-2">
            <label for="nis">NIS</label>
            <input type="text" class="form-control" name="nis" placeholder="Enter NIS">
        </div>
        <div class="form-group mb-3 my-2">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Enter Nama">
        </div>

        <div class="form-group mb-3 my-2">
            <label for="kelas">Kelas</label>
            <select name="kelas">
                <option value="{{$siswa->kelas->nama_kelas}}">{{$siswa->kelas->nama_kelas}}</option>
            </select>
        </div>

        <div class="form-group mb-3 my-2">
            <label for="nama">Kelas</label>
            <input type="text" class="form-control" name="nama" placeholder="Enter Nama">
        </div>

        <div class="form-group mb-3 my-2">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Enter Nama">
        </div>

        <div class="form-group mb-3 my-2">
            <label for="tahun">Spp Tahun</label>
            <select class="form-select" name="tahun" id="tahun">
                @foreach ($spp as $spp)
                <option value="{{$spp->id_spp}}">{{$spp->tahun}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3 my-2">
            <button type="submit" class="btn btn-primary px-4 me-sm-2 my-2">Submit</button>
        </div>
    </form>
</div>
@endsection