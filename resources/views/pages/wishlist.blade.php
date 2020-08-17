@extends('system.master')
@section('content')
<div class="breadcrumb-area mb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    {{ Breadcrumbs::render('wishlist') }}
                </div>
            </div>
        </div>
    </div>
</div>   


    <!-- Start of wishlist Wrapper -->
    <div class="wishlist-wrapper mb-55">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        <div class="wishlist">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h3>Избранное</h3>
                                    </div>
                                    <form action="#">
                                        <div class="table-responsive text-center wishlist-style">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td>Картинка</td>
                                                        <td>Название продукта</td>
                                                        <td>Категория</td>
                                                        <td>Цена за единицу</td>
                                                        <td>Действия</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($wishlist->products as $product)
                                                    <tr>
                                                        <td>
                                                            <a href="{{ route('product', [$product->category->code, $product->code]) }}"><img src="{{ Storage::url($product->img) }}" class="wishlist-product-image" alt="Wishlist Product Image" title="{{ $product->name }}"></a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('product', [$product->category->code, $product->code]) }}">{{ $product->name }}</a>
                                                        </td>
                                                        <td> {{ $product->category->name }} </td>
                                                        <td>
                                                            <div class="price">{{-- <small><del>$430.00</del></small>  --}}<strong>{{ $product->price }} $</strong></div>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary add-to-cart" data-link="{{ route('add-cart', $product->id) }}"><i class="fa fa-shopping-cart"></i></button>
                                                            <a href="{{ route('wishlist-remove', $product->id) }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- end of wishlist -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of wishlist Wrapper -->
@endsection