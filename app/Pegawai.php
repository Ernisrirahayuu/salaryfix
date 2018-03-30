<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
    protected $table = 'Pegawai';
    protected $fillable = ['Nip','user_id', 'Kode_Jabatan', 'Kode_Golongan'];
    protected $visible = ['Nip','user_id', 'Kode_Jabatan', 'Kode_Golongan'];
    public $timestamps = true;

    public function User(){
    	return $this->belongsTo('App\User', 'user_id');
    }
    public function Jabatan(){
    	return $this->belongsTo('App\Jabatan', 'Kode_Jabatan');
    }
    public function Golongan(){
    	return $this->belongsTo('App\Golongan', 'Kode_Golongan');
    }
    public function Lembur_Pegawai(){
        return $this->hasMany('App\Lembur_Pegawai', 'Kode_Pegawai');
    }
    public function Tunjangan(){
        return $this->hasOne('App\Tunjangan', 'Kode_Pegawai');
    }
}
