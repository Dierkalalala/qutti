@extends('system.master')

@section('content')
<div class="breadcrumb-area mb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    {{ Breadcrumbs::render('category', $category) }}
                </div>
            </div>
        </div>
    </div>
</div>
   <!-- shop page main wrapper start -->
   <div class="main-wrapper pt-35">
       <div class="container-fluid">
           <div class="row">
               {{-- <div class="col-lg-3">
                    <div class="shop-sidebar-inner mb-30">
                        
                        <form action="{{ route('categories', $category->id) }}" method="GET">
                            <!-- filter-price-content start -->
                            @if ( $category->getLowestPrice() != $category->getHighestPrice() )
                            <div class="single-sidebar mb-45">
                                
                                    
                                <div class="sidebar-inner-title mb-25">
                                    <h3>Fillter by price</h3>
                                </div>
                                <div class="sidebar-content-box"> 
                                    <div class="filter-price-content">
                                            <div id="price-slider" data-min="{{ $category->getLowestPrice() }}" data-max="{{ $category->getHighestPrice() }}" class="price-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            </div>                                        
                                            <div class="filter-price-wapper">
                                                <div class="filter-price-cont">
                                                    <div class="input-type">
                                                        <input id="min-price" readonly="" type="text">
                                                    </div>
                                                    <div class="input-type">
                                                        <input id="max-price" readonly="" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                    </div> 
                                </div>
                            </div>
                            @endif
                            <!-- filte price end -->
                            <!-- categories filter start -->
                            <div class="single-sidebar mb-45">
                                <div class="sidebar-inner-title mb-25">
                                    <h3>Бренды</h3>
                                </div>
                                <div class="sidebar-content-box">
                                    <div class="filter-attribute-container">
                                        <ul>
                                            @foreach ($category->getAllBrands() as $brand)
                                            <label>
                                                <input type="checkbox" value="{{ $brand->id }}" name="brands[]">
                                                <span>{{ $brand->name }}</span>
                                            </label>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                
                                <button type="submit btn btn-default"> Фильтровать </button>
                            </form>  
                            </div>
                            <!-- categories filter end -->
                        </div>
                        <!-- sidebar promote picture start -->
                        <div class="single-sidebar mb-30">
                            <div class="sidebar-thumb">
                                <a href="#"><img src="assets/img/banner/img-static-sidebar.jpg" alt=""></a>
                            </div>
                        </div>
                        
                        <!-- sidebar promote picture end -->
               </div> --}}
               <div class="col-lg-12 order-first order-lg-last">
                    <div class="product-shop-main-wrapper mb-50">
                        {{-- <div class="shop-baner-img mb-70">
                            <a href="#"><img src="assets/img/banner/category-image.jpg" alt=""></a>
                        </div> --}}
                        <div class="shop-top-bar mb-30">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="top-bar-left">
                                        <div class="product-view-mode">
                                            <a class="active" href="#" data-target="column_3"><span>3-col</span></a>
                                            <a href="#" data-target="grid"><span>4-col</span></a>
                                            <a href="#" data-target="list"><span>list</span></a>
                                        </div>
                                       {{--  <div class="product-page">
                                            <p>Showing 1 to 9 of 9 (1 Pages)</p>
                                        </div> --}}
                                    </div>
                                </div>
                               {{--  <div class="col-md-6">
                                    <div class="top-bar-right">
                                        <div class="per-page">
                                            <p>Show : </p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">10</option>
                                                <option value="sales">20</option>
                                                <option value="sales">30</option>
                                                <option value="rating">40</option>
                                                <option value="date">50</option>
                                                <option value="price-asc">60</option>
                                                <option value="price-asc">70</option>
                                                <option value="price-asc">100</option>
                                            </select>
                                        </div>
                                        <div class="product-short">
                                            <p>Sort By : </p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">Relevance</option>
                                                <option value="sales">Name (A - Z)</option>
                                                <option value="sales">Name (Z - A)</option>
                                                <option value="rating">Price (Low &gt; High)</option>
                                                <option value="date">Rating (Lowest)</option>
                                                <option value="price-asc">Model (A - Z)</option>
                                                <option value="price-asc">Model (Z - A)</option>
                                            </select>
                                        </div> 
                                    </div>
                                </div> --}}
                            </div>
                            
                        </div>
                        <div class="shop-product-wrap grid column_3 row">
                            @foreach ($category->products as $product)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    @include('components.main.particles.category-product', compact('product'))
                                    
                                    @include('components.main.particles.sinatro-product', compact('product'))
                                </div>
                            @endforeach
                        </div>
                        <div class="paginatoin-area style-2 pt-35 pb-20">
                            {{-- <div class="row">
                                <div class="col-sm-6">
                                    <div class="pagination-area">
                                        <p>Showing 1 to 9 of 9 (1 Pages)</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="pagination-box pagination-style-2">
                                        <li><a class="Previous" href="#">Previous</a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>
                                          <a class="Next" href="#"> Next </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div> 
                    </div>
               </div>
           </div>
       </div>
   </div>
   <!-- shop page main wrapper end -->

   
@endsection