@extends('layout.main')
@section('content')

<div class="card">
<div class="card-header">

<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('tbl_matakuliah_vanes/tambah_proses') }}" method="POST">
@csrf
Mkid <input type="text" name="mkid"><br>
Nama Matakuliah <input type="text" name="nama_mk"><br>
Jumlah Sks <input type="text" name="sks"><br>
Semester<input type="text" name="semester"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection