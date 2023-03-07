@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Add Brand
                    <a href="{{url('admin/colors')}}" class="btn btn btn-sm float-end"
                        style="background-color: red; color:white;">العودة الي الوراء</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{url('admin/colors/'.$color->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="col-md-6 mb-3">
                        <label for="">Color Name</label>
                        <input type="text" value="{{$color->name}}" name='name' class="form-control" />
                        @error('name') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Color Code</label>
                        <input type=" text" value="{{$color->code}}" name='code' class="form-control" />

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" {{$color->status ?'checked' : ''}} name='status' />
                        @error('status') <small class="text-danger">{{$message}}</small>@enderror

                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">اضف
                            اللون</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
