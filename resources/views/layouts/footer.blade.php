<!-- footer-area start -->
<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- single-footer-info start -->
                    <div class="single-footer-info singel-corporat-wrap">
                        <h3 class="footer-info-title">{{ __('Contact Us') }}</h3>
                        <ul class="footer-address">
                            <li>
                                <i class="flaticon2-pin"></i>
                                <p class="desc_call mb-0 d-flex">
                                    Türkmenistan, Aşgabat şäheri, 
                                    Oguzhan köçe 11-mkr
                                </p>
                            </li>
                            <li>
                                <i class="flaticon2-black-back-closed-envelope-shape"></i>
                                <a class="mail" href="mailto::esca656585@gmail.com">esca656585@gmail.com</a>
                            </li>
                            <li>
                                <i class="flaticon2-phone"></i>
                                <!-- <p class="desc_call"></p> -->
                                <p class="desc_call mb-0"><a href="tel:+993 62 476676">+993 62 476676</a> (IMO Link)</p>
                            </li>
                            <li>
                                <i class="flaticon2-phone"></i>
                                <p class="desc_call mb-0"><a href="tel:+993 65 656585">+993 65 656585</a> (IMO Link Skype)</p>
                            </li>
                        </ul>
                    </div>
                    <!-- single-footer-info end -->
                </div>


                <div class="col">
                    <!-- single-footer-info start -->
                    <div class="single-footer-info singel-corporat-wrap">
                        <h3 class="footer-info-title">{{ __('Pages') }}</h3>
                        <ul>
                            <li><a href="{{ route('main-page', app()->getlocale() ) }}">{{ __('Main Page') }}</a></li>
                            <li><a href="{{ route('contact-us', app()->getlocale() ) }}">{{ __('Contact Us') }}</a></li>
                            <li><a href="{{ route('login', app()->getlocale() ) }}">{{ __('Login') }}</a></li>
                        </ul>
                    </div>
                    <!-- single-footer-info end -->
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- copy-right start -->
                    <div class="copy-right">
                        <p>{{ __('Copyright') }} © {{ date('Y') }} <a
                                href="{{ route('main-page', app()->getlocale() ) }}">{{ config('app.name') }}</a>.
                            {{ __('All Rights Reserved') }}. </p>
                    </div>
                    <!-- copy-right end -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area end -->
