<!-- home product module four start -->
<div class="home-module-four">
    <div class="container-fluid">
        <div class="section-title">
            <h3><span>{{ $category->name }}</h3>
        </div>
        <div class="pro-module-four-active owl-carousel owl-arrow-style">
            @foreach ($category->products as $product)
                @include('components.main.particles.middle-product-card')
            @endforeach
            </div>
    </div>
</div>
<!-- home product module four end -->