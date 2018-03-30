<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    //
    protected $table = 'Penggajian';
    protected $fillable = ['Kode_Tunjangan', 'Jumlah_jam_lembur', 'Jumlah_uang_lembur', 'Gaji_pokok', 'Total_gaji', 'Tanggal_pengambilan'];
    public $timestamps = true;

    public function tunjangan(){
    	return $this->belongsTo('App\Tunjangan', 'Kode_Tunjangan');
    }
}
