<div class="product-item">
    <div class="product-thumb">
        <a href="{{ route('product', [$product->category->code, $product->code]) }}">
            <img src="{{ Storage::url($product->img) }}" class="pri-img" alt="">
            <img src="{{ Storage::url($product->img) }}" class="sec-img" alt="">
        </a>
        {{-- <div class="box-label">
            <div class="label-product label_new">
                <span>new</span>
            </div>
        </div> --}}
        <div class="action-links">
            <a href="#" class="add-to-cart" data-link="{{ route('wishlist-add', $product->id) }}" title="Wishlist"><i class="lnr lnr-heart"></i></a>
            {{--  <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>  --}}
            <a href="#" class="fetch_quick_view" data-link={{ route('get-product', $product->id) }} data-product-id="{{ $product->id }}" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a> 
        </div>
    </div>
    <div class="product-caption">
        <div class="manufacture-product">
            <p><a href="{{ route('product', [$product->category->code, $product->code]) }}">{{ $product->brand->name ?? '' }}</a></p>
        </div>
        <div class="product-name">
            <h4><a href="{{ route('product', [$product->category->code, $product->code]) }}">{{ $product->name ?? '' }}</a></h4>
        </div>
        {{-- <div class="ratings">
            <span class="yellow"><i class="lnr lnr-star"></i></span>
            <span class="yellow"><i class="lnr lnr-star"></i></span>
            <span class="yellow"><i class="lnr lnr-star"></i></span>
            <span class="yellow"><i class="lnr lnr-star"></i></span>
            <span><i class="lnr lnr-star"></i></span>
        </div> --}}
        <div class="price-box">
            <span class="regular-price">{{ $product->price ?? '' }} $</span>
        </div>
        <button class="btn-cart add-to-cart" type="button" data-link="{{ route('add-cart', $product->id ?? '') }}">add to cart</button>
    </div>
</div>