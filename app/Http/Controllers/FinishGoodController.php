<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Finishgood;
use App\Exports\FinishGoodExport;
use Maatwebsite\Excel\Facades\Excel;

class FinishGoodController extends Controller
{
    public function index(Request $request)
    {

        if($request->has('search')){
            $finish = Finishgood::where('part_no',  'LIKE', '%'. $request->search .'%')->paginate(4);
            return view('finish-good.index', compact('finish'));
        }
        $finish = Finishgood::paginate(10);
        return view('finish-good.index', compact('finish'));
    }
    public function create()
    {
            return view('finish-good.create') ;
    }

    public function edit($id)
    {
        $finish = Finishgood::where('id', $id)->first();

        if($id){
            return view('finish-good.edit', compact('finish'));
        }
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'part_no'   =>  'required|string|max:255|min:0',
            'job_no'    =>  'required|string|max:255',
            'm_need'    =>  'nullable|numeric|digits_between:0,10',
            'd_need'    =>  'nullable|numeric|digits_between:0,10',
            'stock'    =>  'nullable|numeric|digits_between:0,10',
        ]);
        Finishgood::create($request->all());
        return redirect()->route('finish-good-index');
    }
    public function delete($finish)
    {
        Finishgood::where('id', $finish)->delete();
        return redirect()->route('finish-good-index');

    }
    public function update(Request $request, $id)
    {
        $finish = Finishgood::where('id', $id)->first();

        if($finish)
        {
            $finish->update($request->only('part_no', 'job_no', 'm_need', 'd_need'));

            return redirect()->route('finish-good-index');
        }
        abort(403);
    }
    public function export() 
    {
        return Excel::download(new FinishGoodExport, 'FG.xlsx');
    }
    
}
