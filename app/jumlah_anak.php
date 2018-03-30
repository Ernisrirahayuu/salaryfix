<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jumlah_anak extends Model
{
    protected $table = 'jumlah_anaks';
    protected $fillable = ['Kode_Jumlah', 'Nama_Jumlah', 'Besaran_Uang'];
    protected $visible = ['Kode_Jumlah', 'Nama_Jumlah', 'Besaran_Uang'];
    public $timestamps = true;

public function Tunjangan(){
        return $this->hasMany('App\Tunjangan', 'Kode_Jumlah');
    }
}
