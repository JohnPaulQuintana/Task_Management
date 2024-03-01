<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    //generate pdf
    public function generatePDF(){

        $data = ["name"=>"dwadwad"];
        $pdf = Pdf::loadView('pdf-templates.pdf', $data)->setPaper('a4', 'portrait');
        return $pdf->download('template-pdf.pdf');
    }
}
