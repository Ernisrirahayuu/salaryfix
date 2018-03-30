<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penggajian;
use PDF;
class PDFController extends Controller
{
   public function pdf()
    {
    	$gajih = Penggajian::all();
    	$pdf = PDF::loadView('pdf', ['gajih' => $gajih]);
    	return $pdf -> download('gaji.pdf');
    } 
}
