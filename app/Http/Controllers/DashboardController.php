<?php

namespace App\Http\Controllers;
use App\PurchaseOrder;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        
        $request =  \App\PurchaseOrder::all();
        $mat = [];
        $fin = [];
        $stokchart = [];
        $waktu = [];
        
            foreach($request as $jenis){
                $mat[] = $jenis->type_order='materials';
                $fin[] = $jenis->type_order='finish_goods';
                $stockchart[] = $jenis->stock_id;
                $waktu[] = $jenis->created_at;

            }
            return view('dashboard.index',['Material' => $mat,'Finishgood' => $fin,'stockchart' => $stockchart]);

    }
}
