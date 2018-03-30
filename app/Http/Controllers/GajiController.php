<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penggajian;
use App\Tunjangan;
use App\Pegawai;
use App\Jabatan;
use App\Golongan;
use App\User;
use App\Kategori_Lembur;
use App\Lembur_Pegawai;
use DB;
use Auth;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function index()
    {
        //
        $user = User::where('name', Auth::user()->name)->first();
        // dd($user);
        $pegawai = Pegawai::where('user_id', $user->id)->first();
        // dd($pegawai);
        $tunjangan = Tunjangan::where('Kode_Pegawai', $pegawai->id)->first();
        // dd($tunjangan);
        $penggajian = Penggajian::where('Kode_Tunjangan', $tunjangan->id)->first();
        // dd($penggajian);

        // $gaji = $penggajian->Total_gaji;
        // dd($gaji);
        return view('Penggajian.gaji', compact('penggajian', 'tunjangan', 'gaji', 'pegawai', 'user'));
        // return redirect('/gapeg');
    }
}

