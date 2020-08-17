@extends('system.master')

@section('content')
    @include('components.breadcrumbs')
    <!-- Start compare Wrapper -->
    <div class="comparison-wrapper pb-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        <div class="comparison">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h3>Product Comparison</h3>
                                    </div>
                                    <form action="#">
                                        <div class="table-responsive  text-center">
                                            <table class="table table-bordered compare-style">
                                                <thead>
                                                    <tr>
                                                        <td colspan="4"><strong>Product Details</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="product-title">Product</td>
                                                        <td><a href="product-details.html"><strong>Compete Track Tote</strong></a></td>
                                                        <td><a href="product-details.html"><strong>Rival Field Messenger 6</strong></a></td>
                                                        <td><a href="product-details.html"><strong>Fusion Backpack</strong></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Image</td>
                                                        <td> <img src="assets/img/product/pro-layout-img7.jpg" alt="" class="img-thumbnail"> </td>
                                                        <td> <img src="assets/img/product/pro-layout-img8.jpg" alt="" class="img-thumbnail"> </td>
                                                        <td> <img src="assets/img/product/pro-layout-img5.jpg" alt="" class="img-thumbnail"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Price</td>
                                                        <td> <del>$420.00</del> <span>$150.00</span></td>
                                                        <td> <del>$320.00</del> <span>$180.00</span></td>
                                                        <td> <del>$430.00</del> <span>$100.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Model</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Brands</td>
                                                        <td><a class="text-color" href="#">Studio Design</a></td>
                                                        <td><a class="text-color" href="#">Graphic Corner</a></td>
                                                        <td><a class="text-color" href="#">Graphic Corner</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Availability</td>
                                                        <td>In Stock</td>
                                                        <td>In Stock</td>
                                                        <td>In Stock</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Rating</td>
                                                        <td>
                                                            <div class="product-ratings d-flex justify-content-center mb-2">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star disabled"></i></li>
                                                                    <li><i class="fa fa-star disabled"></i></li>
                                                                    <li><i class="fa fa-star disabled"></i></li>
                                                                </ul>
                                                            </div>
                                                            <span>Based on 1 reviews.</span>
                                                        </td>
                                                        <td>
                                                            <div class="product-ratings d-flex justify-content-center mb-2">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star disabled"></i></li>
                                                                </ul>
                                                            </div>
                                                            <span>Based on 3 reviews.</span>
                                                        </td>
                                                        <td>
                                                            <div class="product-ratings d-flex justify-content-center mb-2">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <span>Based on 10 reviews.</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Summary</td>
                                                        <td class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</td>
                                                        <td class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ...</td>
                                                        <td class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Weight</td>
                                                        <td>0.90kg</td>
                                                        <td>1.00kg</td>
                                                        <td>146.40g</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Dimensions (L x W x H)</td>
                                                        <td>0.00cm x 0.00cm x 0.00cm</td>
                                                        <td>0.00cm x 0.00cm x 0.00cm</td>
                                                        <td>0.00cm x 0.00cm x 0.00cm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-title">Actions</td>
                                                        <td>
                                                            <a href="cart.html" class="btn btn-secondary mb-2 mb-lg-0 mr-xl-2">Add to Cart</a>
                                                            <a href="#" class="btn btn-secondary">Remove</a>
                                                        </td>
                                                        <td>
                                                            <a href="cart.html" class="btn btn-secondary mb-2 mb-lg-0 mr-xl-2">Add to Cart</a>
                                                            <a href="#" class="btn btn-secondary">Remove</a>
                                                        </td>
                                                        <td>
                                                            <a href="cart.html" class="btn btn-secondary mb-2 mb-lg-0 mr-xl-2">Add to Cart</a>
                                                            <a href="#" class="btn btn-secondary">Remove</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- end of comparison -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End compare Wrapper -->

 
@endsection