<div id="products">
    <!-- product-area-2 start -->
    <div class="product-area section-bg ptb-100">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title text-center">
                        <h2 class="titel-2">{{ config('app.name') }}</h2>
                    </div>
                </div>
            </div>
            <!-- tab-content start -->
            <div class="tab-content">
                <div id="black-coffee" class="tab-pane active show" role="tabpanel">
                    <div class="row">
                        <!-- single-product-wrap start -->
                        @foreach($products as $product)
                        <div class="col-lg-3">
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="{{ route('single.product', [ app()->getlocale(), $product->id, \Str::slug($product->{ 'name_' . app()->getlocale() }) ]) }}"
                                        id="product-link">
                                        @foreach($product->images as $image)
                                        <img class="primary-image" src="{{ asset($image->thumb) }}"
                                            alt="{{ asset($image->thumb) }}">
                                        @break
                                        @endforeach

                                        @foreach(array_reverse($product->images) as $image)
                                        <img class="secondary-image" src="{{ asset($image->thumb) }}"
                                            alt="{{ asset($image->thumb) }}">
                                        @break
                                        @endforeach
                                    </a>
                                    @if($product->discount)
                                    <span class="discount">-{{ $product->discount }}%</span>
                                    @endif
                                    @if($product->sale_type)
                                    <span class="sale_type">{{ __($product->sale_type) }}</span>
                                    @endif
                                    <div class="product-action">
                                        <a class="add-to-cart-btn" href="{{ route('contact-us', app()->getlocale() ) }}" id="add-to-cart" data-product-id="{{ $product->id }}">
                                            <i class="flaticon2-shopping-cart-1"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html">
                                        <h3>{{ $product->{ 'name_' . app()->getlocale() } }}</h3>
                                    </a>
                                    <div class="price-box">
                                        @if($product->sale_price)
                                        <span class="old-price">{{ $product->price }} {{ __('manat') }}</span>
                                        @endif
                                        <span class="new-price">
                                            {{ $product->sale_price ? $product->sale_price : $product->price }}
                                            {{ __('manat') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- single-product-wrap end -->
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                {{ $products->links('layouts.front-pagination') }}
            </div>
            <!-- tab-content end -->
        </div>
    </div>
    <!-- product-area-2 end -->

</div>
