<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use PDF;

class ExportController extends Controller
{
    // Ekspor Excel
    public function exportExcel()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }

    // Ekspor PDF
    public function exportPDF()
    {
        $data = Product::all();
        $pdf = FacadePdf::loadView('exports.products', compact('data'));
        return $pdf->download('products.pdf');
    }
}

