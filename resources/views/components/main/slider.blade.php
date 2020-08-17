<!-- slider area start -->
<div class="slider-area">
    <div class="hero-slider-active slick-dot-style slider-arrow-style">
        @foreach ($slides as $slide)        
            <div class="single-slider d-flex align-items-center" style="background-image: url({{ Storage::url($slide->photo) }});">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-sm-8">
                            <div class="slider-text">
                                <h1>{{ $slide->title }}</h1>
                                <p>{{ $slide->description }}</p>
                                <a class="btn-1 home-btn" href="{{ $slide->link }}">Посмотреть коллекцию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- slider area end -->