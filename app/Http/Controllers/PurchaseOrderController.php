<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\PurchaseOrder;
use App\Material;
use App\FinishGood;
use App\Exports\PurchaseOrderExport;
use Maatwebsite\Excel\Facades\Excel;


class PurchaseOrderController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $purchase = PurchaseOrder::where('kode_order',  'LIKE', '%'. $request->search .'%')->paginate(5);
            return view('purchaseorder.index', compact('purchase'));
        }
        $purchase = PurchaseOrder::paginate(10);
        return view('purchaseorder.index', compact('purchase'));
    }

    public function item(Request $request)
    {
        if($request->has('type_order'))
        {
            if($request->type_order === 'materials'){
                $data =  \App\Material::select(['part_no','id', 'stock'])->get();
                return response()->json($data);
            }else{
                $data = \App\FinishGood::select(['part_no', 'id','stock'])->get();
                return response()->json($data);}
        }

        return response()->json(null);

    }

    public function create()
    {
       $lastId =  PurchaseOrder::latest()->first()->id+1;

       if($lastId < 10){
        $kode_order = 'PO00'.$lastId; 
       }else if($lastId < 100){
       $kode_order = 'PO0'.$lastId;
        }else{
            $kode_order = 'PO'.$lastId;
        }
    
        return view('purchaseorder.create', compact('kode_order')) ;
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'kode_order'   =>  'required|string|max:255|min:0',
            'type_order'    =>  'required|string|max:255|min:0',
            'type_order_id'    =>  'required|string|max:255|min:0',
            'customer'    =>  'required|string|max:255|min:0',
            'stock_id'    =>  'nullable|numeric|digits_between:0,10',
            'terkirim'    =>  'nullable|numeric|digits_between:0,10',
            'status'    =>  'required|string|max:255|min:0',
        ]
        );
        if($request->type_order == 'finish_goods'){
            $finish = FinishGood::where('part_no', $request->type_order_id)->first();

            if($finish){
                $hasil = $finish->stock - $request->stock_id;

                $finish->update([
                    'stock' => $hasil
                ]);
            }
        }else if($request->type_order == 'materials'){
            $material = Material::where('part_no', $request->type_order_id)->first();

            if ($material){
                $hasil = $material->stock - $request->stock_id;

                $material->update([
                    'stock' => $hasil
                ]);
            }
        }
        PurchaseOrder::create($request->all());
        return redirect()->route('purchaseorder-index');
    }
    public function edit($id)
    {
        $purchase = PurchaseOrder::where('id', $id)->first();

        if($id){
            return view('purchaseorder.edit', compact('purchase'));
        }
    }
    public function delete($purchase)
    {
        PurchaseOrder::where('id', $purchase)->delete();
        return redirect()->route('purchaseorder-index');

    }
    public function export() 
    {
        return Excel::download(new PurchaseOrderExport, 'PurchaseOrder-reports.xlsx');
    }
    public function update(Request $request, $id)
    {
        $purchase = PurchaseOrder::where('id', $id)->first();

        if($purchase)
        {
            $purchase->update($request->only('status'));

            return redirect()->route('purchaseorder-index');
        }
        abort(403);
    }
    // public function cek(Request $request)
    // {
    //     $request =  \App\PurchaseOrder::all();
    //     $jml = [];
    //     $tkr = [];
    //     $stat = [];
    //     $sa = 'Selesai';
    //     foreach($request as $jenis){
    //         $jml[] = $jenis->stock_id;
    //         $tkr[] = $jenis->terkirim;
    //         $stat[] = $jenis->status;

    //     }
    //     if($jml == $tkr){
    //         $stat->update([
    //             'status' => $sa
    //         ]);
    //     }
    //     return view('purchaseorder.index');
    // }
}