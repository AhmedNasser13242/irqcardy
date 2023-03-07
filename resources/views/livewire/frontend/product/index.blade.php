<div>
    <div class="row">
        @forelse ($products as $productItem)
        <div class="product-card">

            <div class="product-card-img">
                @if($productItem->quantity > 0)
                <label for="" class="stock bg-success">In Stock</label>
                @else
                <label for="" class="stock bg-success">Out Stock</label>
                @endif
                @if($productItem->productImages->count() > 0)
                <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                <img src="{{ asset($productItem->productImages[0]->image) }}" alt="">
                </a>
                @endif
            </div>
            <div class="product-card-body">
                <p class="product-brand">{{ $productItem->brand }}</p>
                <h5 class="product-name">
                    <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">{{ $productItem->name }}</a>
                </h5>
                <div>
                    <span class="selling-price">{{ $productItem->selling_price }} L.E</span>
                    <span class="original-price">{{ $productItem->original_price }}</span>
                </div>
                <div class="mt-2">
                    <a href="" class="btn btn1">Add to cart</a>
                    <a href="" class="btn btn1">Wishlist</a>
                    <a href="" class="btn btn1">View</a>
                </div>
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
