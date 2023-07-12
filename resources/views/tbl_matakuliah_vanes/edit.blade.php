@extends('layout.main')
@section('content')
<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('tbl_matakuliah_vanes/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $tbl_matakuliah_vanes->id ?>">
Mkid <input type="text" name="mkid" value="<?php echo $tbl_matakuliah_vanes->mkid ?>"><br>
Nama Mk <input type="text" name="nama_mk" value="<?php echo $tbl_matakuliah_vanes->nama_mk?>"><br>
Sks <input type="text" name="sks" value="<?php echo $tbl_matakuliah_vanes->sks ?>"><br>
Semester <input type="text" name="semester" value="<?php echo $tbl_matakuliah_vanes->semester ?>"><br>
<input type="submit" value="Simpan">
</form>    
@endsection 