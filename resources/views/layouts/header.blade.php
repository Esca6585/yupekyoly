<header>
    <div class="header-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="logo">
                        <a href="{{ route('main-page', app()->getlocale() ) }}"><img
                                src="{{ asset('baychay-template/img/logo/yupekyoly-logo.png') }}"
                                alt="{{ asset('baychay-template/img/logo/yupekyoly-logo.png') }}" width="250px"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="header-main-content">
                        <div class="main-menu-area  d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a
                                            href="{{ route('main-page', app()->getlocale() ) }}">{{ __('Main Page') }}</a>
                                    </li>
                                    <li>
                                        <a
                                            href="{{ route('contact-us', app()->getlocale() ) }}">{{ __('Contact Us') }}</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="right-blok-box">
                            <div class="mr-3 mt-1">
                                <select name="" id="changeLanguage">
                                    @foreach (Config::get('languages') as $lang => $language)
                                    <option value="{{ $lang }}" {{ app()->getlocale() == $lang ? 'selected' : '' }}>
                                        {{ $language['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="top-login-menu">
                                <div class="top-login-inner">
                                    <a href="{{ route('login', app()->getlocale()) }}">
                                        <i class="flaticon2-user"></i>
                                        <span class="user-login">{{ __('Login') }}</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <!-- Mobile Menu Area Start -->
                    <div class="mobile-menu-area d-block d-lg-none">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul>
                                    <li><a href="{{ url('/') }}">{{ __('Main Page') }}</a></li>
                                    <li><a
                                            href="{{ route('contact-us', app()->getlocale() ) }}">{{ __('Contact Us') }}</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Mobile Menu Area End -->
                </div>
            </div>
        </div>
    </div>
</header>
