@extends('layouts.admin')
@section('content')
<div>
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3> Products
                        <a href="{{url('admin/products/create')}}" class="btn  btn-sm float-end"
                            style="background-color: black; color:white;">اضف
                            منتج</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>خانة</th>
                                <th>منتج</th>
                                <th>سعر</th>
                                <th>كمية</th>
                                <th>حالة</th>
                                <th>اجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>
                                    @if ($product->category)
                                    {{$product->category->name}}
                                    @else
                                    no category
                                    @endif
                                </td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->selling_price}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->status == '1' ? 'مخفي' : 'ظاهر'}}</td>
                                <td>
                                    <a href="{{url('admin/products/'.$product->id.'/edit')}}" class="btn"
                                        style="color: white;background-color:gray;">تعديل</a>
                                    <a href="{{url('admin/products/'.$product->id.'/delete')}}" wire:click="deleteCategory({{$product->id}})" wire:ignore.self
                                        class="btn btn-danger" onclick="return confirm('Are You Sure You Want to delete this product ?')" style="color: white;">ازالة</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">No products to show</td>
                            </tr>
                                @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
