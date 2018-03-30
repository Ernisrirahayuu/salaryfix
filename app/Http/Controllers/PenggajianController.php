<?php

namespace App\Http\Controllers;

use App\Tunjangan;
use App\Penggajian;
use App\Tunjangan_Pegawai;
use Illuminate\Http\Request;
use Input;
use App\Pegawai;
use App\Jabatan;
use App\Golongan;
use App\Kategori_Lembur;
use App\Lembur_Pegawai;
use Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PenggajianController extends Controller
{
     public function __construct()
    {
        $this->middleware('Admin');
    }
    public function index()
    {
        $tanggal=date('ym');
        $Penggajian = Penggajian::where('Tanggal_pengambilan',$tanggal)->paginate(100);
        return view('Penggajian.index',compact('Penggajian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        $Gaji = Tunjangan::paginate(100);
        return view('Penggajian.create',compact('Gaji')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'Kode_Tunjangan' => 'unique:Penggajian',
            ]);

       $i_Gaji=Input::all();
       $Tunjangan=Tunjangan::where('id',$i_Gaji['Kode_Tunjangan'])->first();
       $Penggajian=Penggajian::where('Kode_Tunjangan',$Tunjangan->id)->first();
       $Pegawai=Pegawai::where('id',$Tunjangan->Kode_Pegawai)->first();
       $Kategori_Lembur=Kategori_Lembur::where('Kode_Jabatan',$Pegawai->Kode_Jabatan)->where('Kode_Golongan',$Pegawai->Kode_Golongan)->first();
       $Lembur_Pegawai=Lembur_Pegawai::where('Kode_Pegawai',$Pegawai->id)->first();
       $Jabatan=Jabatan::where('id',$Pegawai->Kode_Jabatan)->first();
       $Golongan=Golongan::where('id',$Pegawai->Kode_Golongan)->first();

       $Gaji = new Penggajian ;

       if (isset($Penggajian)) {
           $error=true ;
           $Tunjangan=Tunjangan::paginate(10);
           return view('Penggajian.create',compact('Tunjangan','error'));
       }
       elseif (!isset($Lembur_Pegawai)) {
            $nol = 0;
            $Gaji->Jumlah_jam_lembur= $nol;
            $Gaji->Jumlah_uang_lembur = $nol;
            $Gaji->Gaji_pokok=$Jabatan->Besaran_Uang+$Golongan->Besaran_Uang;
            $Gaji->Total_gaji=($Tunjangan->Jumlah_Anak*$Tunjangan->Besaran_Uang)+($Jabatan->Besaran_Uang+$Golongan->Besaran_Uang);
            $Gaji->Tanggal_pengambilan = date('ym');
            $Gaji->Kode_Tunjangan = Input::get('Kode_Tunjangan');
            $Gaji->save();
        }
        elseif(!isset($Lembur_Pegawai) || !isset($Kategori_Lembur))
        {
            $nol = 0;
            $Gaji->Jumlah_jam_lembur= $nol;
            $Gaji->Jumlah_uang_lembur = $nol;
            $Gaji->Gaji_pokok=$Jabatan->Besaran_Uang+$Golongan->Besaran_Uang;
            $Gaji->Total_gaji = ($Tunjangan->Jumlah_Anak*$Tunjangan->Besaran_Uang)+($Jabatan->Besaran_Uang+$Golongan->Besaran_Uang);
            $Gaji->Tanggal_pengambilan = date('ym');
            $Gaji->Kode_Tunjangan = Input::get('Kode_Tunjangan');
            $Gaji->save();
        }
        else
        {
            $Gaji->Jumlah_jam_lembur=$Lembur_Pegawai->Jumlah_Jam;
            $Gaji->Jumlah_uang_lembur =($Lembur_Pegawai->Jumlah_Jam)*($Kategori_Lembur->Besaran_Uang);
            $Gaji->Gaji_pokok=$Jabatan->Besaran_Uang+$Golongan->Besaran_Uang;
            $Gaji->Total_gaji = ($Lembur_Pegawai->Jumlah_Jam*$Kategori_Lembur->Besaran_Uang)+($Tunjangan->Jumlah_Anak*$Tunjangan->Besaran_Uang)+($Jabatan->Besaran_Uang+$Golongan->Besaran_Uang);
            $Gaji->Tanggal_pengambilan = date('ym');
            $Gaji->Kode_Tunjangan = Input::get('Kode_Tunjangan');
            $Gaji->save();
        }

        return redirect('Penggajian');
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

        Penggajian::find($id)->delete();
        return redirect('Penggajian');
    }
}
