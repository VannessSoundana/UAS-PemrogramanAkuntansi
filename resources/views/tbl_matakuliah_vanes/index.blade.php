@extends('layout.main')
@section('content')

<h1>Tambah MataKuliah</h1>
<div class="card">
<div class="card-header">
<a href="{{ asset('tbl_matakuliah_vanes/tambah')  }}">Tambah Data</a>
<table class="table table-sm table-stripped table-bordered">
    <thead>
 <tr style="background:black;color:white">
 <td>No</td>
    <td>Mkid</td>
    <td>Nama Matakuliah</td>
    <td>Jumlah Sks</td>
    <td>Semester</td>
   
    <td>Aksi</td>
 </tr> 
 </thead>

    <tbody>  
<?php 
$no=0;
foreach ($tbl_matakuliah_vanes as $rows){
$no++;
?>
<tr>
<td>{{ $no }}</td>
    <td>{{ $rows->mkid }}</td>
    <td>{{ $rows->nama_mk }}</td>
    <td>{{ $rows->sks }}</td>
    <td>{{ $rows->semester }}</td>
    
    <td>
        <a href="{{ asset('tbl_matakuliah_vanes/edit/'.$rows->id ) }}">Edit</a>
        <a href="{{ asset('tbl_matakuliah_vanes/delete/'.$rows->id ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
 </tbody>
</table>
</div>
</div>
@endsection