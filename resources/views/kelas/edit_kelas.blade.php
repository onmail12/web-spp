@extends('layout')
@section('layout')
<h1 class="display-5 fw-bolder text-white mb-2">Update Kelas</h1>
@endsection

@section('main')
<h2 class="display-5">Edit Data Kelas</h2>
<div class="border rounded-4">
 
    <form class="px-3 mx-3 mt-3 mb-3" action="/update_kelas" method="POST">
        {{ csrf_field() }}
        @foreach ($kelas as $kelas)
        
        <input type="hidden" name='id_kelas' value="{{$kelas->id_kelas}}">

        <div class="form-group mb-3 my-2">
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" class="form-control" value="{{$kelas->nama_kelas}}" name="nama_kelas" placeholder="Enter nama_kelas">
        </div>
        <div class="form-group mb-3 my-2">
            <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
            <input type="text" class="form-control" value="{{$kelas->kompetensi_keahlian}}" name="kompetensi_keahlian"
                placeholder="Enter kompetensi_keahlian">
        </div>

        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection