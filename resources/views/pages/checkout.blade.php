@extends('system.master')

    
@section('content')

<div class="breadcrumb-area mb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    {{ Breadcrumbs::render('cart-checkout') }}
                </div>
            </div>
        </div>
    </div>
</div>
    
<!-- Start of Checkout Wrapper -->
    <div class="checkout-wrapper pt-10 pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        
                    
                        
                        <!-- end of user-actions -->
                        <form action="{{ route('checkout-confirmation') }}" method="POST">
                            <input type="hidden" name="status" value="1">
                            @csrf
                            <div class="checkout-area">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                                        <div class="checkout-form">
                                            <div class="section-title left-aligned">
                                                <h3>Детали заказа</h3>
                                            </div>

                                            <form >
                                                <div class="form-row mb-3">
                                                    <div class="form-group col-12">
                                                        <label for="first_name">ФИО <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="fio" id="first_name" required>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-row mb-3">
                                                    <div class="form-group col-12">
                                                        <label for="email_address">Ваш Email <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" name="email" id="email_address" required>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="form-row mb-3">
                                                    <div class="form-group col-12">
                                                        <label for="p_address">Ваш адресс <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="address" id="p_address" required>
                                                    </div>
                                                </div> -->
                                               {{--  <div class="form-row mb-3">
                                                    <div class="form-group col-12">
                                                        <label for="city_name">City <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="city" id="city_name" required>
                                                    </div>
                                                </div> --}}
                                                <div class="form-row mb-3">
                                                    <div class="form-group col-12">
                                                        <label for="tel_number">Ваш телефон</label>
                                                        <input type="tel" name="telephone" class="form-control" id="tel_number">
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- end of checkout-form -->
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                                        <div class="order-summary">
                                            <div class="section-title left-aligned">
                                                <h3>Ваш заказ</h3>
                                            </div>
                                            <div class="product-container">
                                                @foreach ($order->products as $product)
                                                    
                                                <div class="product-list">
                                                    <div class="product-inner media align-items-center">
                                                        <div class="product-image mr-4 mr-sm-5 mr-md-4 mr-lg-5">
                                                            <a href="#">
                                                                <img src="{{ Storage::url($product->img) }}" alt="Compete Track Tote" title="Compete Track Tote">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>{{ $product->name }}</h5>
                                                            <p class="product-quantity">Количество: {{ $product->pivot->count }}</p>
                                                            <p class="product-final-price">{{ $product->getFullPrice() }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                
                                            </div> <!-- end of product-container -->
                                            <div class="order-review">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <tbody>        
                                                            <tr class="order-total">
                                                                <th>Итого к оплате</th>
                                                                <td class="text-center"><strong>{{ $order->getFullOrderPrice() }}</strong></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="checkout-payment">
                                                
                                                    <div class="form-row">
                                                        <div class="custom-radio">
                                                            <input class="form-check-input" type="radio" name="payment_type" id="cash_delivery_payment" value="0">
                                                            <span class="checkmark"></span>
                                                            <label class="form-check-label" for="cash_delivery_payment">Оплата наличными</label>

                                                            <div class="payment-info" id="cash_pay">
                                                                <p>Оплата по-приезду курьера</p>
                                                            </div>
                                                        </div>
                                                        <div class="custom-radio">
                                                            <input class="form-check-input" type="radio" name="payment_type" id="paypal_payment" value="1">
                                                            <span class="checkmark"></span>
                                                            <label class="form-check-label" for="paypal_payment">Оплата терминалом</label>

                                                            <div class="payment-info" id="paypal_pay">
                                                                <p>Вы можете оплатить наши услуги через click, payme или мы можем привезти к вам терминал</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-check">
                                                            <div class="custom-checkbox">
                                                                <input class="form-check-input" type="checkbox" id="terms_acceptance" required>
                                                                <span class="checkmark"></span>
                                                                <label class="form-check-label" for="terms_acceptance">Я согласен с<a href="#"> условиями поставки</a> </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row justify-content-end">
                                                        <input type="submit" class="btn btn-secondary dark" value="Продолжить заказ">
                                                    </div>
                                            </div> <!-- end of checkout-payment -->
                                        </div> <!-- end of order-summary -->
                                    </div>
                                </div> <!-- end of row -->
                            </div> 
                        </form>
                        <!-- end of checkout-area -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of Checkout Wrapper -->
    

@endsection