<div class="sinrato-list-item mb-30" data-id="{{ $product->id }}">
                                    <div class="sinrato-thumb">
                                        <a href="product-details.html">
                                            <img src="{{ Storage::url($product->img) }}" class="pri-img" alt="">
                                            <img src="{{ Storage::url($product->img) }}" class="sec-img" alt="">
                                        </a>
                                        <div class="box-label">
                                            <div class="label-product label_sale">
                                                {{-- <span>-10%</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sinrato-list-item-content">
                                        <div class="manufacture-product">
                                            <span><a href="#">{{ $product->brand->name }} </a></span>
                                        </div>
                                        <div class="sinrato-product-name">
                                            <h4><a href="product-details.html">{{ $product->name }}</a></h4>
                                        </div>
                                        {{-- <div class="sinrato-ratings mb-15">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div> --}}
                                        <div class="sinrato-product-des">
                                            <p> {{ \Illuminate\Support\Str::limit($product->description, 200, $end='...') }}</p>
                                        </div>
                                    </div>
                                    <div class="sinrato-box-action">
                                        <div class="price-box">
                                            <span class="regular-price"><span class="special-price">{{ $product->price }} $</span></span>
                                            {{-- <span class="old-price"><del>£60.00</del></span> --}}
                                        </div>
                                        <button class="btn-cart add-to-cart" data-link="{{ route('add-cart', $product->id) }}" type="button">Добавить в корзину</button>
                                        <div class="action-links sinrat-list-icon">
                                            <a href="#" class="add-to-cart" title="Wishlist" data-link={{ route('wishlist-add', $product->id) }}><i class="lnr lnr-heart"></i></a>
                                            {{--  <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                            <a href="#" title="Quick view" data-target="#quickk_view" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a> --}}
                                        </div> 
                                    </div>
                                </div>