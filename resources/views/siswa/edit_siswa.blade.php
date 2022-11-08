@extends('layout')
@section('layout')
<h1 class="display-5 fw-bolder text-white mb-2">Update Siswa</h1>
@endsection

@section('main')
<h2 class="display-5">Edit Data Siswa</h2>
<div class="border rounded-4 bg-secondary" style="--bs-bg-opacity: 0.01;">
    <form class="m-4" action="/update_siswa" method="POST">
        {{ csrf_field() }}
        @foreach ($siswa as $siswa)
        <input type="hidden" name='nisn' value="{{$siswa->nisn}}">
        <div class="form-group form-floating my-4">
            <input type="text" class="form-control" value="{{$siswa->nisn}}" name="nisn_new" placeholder="Enter NISN">
            <label for="nisn">NISN</label>

        </div>
        <div class="form-group form-floating my-4">
            <input type="text" class="form-control" value="{{$siswa->nis}}" name="nis" placeholder="Enter NIS">
            <label for="nis">NIS</label>
        </div>
        <div class="form-group form-floating my-4">
            <input type="text" class="form-control" value="{{$siswa->nama}}" name="nama" placeholder="Enter Nama">
            <label for="nama">Nama</label>
        </div>

        <div class="form-group form-floating my-4">

            <select class="form-select" value="{{$siswa->id_kelas}} " name="id_kelas">
                @foreach ($kelas as $kelas)
                <option value="{{$kelas->id_kelas}}">{{$kelas->nama_kelas}}</option>
                @endforeach

            </select>
            <label for="id_kelas">Kelas</label>
        </div>

        <div class="form-group form-floating my-4">
            <textarea class="form-control" name="alamat" style="height: 100px;" placeholder="Enter Alamat">{{$siswa->alamat}}</textarea>
            <label for="alamat">Alamat</label>

        </div>

        <div class="form-group form-floating my-4">
            <input type="text" class="form-control" value="{{$siswa->no_telp}}" name="no_telp"
                placeholder="Enter No. Telpon">
            <label for="no_telp">No. Telpon</label>

        </div>

        <div class="form-group form-floating my-4">
            <select class="form-select" value="{{$siswa->id_spp}}" name="id_spp">
                @foreach ($spp as $spp)
                <option value="{{$spp->id_spp}}">{{$spp->tahun}}</option>
                @endforeach
            </select>
            <label for="id_spp">Spp Tahun</label>

        </div>

        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection