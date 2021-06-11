<?php

namespace App\Exports;

use App\PurchaseOrder;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PurchaseOrderExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $actual_start_date;
    protected $actual_end_date;

    function __construct($actual_start_date, $actual_end_date) {
            $this->actual_start_date = $actual_start_date;
            $this->actual_end_date = $actual_end_date;
    }

    public function collection()
    {
        return PurchaseOrder::whereBetween('created_at', array($this->actual_start_date, $this->actual_end_date))->get();
    }

    public function headings(): array
    {
        $heading = [
            'Id',
            'Kode Order',
            'Jenis Order',
            'Item',
            'Customer',
            'Jumlah',
            'Terkirim',
            'Status',
            'Tanggal',
        ];

        return $heading;
    }
}