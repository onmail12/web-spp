@extends('layout')
@section('layout')
<h1 class="display-5 fw-bolder text-white mb-2">Update Siswa</h1>
@endsection

@section('main')
<h2 class="display-5">Edit Data Siswa</h2>
<div class="border rounded-4">
    <form class="px-3 mx-3 mt-3 mb-3" action="/update_siswa" method="POST">
        {{ csrf_field() }}
        @foreach ($siswa as $siswa)
        <input type="hidden" name='nisn' value="{{$siswa->nisn}}">

        {{-- <div class="form-group mb-3 my-2">
            <label for="nisn">NISN</label>
            <input type="text" class="form-control" name="nisn_new" placeholder="{{$siswa->nisn}}">
        </div>
        <div class="form-group mb-3 my-2">
            <label for="nis">NIS</label>
            <input type="text" class="form-control" name="nis" placeholder="{{$siswa->nis}}">
        </div>
        <div class="form-group mb-3 my-2">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="{{$siswa->nama}}">
        </div>
        <div class="form-group mb-3 my-2">
            <label for="id_spp">Spp Tahun</label>
            <select class="form-select" name="id_spp" id="id_spp">
                @foreach ($spp as $spp)
                <option value="{{$spp->id_spp}}">{{$spp->tahun}}</option>
                @endforeach
            </select>
        </div> --}}

        <div class="form-group mb-3 my-2">
            <label for="nisn">NISN</label>
            <input type="text" class="form-control" value="{{$siswa->nisn}}" name="nisn_new" placeholder="Enter NISN">
        </div>
        <div class="form-group mb-3 my-2">
            <label for="nis">NIS</label>
            <input type="text" class="form-control" value="{{$siswa->nis}}" name="nis" placeholder="Enter NIS">
        </div>
        <div class="form-group mb-3 my-2">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" value="{{$siswa->nama}}" name="nama" placeholder="Enter Nama">
        </div>

        <div class="form-group mb-3 my-2">
            <label for="id_kelas">Kelas</label>
            <select class="form-select" value="{{$siswa->id_kelas}} "name="id_kelas">
                @foreach ($kelas as $kelas)
                <option value="{{$kelas->id_kelas}}">{{$kelas->nama_kelas}}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group mb-3 my-2">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" value="{{$siswa->alamat}}" name="alamat" placeholder="Enter Alamat">
        </div>

        <div class="form-group mb-3 my-2">
            <label for="no_telp">No. Telpon</label>
            <input type="text" class="form-control" value="{{$siswa->no_telp}}" name="no_telp" placeholder="Enter No. Telpon">
        </div>

        <div class="form-group mb-3 my-2">
            <label for="id_spp">Spp Tahun</label>
            <select class="form-select" value="{{$siswa->id_spp}}" name="id_spp">
                @foreach ($spp as $spp)
                <option value="{{$spp->id_spp}}">{{$spp->tahun}}</option>
                @endforeach
            </select>
        </div>

        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection