<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliahvanes_model extends Model
{
    use HasFactory;
    protected $table ="tbl_matakuliah_vanes";
    protected $primaryKey ="id";

    public function tampil_tbl_matakuliah_vanes(){
        $query = \DB::table('tbl_matakuliah_vanes')->get();
        return $query;
    }
}
