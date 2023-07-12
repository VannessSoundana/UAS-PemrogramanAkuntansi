<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBarang extends Controller
{
    public function index(){
        $mybarang = new ModelBarang();
        $barang = $mybarang->tampil_akuntansitransaksi();
        
        $data = array('barang' => $akuntansitransaksi);
        return view('barang/index', $data);
    }
}
