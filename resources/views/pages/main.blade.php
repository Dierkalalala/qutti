@extends('system.master')

@section('content')
    
    @include('components.main.slider')

   {{--  @include('components.main.banners') --}}
    
   
    @include('components.main.features')


    @include('components.main.recommended-products')


    @include('components.main.hot')

    <div class="mb-70">
        {{-- @include('components.main.bannerstatics') --}}        
        @foreach ($categories as $category)
            @include('components.main.category-products')
        @endforeach
    </div>

{{--     <!-- home banner statics area -->
    <div class="banner-statics mt-70">
        <div class="container-fluid">
            <div class="single-banner-statics">
                <a href="shop-grid-left-sidebar.html"><img src="assets/img/banner/img-bottom-sinrato1.jpg" alt=""></a>
            </div>
        </div>
    </div>
    <!-- home banner statics area end --> --}}

    

    
    
@endsection

 