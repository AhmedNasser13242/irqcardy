@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Category
                    <a href="{{url('admin/category')}}" class="btn btn btn-sm float-end"
                        style="background-color: red; color:white;">العودة الي الوراء</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{url('admin/category/'.$category->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" name='name' value="{{$category->name}}" class="form-control" />
                        @error('name') <small class="'text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type=" text" name='slug' value="{{$category->slug}}" class="form-control" />
                        @error('slug') <small class="'text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Description</label>
                        <input name='description' value="{{$category->description}}" class="form-control" />
                        @error('description') <small class="'text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Image</label>
                        <input type="file" name='image' class="form-control" />
                        <img src="{{asset('uploads/category/'.$category->image)}}" width="60px" height="60px" alt="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" {{$category->status == '1' ? 'checked':''}} name='status' />
                        @error('name') <small class="'text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <h2 hidden>SEO TAGS</h2>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="" hidden>Meta title</label>
                        <input type=" text" name='meta_title' value="{{$category->meta_title}}" class="form-control" hidden/>
                        @error('meta_title') <small class="'text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="" hidden>Meta Keyword</label>
                        <input name='meta_keyword' value="{{$category->meta_keyword}}" class="form-control" hidden />
                        @error('meta_keyword') <small class="'text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="" hidden>Meta Description</label>
                        <input name='meta_description' value="{{$category->meta_description}}" class="form-control" hidden/>
                        @error('meta_description') <small class="'text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">تعديل</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
