<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class laporancontroller extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Welcome',
            'date' => date('m/d/y')
        ];
        $pdf = PDF::loadView('testPDF', $data);
        return $pdf->download('laporan.pdf');
    }
}
