<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tunjangan;
use App\Pegawai;
use App\Golongan;
use App\Jabatan;
use App\status;
use App\jumlah_anak;
use Input;
use DB;
use Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class TunjanganController extends Controller
{
     public function __construct()
    {
        $this->middleware('Admin');
    }
    public function index()
    {
        //
        $Pegawai = Pegawai::all();
        $Jabatan = Jabatan::all();
        $Golongan = Golongan::all();
        $Tunjangan = Tunjangan::all();
        $Status = status::all();
        $Jumlah =jumlah_anak::all();
        return view('Tunjangan.index', compact('Pegawai','Jabatan', 'Golongan', 'Tunjangan','status','jumlah_anak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this -> validate($request, [
        //     'Kode_Tunjangan' => 'unique:Penggajian',
        //     ]);

        $Pegawai = Pegawai::all();
        $Jabatan = Jabatan::all();
        $Golongan = Golongan::all();
        $Status = status::all();
        $Jumlah =jumlah_anak::all();
        return view('Tunjangan.create',compact('Pegawai','Golongan','Jabatan','status','jumlah_anak'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $tunjangan = new Tunjangan;
         $tunjangan->Kode_Tunjangan = $request->Kode_Tunjangan;
         $tunjangan->Kode_Pegawai = $request->Kode_Pegawai;
         $tunjangan->Kode_Jabatan = $request->Kode_Jabatan;
         $tunjangan->Kode_Golongan = $request->Kode_Golongan;
         $status= status::find($request->Nama_Status);
         $tunjangan->Status =$status->Nama_Status;
         $jumlah= jumlah_anak::find($request->jumlah_anak);
         $tunjangan->Jumlah_Anak =$jumlah->Jumlah_Anak;
         $tunjangan->Besaran_Uang = $status->Besaran_Uang + $jumlah->Besaran_Uang;
         $tunjangan->save();
        return redirect('Tunjangan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Tunjangan=Tunjangan::findOrFail($id);
        $Pegawai = Pegawai::all();
        $Jabatan = Jabatan::all();
        $Golongan = Golongan::all();
        $Status = status::all();
        $Jumlah =jumlah_anak::all();
        return view('Tunjangan.edit',compact('Tunjangan','Pegawai','Golongan','Jabatan','status','jumlah_anak'));
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $tunjangan =Tunjangan::find($id);
         $tunjangan->Kode_Tunjangan = $request->Kode_Tunjangan;
         $tunjangan->Kode_Pegawai = $request->Kode_Pegawai;
         $tunjangan->Kode_Jabatan = $request->Kode_Jabatan;
         $tunjangan->Kode_Golongan = $request->Kode_Golongan;
         $status= status::find($request->Nama_Status);
         $tunjangan->Status =$status->Nama_Status;
         $jumlah= jumlah_anak::find($request->jumlah_anak);
         $tunjangan->Jumlah_Anak =$jumlah->Jumlah_Anak;
         $tunjangan->Besaran_Uang = $status->Besaran_Uang + $jumlah->Besaran_Uang;
         $tunjangan->save();
        return redirect('Tunjangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         Tunjangan::find($id)->delete();
        return redirect('Tunjangan');
    }
}
