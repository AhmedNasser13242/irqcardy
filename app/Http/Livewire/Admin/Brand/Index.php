<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap' ;
    public $brand_id;
    public function storeBrand(){
        $validateData = $this->validate();
        Brand::create([
            'name'=> $this->name,
            'slug'=> Str::slug($this->slug),
            'status'=> $this->status,
        ]);
        session()->setFlash('message','success');
    }


    public function deleteBrand($brand_id)
    {
        $this->brand_id = $brand_id;
        $brand = Brand::find($this->brand_id);

        if ($brand != null) {
            $brand->delete();
            return redirect('/admin/brands')->with(['message'=> 'Successfully deleted!!']);
        }
        return redirect()->route('dashboard')->with(['message'=> 'Wrong ID!!']);

    }

    public function render()
    {
        $brands = Brand::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.brand.index',['brands'=> $brands]);
    }
}