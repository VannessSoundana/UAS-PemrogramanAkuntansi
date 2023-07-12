<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\matakuliahvanes_model;

class MatkuliahvanesController extends Controller
{
    //
    public function index(){
        $mymatakuliah = new matakuliahvanes_model();
        $tbl_matakuliah_vanes = $mymatakuliah->tampil_tbl_matakuliah_vanes();
        
        $data = array('tbl_matakuliah_vanes' => $tbl_matakuliah_vanes);
        return view('tbl_matakuliah_vanes/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('tbl_matakuliah_vanes/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('tbl_matakuliah_vanes')
         ->insert([
             'mkid'  =>  $request->mkid,
             'nama_mk'  =>  $request->nama_mk,
             'sks'  =>  $request->sks,
             'semester'  =>  $request->semester
             
         ]);
         return redirect('tbl_matakuliah_vanes');
     }
 
     public function edit($id){
         // return ('Testing');
         $tbl_matakuliah_vanes = \DB::table('tbl_matakuliah_vanes')->where('id', $id)->first();
         //dd($akun);
         $data = array('tbl_matakuliah_vanes' => $tbl_matakuliah_vanes);
         return view('tbl_matakuliah_vanes/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('tbl_matakuliah_vanes')->where('id',$request->id)
         ->update([
            'mkid'  =>  $request->mkid,
             'nama_mk'  =>  $request->nama_mk,
             'sks'  =>  $request->sks,
             'semester'  =>  $request->semester
            
         ]);
         return redirect('tbl_matakuliah_vanes');
     }
 
     public function delete ($id){
         $query = \DB::table('tbl_matakuliah_vanes')->where('id',$id)->delete();
         return redirect('tbl_matakuliah_vanes');
     }
 }
 

