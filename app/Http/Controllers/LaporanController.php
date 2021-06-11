<?php

namespace App\Http\Controllers;
use App\Laporan;
use App\Exports\PurchaseOrderExport;
use App\Exports\ProductionExport;
use App\Exports\DeliveryExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class LaporanController extends Controller
{
    public function index()
    {
    
        return view('laporan.create') ;
    }
    public function cetak(Request $request)
    {

        $request['actual_end_date'] =  \Carbon\Carbon::parse($request->actual_end_date)->addDays(+1);

        //belom clear, wait
        if($request->jenis_laporan == '1'){
            return Excel::download(new PurchaseOrderExport($request->actual_start_date, $request->actual_end_date), 'Purchase Order.xlsx');
        }else if($request->jenis_laporan == '2'){
            return Excel::download(new ProductionExport($request->actual_start_date, $request->actual_end_date), 'Data in Finishgood.xlsx');
        }else if($request->jenis_laporan == '3'){
            return Excel::download(new DeliveryExport($request->actual_start_date, $request->actual_end_date), 'Delivery.xlsx');
        }
    }
}

