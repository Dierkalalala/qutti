<!-- featured categories area start -->
<div class="featured-categories-area">
    <div class="container-fluid">
        <div class="section-title hm-12">
            <h3><span>Рекомендованные</span> товары</h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-gallary-wrapper">
                    <div class="product-gallary-active owl-carousel owl-arrow-style product-spacing">
                    @foreach ($products as $product)
                         @include('components.main.particles.category-product') 
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- featured categories area end -->