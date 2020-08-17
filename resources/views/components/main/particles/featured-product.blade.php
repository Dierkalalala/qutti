@foreach ($products as $product)
<div class="pro-layout-two-single-item">
    <div class="product-layout-two">
        <div class="product-layout-info">
            <h4 class="pro-name"><a href="#">{{ $product->product->name }}</a></h4>
            <p class="total-items"></p>
            <button class="shop-btn add-to-cart" type="button" data-link="{{ route('add-cart', $product->id ?? '') }}">+ shop now</button>

        </div>
        <div class="product-layout-thumb">
            <a href="#"><img src="{{ Storage::url($product->product->img) }}" alt=""></a>
        </div>
    </div>
</div>
@endforeach