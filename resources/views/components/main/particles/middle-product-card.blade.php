<div class="product-module-four-item">
    <div class="product-module-caption">
        <div class="manufacture-com">
            <p><a href="#">{{ $product->brand->name }}</a></p>
        </div>
        <div class="product-module-name">
            <h4><a href="{{ route('product', [$product->category->code, $product->code]) }}">{{  $product->name  }}</a></h4>
        </div>
        {{-- <div class="ratings">
            <span><i class="lnr lnr-star"></i></span>
            <span><i class="lnr lnr-star"></i></span>
            <span><i class="lnr lnr-star"></i></span>
            <span><i class="lnr lnr-star"></i></span>
            <span><i class="lnr lnr-star"></i></span>
        </div> --}}
        <div class="price-box-module">
            <span class="regular-price"><span class="special-price">{{ $product->price }} $</span></span>
            {{-- <span class="old-price"><del>£450.00</del></span> --}}
        </div>
    </div>
    <div class="product-module-thumb">
        <a href="{{ route('product', [$product->category->code, $product->code]) }}">
            <img src="{{ Storage::url($product->img) }}" alt="">
        </a>
    </div>
</div> 