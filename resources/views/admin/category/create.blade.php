@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>أضف تصنيف
                    <a href="{{url('admin/category')}}" class="btn btn btn-sm float-end"
                        style="background-color: red; color:white;">العودة الي الوراء</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{url('admin/category')}}" method="post">
                    @csrf
                    <div class="col-md-6 mb-3">
                        <label for="">الأسم</label>
                        <input type="text" name='name' placeholder="الأسم" class="form-control" />
                        @error('name') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">الأسم التعريفي</label>
                        <input type="text" name='slug' placeholder="الأسم التعريفي" class="form-control" />
                        @error('slug') <small class="text-danger">{{$message}}</small>@enderror

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">تعطيل التصنيف</label>
                        <input type="checkbox" name='status' />
                        @error('status') <small class="text-danger">{{$message}}</small>@enderror

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">عنوان</label>
                        <input type="text" name='description' placeholder="عنوان" class="form-control" />
                        @error('description') <small class="text-danger">{{$message}}</small>@enderror

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">اضف صور المنتج</label>
                        <input type="file" name='image' class="form-control" />
                        @error('image') <small class="text-danger">{{$message}}</small>@enderror

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" hidden>عنوان اضافي</label>
                        <input value="a" type="text" name='meta_title' placeholder="عنوان اضافي" class="form-control" hidden/>
                        @error('meta_title') <small class="text-danger">{{$message}}</small>@enderror

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" hidden>كلمات مفتاحية</label>
                        <input value="a" type="text" name='meta_keyword' placeholder="كالمات مفتاحية" class="form-control" hidden/>
                        @error('meta_keyword') <small class="text-danger">{{$message}}</small>@enderror

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" hidden>عنوان صغير</label>
                        <input value="a" type="text" name='meta_description' placeholder="عنوان صغير" class="form-control" hidden />
                        @error('meta_description') <small class="text-danger">{{$message}}</small>@enderror

                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">اضف
                            التصنيف</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
