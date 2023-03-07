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
                    <h3> سلايدر
                        <a href="{{url('admin/sliders/create')}}" class="btn  btn-sm float-end"
                            style="background-color: black; color:white;">اضف
                            سلايدر</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>العنوان</th>
                                <th>الصورة</th>
                                <th>الحالة</th>
                                <th>اجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)

                            <tr>
                                <td>{{$slider->id}}</td>
                                <td>{{$slider->title}}</td>
                                <td>{{$slider->description}}</td>
                                <td>
                                    <img src="{{ asset("$slider->image") }}" alt="{{$slider->title}}" style="width:70px; height:70px;" ">
                                </td>
                                <td>{{$slider->status == '1' ? 'hidden' : 'visible'}}</td>
                                <td>
                                    <a href="{{url('admin/sliders/'.$slider->id.'/edit')}}" class="btn"
                                        style="color: white;background-color:gray;">تعديل</a>
                                        <a href="{{url('admin/sliders/'.$slider->id.'/delete')}}" class="btn btn-danger" onclick="return confirm('Are You Sure You Want to delete this product ?')" style="color: white;">ازالة</a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
