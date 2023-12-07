 <div class="footer-area">
        <div class="footer-main-wrapper">
            <div class="footer-vactor">
                <img src="{{ asset('assets/images/banner/footer-bg.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-4">
                        <div class="footer-about text-lg-start text-center">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-w.png') }}" alt="Delphin"></a>
                            @isset($settings->instagram )
                            <p class="mt-5">{{ $settings->{ 'description_' . $locale } }}</p>
                            @endisset
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-about text-lg-start text-center">
                            <div class="footer-widget d-flex flex-column align-items-center">
                                <ul class="footer-links">
                                    <h4 class="footer-widget-title">@lang('main.links'):</h4>
                                    <li><a href="{{ route('home') }}">@lang('main.header')</a></li>
                                    <li><a href="{{ route('aboutus') }}">@lang('main.about')</a></li>
                                    <li><a href="{{ route('cantact') }}">@lang('main.contact')</a></li>
                                    <li><a href="{{ route('faqs') }}">@lang('main.faqs')</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-about text-lg-start text-center">
                            <div class="footer-social-wrap">
                                <h5>@lang('main.footer_title')</h5>
                                <ul class="footer-social-links justify-content-lg-start justify-content-center">
                                    @isset($settings->instagram )
                                    <li><a href="https://www.instagram.com/{{ $settings->instagram }}" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                                    @endisset
                                    @isset($settings->facebook )
                                    <li><a href="https://www.facebook.com/{{ $settings->facebook }}" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                    @endisset
                                    @isset($settings->telegram )
                                    <li><a href="https://t.me/{{ $settings->telegram }}" target="_blank"><i class="bx bxl-telegram"></i></a></li>
                                    @endisset
                                    @isset($settings->tiktok )
                                    <li><a href="https://www.tiktok.com/{{ $settings->tiktok }}" target="_blank"><i class="bx bxl-tiktok"></i></a></li>
                                    @endisset
                                    @isset($settings->youtube )
                                    <li><a href="https://www.youtube.com/{{ $settings->youtube }}" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                                    @endisset
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-contact-wrapper">
                    <h5 style="justify-content: center">@lang('main.contact')</h5>
                    <ul class="footer-contact-list">
                        @isset($settings->phone_1 )
                        <li><i class="bi bi-telephone-x"></i> <a href="tel:{{ $settings->phone_1 }}">{{ $settings->phone_1 }}</a></li>
                        @endisset
                        @isset($settings->email )
                        <li><i class="bi bi-envelope-open"></i> <a
                                href="{{ $settings->email }}"><span
                                    class="__cf_email__"
                                    data-cfemail="40292e262f00342f35323830322f6e232f2d">{{ $settings->email }}</span></a>
                        </li>
                        @endisset
                        @isset($settings->{ 'address_' . $locale } )
                        <li><i class="bi bi-geo-alt"></i> {{ $settings->{ 'address_' . $locale } }}</li>
                        @endisset
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 order-lg-1 order-1">
                        <div class="footer-logo text-center">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-w.png') }}" alt="Delphin"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 order-lg-2 order-2 ">
                        <div class="copyright-link text-lg-start text-center">
                            <p>@lang('main.designedby')<a href="https://turgunoff.uz"> Turgunoff.uz</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 order-lg-3 order-3 ">
                        <div class="copyright-link text-lg-start text-center">
                            <p>@lang('main.footer_title2')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
