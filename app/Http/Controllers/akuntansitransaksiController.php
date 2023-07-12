<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\matakuliahvanes_model;

class akuntansitransaksiController extends Controller
{
    //
    public function index(){
        $mymatakuliah = new matakuliahvanes_model();
        $matakuliahvanes = $mymatakuliah->tampil_matakuliahvanes();
        
        $data = array('matakuliahvanes' => $matakuliahvanes);
        return view('matakuliahvanes/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('matakuliahvanes/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('t_matakuliah')
         ->insert([
             'mkid'  =>  $request->kode_jurnal,
             'nama_mk'  =>  $request->nomor_perkiraan,
             'sks'  =>  $request->tanggal_transaksi,
             'semester'  =>  $request->jenis_transaksi,
             'keterangan_transaksi'  =>  $request->keterangan_transaksi
             
         ]);
         return redirect('akuntansitransaksi');
     }
 
     public function edit($id){
         // return ('Testing');
         $akun = \DB::table('tbl_akuntansi_transaksi')->where('id', $id)->first();
         //dd($akun);
         $data = array('akuntansitransaksi' => $akuntansitransaksi);
         return view('akuntansitransaksi/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('tbl_akuntansi_transaksi')->where('id',$request->id)
         ->update([
            'kode_jurnal'  =>  $request->kode_jurnal,
            'nomor_perkiraan'  =>  $request->nomor_perkiraan,
            'tanggal_transaksi'  =>  $request->tanggal_transaksi,
            'jenis_transaksi'  =>  $request->jenis_transaksi,
            'keterangan_transaksi'  =>  $request->keterangan_transaksi
            
         ]);
         return redirect('akuntansitransaksi');
     }
 
     public function delete ($id){
         $query = \DB::table('tbl_akuntansi_transaksi')->where('id',$id)->delete();
         return redirect('akuntansitransaksi');
     }
 }
 

