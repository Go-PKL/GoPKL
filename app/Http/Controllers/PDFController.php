<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use App\Models\Pembimbing;
use App\Models\Penerimaan;
use App\Models\Permohonan;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function permohonan(Request $request)
    {
        $permohonans = Permohonan::all();
        $pdf = PDF::loadView('pages.pdf.permohonan_pdf', compact('permohonans'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('permohonan.pdf');
    }

    public function pembimbing(Request $request)
    {
        $pembimbings = Pembimbing::all();
        $permohonans = Permohonan::all();
        $penerimaans = Penerimaan::all();
        // $siswa = $pembimbings->where('permohonan_id');
        $pdf = PDF::loadView('pages.pdf.pembimbing_pdf', compact('pembimbings', 'permohonans', 'penerimaans'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('pembimbing.pdf');
    }
}
