<?php

namespace App\Http\Controllers\Admin;

use App\Models\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SizeFormRequest;

class SizeController extends Controller
{
    public function index(){
        $sizes = Size::all();
        return view('admin.sizes.index', compact('sizes'));
    }
    public function create(){
        return view('admin.sizes.create');
    }
    public function store(SizeFormRequest $request){
        $validateData = $request->validated();
        $validateData['status'] = $request->status == true ? '1' :'0';
        Size::create($validateData);
        return redirect('/admin/sizes')->with('message', 'size created');

    }
    public function edit(Size $size){
        return view('admin.sizes.edit', compact('size'));
    }
    public function update(SizeFormRequest $request, $size_id){

        $validateData = $request->validated();
        $validateData['status'] = $request->status == true ? '1' :'0';
        Size::find($size_id)->update($validateData);
        return redirect('admin/sizes')->with('message','color updated');
    }
    public function destroy($size_id){
        $size = Size::findOrFail($size_id);
        $size->delete();
        return redirect('admin/sizes')->with('message', 'color was deleted');
    }
}