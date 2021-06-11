<?php

namespace App\Exports;

use App\Delivery;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DeliveryExport implements FromCollection, WithHeadings
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
        return Delivery::whereBetween('created_at', array($this->actual_start_date, $this->actual_end_date))->get();
    }

    public function headings(): array
    {
        $heading = [
            'Id',
            'Kode Order',
            'Jumlah',
            'Driver',
            'Tanggal',
        ];

        return $heading;
    }
}