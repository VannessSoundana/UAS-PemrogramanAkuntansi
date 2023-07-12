@extends('layout.main')
@section('content')
<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('akuntansitransaksi/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $akuntansitransaksi->id ?>">
Kode Jurnal <input type="text" name="kode_jurnal" value="<?php echo $akuntansitransaksi->kode_jurnal ?>"><br>
Nomor Perkiraan <input type="text" name="nomor_perkiraan" value="<?php echo $akuntansitransaksi->nomor_perkiraan ?>"><br>
Tanggal Transaksi <input type="date" name="tgl_transaksi" value="<?php echo $akuntansitransaksi->tgl_transaksi ?>"><br>
Jenis Transaksi <input type="text" name="jenis_transaksi" value="<?php echo $akuntansitransaksi->jenis_transaksi ?>"><br>
Keterangan Transaksi <input type="text" name="keterangan_transaksi" value="<?php echo $akuntansitransaksi->keterangan_transaksi ?>"><br>
<input type="submit" value="Simpan">
</form>   
@endsection  