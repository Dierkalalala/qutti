@extends('system.master')


@section('content')


<div class="breadcrumb-area mb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    {{ Breadcrumbs::render('cart') }}
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Start cart Wrapper -->
    <div class="shopping-cart-wrapper pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        <div class="shopping-cart">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h3>Корзина</h3>
                                    </div>
                                    <form action="#">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td>Изображение</td>
                                                        <td>Наименование</td>
                                                        <td>Количество</td>
                                                        <td>Цена за шт.</td>
                                                        <td>Общая цена</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($order->products as $product)
                                                    <tr>
                                                        <td>
                                                            <a href="{{ route('product', ['categories' => $product->category->code, 'product' => $product->code]) }}">
                                                                <img src="{{ Storage::url($product->img) }}" alt="{{ $product->name }}" title="{{ $product->name }}" class="img-thumbnail">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('product', ['categories' => $product->category->code, 'product' => $product->code]) }}">{{ $product->name }}</a>
                                                        </td>
                                                        <td>
                                                            <div class="input-group btn-block">
                                                                
                                                                <div class="product-qty mr-3">                      
                                                                    <input type="text" value="{{ $product->pivot->count }}">
                                                                    <span data-link="{{ route('decrease-from-cart', $product) }}" class="dec qtybtn"><i class="fa fa-minus"></i></span>
                                                                    <span data-link="{{ route('add-cart', $product) }}" class="inc qtybtn"><i class="fa fa-plus"></i></span>
                                                                </div>
                                                                <span class="input-group-btn">
                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                                                                    <button type="button" data-link={{ route('remove-cart', $product) }} class="btn btn-danger pull-right"><i class="fa fa-times-circle"></i></button>
                                                                </span>
                                                            </div>
                                                        <td>{{ $product->price }}</td>
                                                        <td>{{ $product->getFullPrice() }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>


                                    {{-- для следующего этапа разработки --}}
                                    {{-- <div class="cart-accordion-wrapper mt-full mt-40">
                                        <h3>What would you like to do next?</h3>
                                        <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                                        <div id="cart_accordion" class="mt-4" role="tablist">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingCoupon">
                                                    <h4 class="mb-0">
                                                        <a data-toggle="collapse" href="#collapseCoupon" aria-expanded="false" aria-controls="collapseCoupon">Use Coupon Code<i class="ion ion-ios-arrow-down"></i></a>
                                                    </h4>
                                                </div>
                                                <div id="collapseCoupon" class="collapse" role="tabpanel" aria-labelledby="headingCoupon" data-parent="#cart_accordion">
                                                    <div class="card-body">
                                                        <div class="input-group">
                                                            <label class="col-12 col-sm-12 col-md-3" for="input-coupon">Enter your coupon here</label>
                                                            <div class="col-12 col-sm-12 col-md-9">
                                                                <div class="input-group">
                                                                <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control">
                                                                <input type="button" value="Apply Coupon" id="button-coupon" class="btn btn-secondary cart-pg">
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingTax">
                                                    <h4 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseTax" aria-expanded="false" aria-controls="collapseTax">Estimate Shipping &amp; Taxes<i class="ion ion-ios-arrow-down"></i></a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTax" class="collapse" role="tabpanel" aria-labelledby="headingTax" data-parent="#cart_accordion">
                                                    <div class="card-body cart-select">
                                                        <p class="pb-20">Enter your destination to get a shipping estimate.</p>
                                                        <div class="input-group form-group">
                                                            <label class="col-12 col-sm-12 col-md-3" for="input-country"><span class="text-danger">*</span> Country</label>
                                                            <div class="col-12 col-sm-12 col-md-9">
                                                                <select name="country_id" id="input-country" class="form-control nice-select">
                                                                    <option value=""> --- Please Select --- </option>
                                                                    <option value="">Argentina</option>
                                                                    <option value="">Bangladesh</option>
                                                                    <option value="">Belgium</option>
                                                                    <option value="">Brazil</option>
                                                                    <option value="">Germany</option>
                                                                    <option value="">India</option>
                                                                    <option value="">United Kingdom</option>
                                                                    <option value="">United States</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="input-group form-group">
                                                            <label class="col-12 col-sm-12 col-md-3" for="input-zone"><span class="text-danger">*</span> Region / State</label>
                                                            <div class="col-12 col-sm-12 col-md-9">
                                                                <select name="zone_id" id="input-zone" class="form-control nice-select">
                                                                    <option value=""> --- Please Select --- </option>
                                                                    <option value="">Alabama</option>
                                                                    <option value="">Arizona</option>
                                                                    <option value="">California</option>
                                                                    <option value="">Florida</option>
                                                                    <option value="">Newyork</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="input-group form-group mb-5">
                                                            <label class="col-12 col-sm-12 col-md-3" for="input-postcode"><span class="text-danger">*</span> Post Code</label>
                                                            <div class="col-12 col-sm-12 col-md-9">
                                                                <input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control mb-0">
                                                            </div>
                                                        </div>
                                                        <button type="button" id="button-quote" class="btn btn-secondary">Get Quotes</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingGift">
                                                    <h4 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseGift" aria-expanded="false" aria-controls="collapseGift">Use Gift Certificate<i class="ion ion-ios-arrow-down"></i></a>
                                                        </h4>
                                                </div>
                                                <div id="collapseGift" class="collapse" role="tabpanel" aria-labelledby="headingGift" data-parent="#cart_accordion">
                                                    <div class="card-body">
                                                        <div class="input-group">
                                                            <label class="col-12 col-sm-12 col-md-3" for="input-voucher">Enter your gift certificate code here</label>
                                                            <div class="col-12 col-sm-12 col-md-9">
                                                                <div class="input-group">
                                                                    <input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control">
                                                                    <input type="button" value="Apply Gift Certificate" id="button-boucher" class="btn btn-secondary cart-pg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="cart-amount-wrapper">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-4 offset-md-8">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>Итого</strong></td>
                                                            <td>{{ $order->getFullOrderPrice() }}</td>
                                                        </tr>
                                                        {{-- <tr>
                                                            <td><strong>Total:</strong></td>
                                                            <td><span class="color-primary">$860.00</span></td>
                                                        </tr> --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cart-button-wrapper d-flex justify-content-between mt-4">
                                        <a href="{{ route('main') }}" class="btn btn-secondary">Хочу купить ещё</a>
                                        <a href="{{ route('cart-checkout') }}" class="btn btn-secondary dark align-self-end">Подтверждаю заказ</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of shopping-cart -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End cart Wrapper -->

       
@endsection