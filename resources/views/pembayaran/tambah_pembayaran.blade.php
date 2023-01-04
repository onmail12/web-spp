@extends('layout')

@section('main')
<h2>Masukkan Data Pembayaran</h2>

<div class="border rounded-4">
    <form class="p-3 m-3" action="{{route('create_pembayaran', $siswa->nisn)}}" method="GET">
        {{ csrf_field() }}
        <div class="form-floating my-2">
            <input type="text" class="form-control" name="nama" value="{{$siswa->nama}}" placeholder="Enter Nama">
            <label for="nama">Nama</label>
        </div>
        <div class="form-floating my-2">
            <select class="form-select" name="id_petugas">
                @foreach ($petugas as $petugas)
                <option value={{ $petugas->id_petugas }}>{{ $petugas->nama_petugas }}</option>
                @endforeach
            </select>
            <label for="id_petugas">Nama Petugas</label>
        </div>
        <div class="form-floating my-2">
            <input type="text" class="form-control" name="jumlah_bayar" placeholder="Enter Nominal">
            <label for="nominal">Nominal</label>
        </div>
        <div class="form-floating my-2">
            <input type="text" class="form-control" name="keterangan" placeholder="Enter Keterangan">
            <label for="keterangan">Keterangan</label>
        </div>

        <button type="submit" class="btn btn-primary px-4 me-sm-2 my-2">Submit</button>
</div>

</form>
</div>
@endsection