@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product carad</title>
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
</head>
<body>
    <div class="container">

        <div class="header">
            <h1>بطاقات</h1>
        </div>

        <div class="products">
            @forelse ($products as $productItem)

            <div class="product">
                <div class="image">
                    <img src="{{ asset($productItem->productImages[0]->image) }}" alt="">
                </div>
                <div class="namePrice">
                    <h3>{{ $productItem->name }}</h3>
                    <span>${{ $productItem->selling_price }}</span>
                </div>
                <p>{{ $productItem->description }}</p>
                <div class="stars">
                </div>
                <div class="bay">
                    <button> <a href="https://wa.me/01063265173"> اطلب الأن </a></button>
                </div>
            </div>

            @empty
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="">No Products in {{ $category->name }}</a>
                        </h5>
                    </div>
                </div>
            </div>
            </div>
            @endforelse
        </div>
    </div>

    <script src="js/all.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
@endsection


