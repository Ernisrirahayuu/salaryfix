<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class StatusController extends Controller
{
     public function __construct()
    {
        $this->middleware('Admin');
    }
    public function index()
    {
        //
         $status = status::all();
        return view('Status.index',compact('status'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Status.create');
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
            'Kode_Status' => 'required|min:3',
            ]);

        $st = new status;
        $st->Kode_Status = $request->get('Kode_Status');
        $st->Nama_Status = $request->get('Nama_Status');
        $st->Besaran_Uang = $request->get('Besaran_Uang');
        $st->save();
        return redirect('Status');
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
        $status=status::find($id);
        return view('Status.edit',compact('status'));
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

        $status = Status::find($id);

        $this -> validate($request, [
            'Kode_Status' => 'required|min:3',
            ]);
        $status->Kode_Status = $request->get('Kode_Status');
        $status->Nama_Status = $request->get('Nama_Status');
        $status->Besaran_Uang = $request->get('Besaran_Uang');

        $status->save();
        return redirect('Status'); 
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
         status::find($id)->delete();
        return redirect('Status');
    }

}
