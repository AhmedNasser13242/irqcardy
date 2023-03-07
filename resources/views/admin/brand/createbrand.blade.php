@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>اضف براند
                    <a href="{{url('admin/brands')}}" class="btn btn btn-sm float-end"
                        style="background-color: red; color:white;">العودة الي الوراء</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{url('admin/brands')}}" method="post">
                    @csrf
                    <div class="col-md-6 mb-3">
                        <label for="">أسم البراند</label>
                        <input type="text" name='name' class="form-control" />
                        @error('name') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">الأسم التعريفي</label>
                        <input type=" text" name='slug' class="form-control" />
                        @error('slug') <small class="text-danger">{{$message}}</small>@enderror

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">تعطيل البراند</label>
                        <input type="checkbox" name='status' />
                        @error('status') <small class="text-danger">{{$message}}</small>@enderror

                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">اضف
                            البراند</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
