<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tunjangan extends Model
{
    //
    protected $table = 'tunjangan';
    protected $fillable = ['Kode_Tunjangan','Kode_Pegawai','Kode_Jabatan','Kode_Golongan','Status','Jumlah Anak','Besaran_Uang'];
    protected $visible = ['Kode_Tunjangan','Kode_Pegawai','Kode_Jabatan','Kode_Golongan','Status','Jumlah Anak','Besaran_Uang'];
    public $timestamps = true;

    public function Pegawai(){
        return $this->belongsTo('App\Pegawai', 'Kode_Pegawai');
    }
     public function Jabatan(){
    	return $this->belongsTo('App\Jabatan', 'Kode_Jabatan');
    }
    public function Golongan(){
    	return $this->belongsTo('App\Golongan', 'Kode_Golongan');
    }
     public function penggajian(){
        return $this->hasMany('App\Penggajian','Kode_Tunjangan');
    }
}
