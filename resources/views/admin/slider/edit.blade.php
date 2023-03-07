@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Add Brand
                    <a href="{{url('admin/sliders/'.$slider->id)}}" class="btn btn btn-sm float-end"
                        style="background-color: red; color:white;">العودة الي الوراء</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{url('admin/sliders/'.$slider->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6 mb-3">
                        <label for="">Title</label>
                        <input type="text" name='title' value="{{ $slider->title }}" class="form-control" />
                        @error('name') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">description</label>
                        <input type=" text" name='description' value="{{ $slider->title }}" class="form-control" />

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">image</label>
                        <input type="file" name='image' class="form-control" />
                        <img src="{{ asset("$slider->image") }}" alt="" style=" width:70px; height:70px;">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name='status' {{ $slider->status == '1' ? 'checked' : '' }}/>
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
