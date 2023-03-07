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
                    <h3> الألوان
                        <a href="{{url('admin/sizes/create')}}" class="btn  btn-sm float-end"
                            style="background-color: black; color:white;">اضف
                            لون</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>الأسم</th>
                                <th>الكود</th>
                                <th>الحالة</th>
                                <th>اجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sizes as $item)

                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->code}}</td>
                                <td>{{$item->status == '1' ? 'hidden' : 'visible'}}</td>
                                <td>
                                    <a href="{{url('admin/sizes/'.$item->id.'/edit')}}" class="btn"
                                        style="color: white;background-color:gray;">تعديل</a>
                                        <a href="{{url('admin/sizes/'.$item->id.'/delete')}}" class="btn btn-danger" onclick="return confirm('Are You Sure You Want to delete this product ?')" style="color: white;">ازالة</a>
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
