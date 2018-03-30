<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jumlah_anak;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class JumlahAnakController extends Controller
{   
     public function __construct()
    {
        $this->middleware('Admin');
    }
    public function index()
    {
        //
         $jumlah =jumlah_anak::all();
        return view('Jumlah.index',compact('jumlah'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Jumlah.create');
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
          $this -> validate($request, [
            'Kode_Jumlah' => 'required|numeric|min:3',
            ]);

        $jm = new jumlah_anak;
        $jm->Kode_Jumlah = $request->get('Kode_Jumlah');
        $jm->Jumlah_Anak = $request->get('Jumlah_Anak');
        $jm->Besaran_Uang = $request->get('Besaran_Uang');
        $jm->save();
        return redirect('Jumlah');
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
        $jumlah=jumlah_anak::find($id);
        return view('Jumlah.edit',compact('jumlah'));
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

        $jumlah = Jumlah_Anak::find($id);

        $this -> validate($request, [
            'Kode_Jumlah' => 'required|min:3',
            ]);
        $jumlah->Kode_Jumlah = $request->get('Kode_Jumlah');
        $jumlah->jumlah_anak = $request->get('Jumlah_Anak');
        $jumlah->Besaran_Uang = $request->get('Besaran_Uang');

        $jumlah->save();
        return redirect('Jumlah'); 
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
         jumlah_anak::find($id)->delete();
        return redirect('Jumlah');
    }

}
