<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;

class PDFdtrController extends Controller
{
    public function getDTR()
    {
        $pdf=PDF::loadView('pdf.dtr');
        return $pdf->stream('dtr.pdf');
    }
}
