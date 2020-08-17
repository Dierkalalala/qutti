<!-- product wrapper area start -->
<div class="product-wrapper fix pb-70">
    <div class="container-fluid">
        <div class="section-title product-spacing hm-11">
            <h3><span>our</span> product</h3>
            <div class="boxx-tab">
                <ul class="nav my-tab">
                    <li>
                        <a class="active" data-toggle="tab" href="#one">Camera, Photo & Video</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#two">Audio & Home Theater</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#three">Cellphones & Accessories</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="one">
                <div class="product-gallary-wrapper">
                    <div class="product-gallary-active owl-carousel owl-arrow-style product-spacing">
                        @include('components.main.particles.category-product')
                        @include('components.main.particles.category-product')
                        @include('components.main.particles.category-product')
                        @include('components.main.particles.category-product')
                        @include('components.main.particles.category-product')
                        @include('components.main.particles.category-product')
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="two">
                <div class="product-gallary-wrapper">
                    <div class="product-gallary-active owl-carousel owl-arrow-style product-spacing">
                        @include('components.main.particles.category-product')
                        @include('components.main.particles.category-product')
                        @include('components.main.particles.category-product')
                        @include('components.main.particles.category-product')
                        @include('components.main.particles.category-product')
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="three">
                <div class="product-gallary-wrapper">
                    <div class="product-gallary-active owl-carousel owl-arrow-style product-spacing">
                        @include('components.main.particles.category-product')
                        @include('components.main.particles.category-product')
                        @include('components.main.particles.category-product')
                        @include('components.main.particles.category-product')
                        @include('components.main.particles.category-product')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product wrapper area start -->