@extends('layouts.admin')
@section('content')
<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add Products
                        <a href="{{url('admin/products')}}" class="btn  btn-sm float-end"
                            style="background-color: black; color:white;">
                            الي الوراء</a>
                    </h3>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-warning">
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                    @endif
                    <form action="{{url('admin/products')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                            <li class="nav-item role="presentation">

                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item role="presentation">

                                <button class="nav-link" id="seotag-tab" data-bs-toggle="tab" data-bs-target="#seotag"
                                    type="button" role="tab" aria-controls="seotag" aria-selected="false">SEO
                                    tags</button>
                            </li>

                            <li class="nav-item role="presentation">

                                <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details"
                                    type="button" role="tab" aria-controls="details"
                                    aria-selected="false">Details</button>
                            </li>

                            <li class="nav-item role="presentation">

                                <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#image"
                                    type="button" role="tab" aria-controls="image"
                                    aria-selected="false">Product Images</button>
                            </li>
                            <li class="nav-item role="presentation">

                                <button class="nav-link" id="color-tab" data-bs-toggle="tab" data-bs-target="#color"
                                    type="button" role="tab" aria-controls="color"
                                    aria-selected="false">Product color</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="mb-3">
                                <label for="">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Product Name</label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Product Slug</label>
                                <input type="text" name="slug" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Seclect Brand</label>
                                <select name="brand" id="" class="form-control">
                                    @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Small Description (500 words)</label>
                                <input type="text" name="small_description" class="form-control" rows="4" />
                            </div>
                            <div class="mb-3">
                                <label for="">Description</label>
                                <input type="text" name="description" class="form-control" rows="4" />
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seotag" role="tabpanel" aria-labelledby="seotag-tab">
                            <div class="mb-3">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Meta Description</label>
                                <input name="meta_description" class="form-control" rows="4" />
                            </div>
                            <div class="mb-3">
                                <label for="">Meta Keyword</label>
                                <input name="meta_keyword" class="form-control" rows="4" />
                            </div>
                        </div>
                        <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">original Price</label>
                                        <input type="text" name="original_price" class="form-control" rows="4" />

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Selling Price</label>
                                        <input type="text" name="selling_price" class="form-control" rows="4" />

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Quantity</label>
                                        <input type="number" name="quantity" class="form-control" rows="4" />

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Trending</label>
                                        <input type="checkbox" name="trending" rows="4"
                                            style="width:50px; height: 50px;" />

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status"
                                            style="width:50px; height: 50px;" />

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="image" role="tabpanel" aria-labelledby="image-tab">
                            <div class="mb-3">
                                <label for="">Upload Product Images</label>
                                <input type="file" name="image[]" multiple class="form-control"/>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="color" role="tabpanel" aria-labelledby="color-tab">
                            <div class="mb-3">
                                <hr/>
                                <label for=""> select color</label>
                                <hr/>
                                <div class="row">
                                    @forelse ($colors as $coloritem)
                                    <div class="col-md-3">
                                        <div class="p-2 border mb-3">
                                            Color :<input type="checkbox" name="colors[{{$coloritem->id}}]" value="{{$coloritem->id}}"/>{{$coloritem->name}}
                                            <br/>
                                            Quantity : <input type="number" name="colorquantity[{{$coloritem->id}}]" style="width: 70px ;border: 1px solid;">
                                        </div>
                                    </div>
                                        @empty
                                        <div class="col-md-12">
                                            <h1>No colors Found</h1>
                                        </div>
                                        @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
