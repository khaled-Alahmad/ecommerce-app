<!-- product -->
@foreach($products as $product)
<div class="product">

    <div class="product-img">
        <img src="{{$product->image}}" alt="">
    </div>
    <div class="product-body">
        <p class="product-category">{{$product->category->name}}</p>
        <h3 class="product-name"><a href="#">{{$product->name}}</a></h3>
        <h4 class="product-price">${{$product->price}}
{{--            <del class="product-old-price">$990.00</del>--}}
        </h4>
        <div class="product-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <div class="product-btns">
            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span>
            </button>
            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span>
            </button>
            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
        </div>
    </div>
    <div class="add-to-cart">
        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
    </div>
</div>
@endforeach
