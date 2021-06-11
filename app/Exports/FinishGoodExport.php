<?php

namespace App\Exports;

use App\FinishGood;
use Maatwebsite\Excel\Concerns\FromCollection;

class FinishGoodExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FinishGood::all();
    }
}
