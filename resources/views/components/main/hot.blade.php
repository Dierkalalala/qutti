<!-- home product module three start -->
<div class="home-module-three hm-1 fix pb-40">
    <div class="container-fluid">
        <div class="section-title module-three">
            <h3><span>Популярные</span> Бренды</h3>
            
        
            <div class="boxx-tab">
                <ul class="nav my-tab">
                    @foreach ($brands as $brand)
                        <li>
                            <a class="@if ($loop->index == 0)active @endif" data-toggle="tab" href="#module-{{ $loop->index }}">{{ $brand->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="tab-content">
            @foreach ($brands as $brand)
            <div class="tab-pane @if ($loop->index == 0)fade show active @endif" id="module-{{ $loop->index }}">
                <div class="module-four-wrapper custom-seven-column">
                    <div class="col col-2 mb-30">
                        <div class="product-item">
                            <div class="product-thumb">
                                <a href="#">
                                    <img src="{{ Storage::url( $brand->tab_image ) }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div> <!-- single item end -->    
                    @foreach ($brand->products as $product)
                    @if ($loop->index >= 12)
                        
                    @else               
                    <div class="col mb-30">
                        <div class="product-item">
                            <div class="product-thumb">
                                <a href="product-details.html">
                                    <img src="{{ Storage::url($product->img) }}" class="pri-img" alt="">
                                    <img src="{{ Storage::url($product->img) }}" class="sec-img" alt="">
                                </a>
                                <div class="box-label">
                                    <div class="label-product label_sale">
                                        <span></span>
                                    </div>
                                </div>
                                {{-- <div class="action-links">
                                    <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                    <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                </div> --}}
                            </div>
                            <div class="product-caption">
                                <div class="manufacture-product">
                                    <p><a href="#">{{ $brand->name }}</a></p>
                                </div>
                                <div class="product-name">
                                    <h4><a href="{{ route('product', [$product->category->id, $product->id]) }}"> {{ $product->name }} </a></h4>
                                </div>
                               {{--  <div class="ratings">
                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                    <span class="yellow"><i class="lnr lnr-star"></i></span>
                                    <span><i class="lnr lnr-star"></i></span>
                                </div> --}}
                                <div class="price-box">
                                    <span class="regular-price">{{ $product->price }} $</span>
                                </div>
                                <button class="btn-cart add-to-cart" data-link="{{ route('add-cart', $product->id) }}" type="button">add to cart</button>
                            </div>
                        </div>
                    </div>
                    @endif    
                    @endforeach   
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- home product module three end -->