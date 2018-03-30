<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $table = 'statuses';
    protected $fillable = ['Kode_Status', 'Nama_Status', 'Besaran_Uang'];
    protected $visible = ['Kode_Status', 'Nama_Status', 'Besaran_Uang'];
    public $timestamps = true;

public function Tunjangan(){
        return $this->hasMany('App\Tunjangan', 'Kode_Status');
    }
}
