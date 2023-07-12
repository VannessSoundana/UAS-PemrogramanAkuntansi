<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBarang extends Model
{
    use HasFactory;
    protected $table ="t_barang";
    protected $primaryKey ="id";

    public function tampil_barang(){
        $query = \DB::table('t_barang')->get();
        return $query;
    }
}
