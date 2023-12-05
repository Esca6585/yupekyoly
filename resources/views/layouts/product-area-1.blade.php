<!-- product-area start -->
<div class="product-area section-bg ptb-100">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center">
                    <h2 class="titel">{{ __('New') }} {{ config('app.name') }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($productLasts as $productLast)
            <div class="col-lg-3 col-md-6">
                <!-- single-product-wrap start -->
                <div class="single-product-wrap">
                    <div class="product-thum">
                        <a href="{{ route('single.product', [ app()->getlocale(), $productLast->id, \Str::slug($productLast->{ 'name_' . app()->getlocale() }) ]) }}">
                            @foreach($productLast->images as $image)
                            <img class="primary-image" src="{{ asset($image->thumb) }}"
                                alt="{{ asset($image->thumb) }}">
                            @break
                            @endforeach

                            @foreach(array_reverse($productLast->images) as $image)
                            <img class="secondary-image" src="{{ asset($image->thumb) }}"
                                alt="{{ asset($image->thumb) }}">
                            @break
                            @endforeach
                        </a>
                        @if($productLast->discount)
                        <span class="discount">-{{ $productLast->discount }}%</span>
                        @endif
                        @if($productLast->sale_type)
                        <span class="sale_type">{{ __($productLast->sale_type) }}</span>
                        @endif
                        
                        <div class="product-action">
                            <a class="add-to-cart-btn" id="add-to-cart" data-tea-id="{{ $productLast->id }}"><i class="flaticon2-shopping-cart-1"></i></a>
                        </div>
                    </div>
                    <div class="product-info text-center">
                        <a href="{{ route('single.product', [ app()->getlocale(), $productLast->id, \Str::slug($productLast->{ 'name_' . app()->getlocale() }) ]) }}">
                            <h3>{{ $productLast->{ 'name_' . app()->getlocale() } }}</h3>
                        </a>
                        <div class="price-box">
                            @if($productLast->sale_price)
                            <span class="old-price">{{ $productLast->price }} {{ __('manat') }}</span>
                            @endif
                            <span class="new-price"> {{ $productLast->sale_price ? $productLast->sale_price : $productLast->price }}
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
<!-- product-area end -->
