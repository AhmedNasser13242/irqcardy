@extends('layouts.app')

@section('content')
<div class="py-3 py-md-5 bg-light">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="mb-4">Categories</h4>
        </div>
        @foreach ($categories as $categoryItem)
        <div class="col-6 col-md-3">
            <div class="category-card">
                <a href="{{ url("/collections/".$categoryItem->slug) }}">
                    <div class="category-card-img">
                        <img src="{{ $categoryItem->image }}" alt="" class="w-100">
                    </div>
                    <div class="category-card-body">
                        <h5>{{ $categoryItem->name }}</h5>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection


