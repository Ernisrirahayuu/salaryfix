<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penggajian;
use App\Tunjangan;
use App\Pegawai;
use Auth;
use DB;
use Hash;
use JWTAuth;

class ApiController extends Controller
{
    public function listdata(){
        $ha = DB::table('penggajian')->join('tunjangan','tunjangan.id','=','penggajian.Kode_Tunjangan')
        ->join('pegawai','pegawai.id','=','tunjangan.Kode_Pegawai')
        ->join('users','users.id','=','pegawai.user_id')
        ->select('penggajian.*','users.name','tunjangan.besaran_uang')->get();
        return $ha;
}

}
