<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\pdf;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PdfController extends Controller
{
    //
    public function index(): View
    {


        return view('welcome');

    }

    public function download()
    {
        // creo el pdf, e indicamos por parametro el nombre de la vista a converitr en pdf
       // $newPdf = Pdf::loadView('pdf.example');
        //$newPdf01=Pdf::setPaper('a5','landscape')->loadView('pdf.example');
        $unaData="juan cruz";
        $newPdf = Pdf::loadView('pdf.example',['data'=>$unaData]);
        //$newPdf02=Pdf::setOption(['defaultPaperSize'=>'letter','dpi'=>150,'default_font'=>95])->loadView('pdf.example','data');
        //crep un pdf con formato a4 y orientacion apaisada


        //guardar pdf. REVISAR
       // $newPdf02->save('/my-file.pdf',);
        //return
        return $newPdf->download('otroPdfNuevo.pdf');


    }
}
