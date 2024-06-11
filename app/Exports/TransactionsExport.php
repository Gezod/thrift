<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;

namespace App\Exports;

use App\Models\modelDetailTransaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TransactionsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return modelDetailTransaksi::all();
    }

    public function headings(): array
    {
        return [
            'No',
            'Date',
            'Id Transaksi',
            'Nama',
            'Alamat',
            'Nilai Rp',
            'Status',
        ];
    }
}

