<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery;
use App\PurchaseOrder;
use App\Exports\DeliveryExport;
use Maatwebsite\Excel\Facades\Excel;

class DeliveryController extends Controller
{
    public function index(Request $request)
    {

        if($request->has('search')){
            $delivery = Delivery::where('kode_order',  'LIKE', '%'. $request->search .'%')->paginate(4);
            return view('delivery.index', compact('delivery'));
        }
        $delivery = Delivery::paginate(10);
        return view('delivery.index', compact('delivery'));
    }
    public function create()
    {
        $purchase = \App\PurchaseOrder::select(['kode_order','id'])->get();
        return view('delivery.create',compact ('purchase'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'kode_order'   =>  'required|string|max:255|min:0',
            'terkirim_id'    =>  'nullable|numeric|digits_between:0,8',
            'driver'    =>  'required|string|max:255|min:0',
        ]);
        $purchase = PurchaseOrder::where('kode_order', $request->kode_order)->first();
        if($purchase){
            $hasil = $purchase->terkirim + $request->terkirim_id;

            $purchase->update([
                'terkirim' => $hasil
            ]);
        }else if($purchase == $request->terkirim_id){
            $hasil = 'Selesai';

            $purchase->update([
                'status' => $hasil
            ]);
        }
      
        Delivery::create($request->all());
        return redirect()->route('delivery-index');
    }
    public function item(Request $request)
    {
        
       $purchase = \App\PurchaseOrder::select(['kode_order','id','terkirim','stock_id','status','customer'])->get();
        return response()->json($purchase);
    }
    public function export() 
    {
        return Excel::download(new DeliveryExport, 'Delivery-reports.xlsx');
    }
}
