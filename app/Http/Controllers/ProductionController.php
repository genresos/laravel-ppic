<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Production;
use App\FinishGood;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductionExport;

class ProductionController extends Controller
{
    public function index(Request $request)
    {

        if($request->has('search')){
            $production = Production::where('id',  'LIKE', '%'. $request->search .'%')->paginate(4);
            return view('production.index', compact('production'));
        }
        $production = Production::paginate(10);
        return view('production.index', compact('production'));
    }
    public function create()
    {
        $finishgood = \App\FinishGood::select(['part_no','id'])->get();
        return view('production.create', compact ('finishgood'));
        
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'part_no'   =>  'required|string|max:255|min:0',
            'jumlah'    =>  'nullable|numeric|digits_between:0,10',
            'karyawan'   =>  'required|string|max:255|min:0',
        ]);
        $finish = FinishGood::where('part_no', $request->part_no)->first();
        if($finish){
            $hasil = $finish->stock + $request->jumlah;

            $finish->update([
                'stock' => $hasil
            ]);
        }
        Production::create($request->all());
        return redirect()->route('production-index');
    }
    public function item(Request $request)
    {
        
       $finish = \App\FinishGood::select(['part_no','id','stock'])->get();
        return response()->json($finish);
    }
    public function export() 
    {
        return Excel::download(new ProductionExport, 'Data IN-reports.xlsx');
    }
    
 }

