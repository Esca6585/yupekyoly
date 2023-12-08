<div class="wrapper single-product-page">
    <!-- main-content-wrapper start -->
    <div class="main-content-wrapper pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <!--product-thumbnail start-->
                    <div class="product-thumbnail">
                        <div class="tab-content">
                            @foreach($product->images as $key => $image)
                            <div role="tabpanel" class="tab-pane {{ $key == 0 ? 'active' : '' }}"
                                id="Thumb{{ $key+1 }}">
                                <a class="popup-link" href="{{ asset($image->thumb) }}">
                                    <img src="{{ asset($image->thumb) }}" alt="{{ asset($image->thumb) }}"> </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="modal-product-tab">
                            <ul class="nav product-small-thum owl-carousel">
                                @foreach($product->images as $key => $image)
                                <li role="presentation" class="active"><a href="#Thumb{{ $key+1 }}"
                                        data-toggle="tab"><img src="{{ asset($image->thumb) }}"
                                            alt="{{ asset($image->thumb) }}"></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--product-thumbnail end-->
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="single-product-page-content">
                        <div class="product-info">
                            <h3>{{ $product->{ 'name_' . app()->getlocale() } }}</h3>
                            <div class="price-box">
                                @if($product->sale_price)
                                <span class="old-price">{{ $product->price }} {{ __('manat') }}</span>
                                @endif
                                <span class="new-price">
                                    {{ $product->sale_price ? $product->sale_price : $product->price }}
                                    {{ __('manat') }}
                                </span>
                            </div>

                            <div class="product-info">
                                @if($product->discount)
                                <span class="discount">-{{ $product->discount }}%</span>
                                
                                @endif
                                @if($product->sale_type)
                                <span class="sale_type">{{ __($product->sale_type) }}</span>
                                @endif
                            </div>
                            <p>{{ $product->{ 'desc_' . app()->getlocale() } }}</p>

                            <form class="single-cart">
                                <div class="quantity">
                                    <input type="number" class="input-box" step="1" min="0" value="1">
                                </div>
                                <a href="{{ route('contact-us', app()->getlocale() ) }}" class="single_add_to_cart_button">
                                    <i class="flaticon2-shopping-cart-1"></i>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrapper end -->

    <div class="related-products pt-100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="titel">{{ __('New') }} {{ __('Product') }}</h2>
                    </div>
                </div>
            </div>

            <div class="related-product-wrappner my-5">
                <div class="row">
                    <div class="related-product-active owl-carousel">
                        @foreach($trendProducts as $trendProduct)
                        <div class="col">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="{{ route('single.product', [ app()->getlocale(), $trendProduct->id, \Str::slug($trendProduct->{ 'name_' . app()->getlocale() }) ]) }}"
                                        id="product-link">
                                        @foreach($trendProduct->images as $image)
                                        <img class="primary-image" src="{{ asset($image->thumb) }}"
                                            alt="{{ asset($image->thumb) }}">
                                        @break
                                        @endforeach

                                        @foreach(array_reverse($trendProduct->images) as $image)
                                        <img class="secondary-image" src="{{ asset($image->thumb) }}"
                                            alt="{{ asset($image->thumb) }}">
                                        @break
                                        @endforeach
                                    </a>
                                    @if($trendProduct->discount)
                                    <span class="discount">-{{ $trendProduct->discount }}%</span>
                                    @endif
                                    @if($trendProduct->sale_type)
                                    <span class="sale_type">{{ __($trendProduct->sale_type) }}</span>
                                    @endif
                                    <div class="product-action">
                                        <a href="#add-to-cart" class="add-to-cart-btn"><i
                                                class="flaticon2-shopping-cart-1"></i></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html">
                                        <h3>{{ $trendProduct->{ 'name_' . app()->getlocale() } }}</h3>
                                    </a>
                                    <div class="price-box">
                                        @if($trendProduct->sale_price)
                                        <span class="old-price">{{ $trendProduct->price }} {{ __('manat') }}</span>
                                        @endif
                                        <span class="new-price">
                                            {{ $trendProduct->sale_price ? $trendProduct->sale_price : $trendProduct->price }}
                                            {{ __('manat') }}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
