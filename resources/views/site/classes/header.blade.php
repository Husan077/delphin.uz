
    <div class="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
<header>
    <div class="header-area header-style-three position-absolute w-100">
        <div class="container-fluid">
            <div class="row">
                <div
                    class="col-xxl-2 col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 align-items-center d-xl-flex d-lg-block">
                    <div class="nav-logo d-flex justify-content-between align-items-center">
                        <a href="{{ route('home') }}"><img src="{{ asset("assets/images/logo-w.png") }}" alt="logo"></a>
                        <div class="mobile-menu d-flex ">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                    <span class="h-top"></span>
                                    <span class="h-middle"></span>
                                    <span class="h-bottom"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-7 col-lg-9 col-md-8 col-sm-6 col-xs-6">
                    <nav class="main-nav">
                        <div class="inner-logo d-xl-none text-center">
                            <a href="{{ route('home') }}"><img src="{{ asset("assets/images/logo.png") }}" alt=""></a>
                        </div>
                        <ul>
                            <li><a href="{{ route('home') }}">@lang('main.header')</a></li>
                            <li class="has-child-menu">
                                <a href="{{ route('trips') }}">@lang('main.trips')</a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    @foreach ($headerdetails as $headerdetail)
                                        <li><a href="{{ route('tripsDetail', $headerdetail) }}">{{ $headerdetail->{ 'title_' . $locale } }}</a></li>
                                    @endforeach
                                    <li><a href="{{ route('trips') }}">@lang('main.all')</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('aboutus') }}">@lang('main.about')</a></li>
                            <li><a href="{{ route('cantact') }}">@lang('main.contact')</a></li>
                            <li><a href="{{ route('faqs') }}">@lang('main.faqs')</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xxl-4 col-xl-3 col-lg-1">
                    <div class="nav-right d-lg-flex d-none">
                        <div class="nav-right-hotline d-xl-flex d-none">
                            <nav class="main-nav" style="margin-right: 20px">
                                <ul>
                                   <li class="has-child-menu subb">
                                       <a>{{ LaravelLocalization::getCurrentLocaleName() }}</a>
                                       <ul class="sub-menu">
                                           @foreach(LaravelLocalization::getSupportedLocales() as $localeCode)
                                               <li>
                                                   <a hreflang="{{ $localeCode['link'] }}"
                                                      href="{{ LaravelLocalization::getLocalizedURL($localeCode['link'], null, [], true) }}" class="d-lg-flex d-none">{{ $localeCode['native'] }}</a>
                                               </li>
                                           @endforeach
                                       </ul>
                                   </li>
                               </ul>
                               </nav>
                            <div class="hotline-icon">
                                <img src="{{ asset("assets/images/icons") }}" alt="">
                            </div>

                            @isset($settings->phone_1 )
                            <div class="hotline-info">
                                <span style="font-size:14px;">@lang('main.fast_communication')</span>
                                <h6 style="font-size:16px;"><a href="tel:{{ $settings->phone_1 }}">{{ $settings->phone_1 }}</a></h6>
                            </div>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
