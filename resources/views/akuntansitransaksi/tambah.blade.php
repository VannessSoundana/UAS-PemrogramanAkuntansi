@extends('layout.main')
@section('content')

<h1>Master data akun</h1>
<div class="card">
<div class="card-header">

<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('akuntansitransaksi/tambah_proses') }}" method="POST">
@csrf
Kode Jurnal <input type="text" name="kode_jurnal"><br>
Nomor Perkiraan <input type="text" name="nomor_perkiraan"><br>
Tanggal Transaksi <input type="date" name="tanggal_transaksi"><br>
Jenis Transaksi <input type="text" name="jenis_transaksi"><br>
Keterangan Transaksi <input type="text" name="keterangan_transaksi"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection