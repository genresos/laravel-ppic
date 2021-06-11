<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class MaterialController extends Controller
{
    public function index(Request $request)
    {

        if($request->has('search')){
            $material = Material::where('part_no',  'LIKE', '%'. $request->search .'%')->paginate(4);
            return view('material.index', compact('material'));
        }
        $material = Material::paginate(10);
        return view('material.index', compact('material'));
    }
    public function create()
    {
            return view('material.create') ;
    }

    public function edit($id)
    {
        $material = Material::where('id', $id)->first();

        if($id){
            return view('material.edit', compact('material'));
        }
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'job'   =>  'required|string|max:255|min:0',
            'part_no'   =>  'required|string|max:255|min:0',
            'job_no'    =>  'required|string|max:255|min:0',
            'model'    =>  'required|string|max:255|min:0',
            'spec'    =>  'required|string|max:255|min:0',
            'stock'    =>  'nullable|numeric|digits_between:0,10',
        ]);
        Material::create($request->all());
        return redirect()->route('material-index');
    }
    public function delete($material)
    {
        Material::where('id', $material)->delete();
        return redirect()->route('material-index');

    }
    public function update(Request $request, $id)
    {
        $material = Material::where('id', $id)->first();

        if($material)
        {
            $material->update($request->only('stock'));

            return redirect()->route('material-index');
        }
        abort(403);
    }
}
