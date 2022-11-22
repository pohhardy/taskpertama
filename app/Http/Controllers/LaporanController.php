<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\replacement;
use PDF;


class LaporanController extends Controller
{
    //
    public function index(){
        $rep = replacement::all();
        return view('laporan/replacement', ['replacement_class'=>$rep]);
    }

    public function cetak_pdf(){
        $rep = replacement::all();
        $pdf = PDF::loadview('laporan/replacementpdf', ['replacement_class'=>$rep]);

        return $pdf->download('laporan-replacement-class.pdf');
    }

}
