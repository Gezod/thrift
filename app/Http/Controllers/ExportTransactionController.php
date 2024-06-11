<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelDetailTransaksi;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TransactionsExport;
use PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class ExportTransactionController extends Controller
{
    // Ekspor Excel
    public function exportExcel()
    {
        return Excel::download(new TransactionsExport, 'transactions.xlsx');
    }

    // Ekspor PDF
    public function exportPDF()
    {
        $data = modelDetailTransaksi::all();
        $pdf = FacadePdf::loadView('exports.transactions', compact('data'));
        return $pdf->download('transactions.pdf');
    }
}
