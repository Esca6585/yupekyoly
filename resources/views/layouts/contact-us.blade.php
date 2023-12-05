<!-- main-content-wrapper start -->
<div class="main-content-wrapper section-bg ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-info-area">
                    <h2>{{ __('Address') }}</h2>
                    <div class="singel-corporat-wrap col-6 mb-4">
                        <h3>Türkmenistan</h3>
                    </div>
                    <div class="singel-corporat-wrap col-6">
                        <p>
                            <i class="flaticon2-pin"></i>
                            Türkmenistan, Aşgabat şäheri, Oguzhan köçe 11-mkr
                        </p>
                    </div>
                    <div class="singel-corporat-wrap col-6">
                        <p>
                            <i class="flaticon2-black-back-closed-envelope-shape"></i> 
                            <a class="mail" href="mailto::esca656585@gmail.com">esca656585@gmail.com</a>
                        </p>
                    </div>
                    <div class="singel-corporat-wrap col-6">
                        <p>
                            <i class="flaticon2-phone"></i><a href="tel:+993 62 476676">+993 62 476676</a> (IMO Link)
                        </p>
                    </div>
                    <div class="singel-corporat-wrap col-6">
                        <p>
                            <i class="flaticon2-phone"></i><a href="tel:+993 65 656585">+993 65 656585</a> (IMO Link Skype)
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-info-area r-pt-40">
                    <h2>{{ __('Get in Touch') }}</h2>
                    <div class="contact-form-area">
                        <form action="{{ route('message', app()->getlocale() ) }}" method="post">
                            @csrf
                            <div class="contact-page-form">
                                <div class="contact-input">
                                    <div class="contact-inner">
                                        <input name="name" type="text" placeholder="{{ __('First Name') }}" id="name"
                                            value="{{ old('name') }}">

                                        @error('name')
                                        <div class="fv-plugins-message-container text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="contact-inner">
                                        <input name="phone_number" type="text" placeholder="{{ __('Phone number') }}"
                                            value="{{ old('phone_number') }}">

                                        @error('phone_number')
                                        <div class="fv-plugins-message-container text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>
                                    <div class="contact-inner">
                                        <input type="text" placeholder="{{ __('Email') }}" id="email" name="email"
                                            value="{{ old('email') }}">

                                        @error('email')
                                        <div class="fv-plugins-message-container text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="contact-inner contact-message">
                                        <textarea name="messages"
                                            placeholder="{{ __('Message') }}">{{ old('messages') }}</textarea>

                                        @error('messages')
                                        <div class="fv-plugins-message-container text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                @if(session()->has('success-message'))
                                    <div class="text-success" id="alert-message">{{ __(session()->get('success-message')) }}</div>
                                @endif

                                <div class="contact-submit-btn">
                                    <button class="submit-btn" type="submit">{{ __('Send Email') }}</button>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main-content-wrapper end -->
