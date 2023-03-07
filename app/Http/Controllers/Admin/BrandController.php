<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandFormRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index(){
        return view('admin.brand.index');
    }

    public function create(){
        return view('admin.brand.createbrand');
    }

    public function store(BrandFormRequest $request){
        $validateData = $request->validated();

        $brand = new Brand;
        $brand->name = $validateData['name'];
        $brand->slug = Str::slug($validateData['slug']);
        $brand->status = $request->status == true ? '1' : '0';

        $brand->save();
            return redirect('admin/brands')->with('message','brand uploaded');
        
    }
    public function edit(Brand $brand){
        return view('admin.brand.edit',compact('brand'));
    }
    public function update(BrandFormRequest $request, $brand){
        $validateData = $request->validated();
        $brand = Brand::findOrFail($brand);
        $brand->name = $validateData['name'];
        $brand->slug = Str::slug($validateData['slug']);
        $brand->status = $request->status == true ? '1' : '0';

        $brand->update();
            return redirect('admin/brands')->with('message','brand Updated');
    }
}