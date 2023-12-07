@extends("layouts.app")
@section('meta')
    <title>@lang('main.about')</title>
    <meta name="robots" content="index, follow">
    <meta property="keywords"
          content="Туры в ташкенте, Тур агенства в ташкенте, Tur agenstva, Turkiya Travel, Travel, Билеты Билет Туркия"/>
    @isset($settings->{ 'address_' . $locale })
        <meta property="description" content="{{ $settings->{ 'address_' . $locale } }}"/>
    @endisset
    @isset($settings->{ 'address_' . $locale })
        <meta property="og:description" content="{{ $settings->{ 'address_' . $locale } }}"/>
    @endisset
    <meta property="og:title" content="Delphin.uz - @lang('main.header')"/>
    <meta property="og:keywords"
          content="Туры в ташкенте, Тур агенства в ташкенте, Tur agenstva, Turkiya Travel, Travel, Билеты Билет Туркия"/>

    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{{ asset('images/logo/logo_blue_short.png') }}"/>
    <link rel="image_src" href="{{ asset('images/logo/logo_blue_short.png') }}"/>
@endsection
@section("content")
    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">@lang('main.about')</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('main.header')</a></li>
                    <li class="breadcrumb-item active">@lang('main.about')</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="about-main-wrappper pt-100">
        <div class="container">
            <div class="about-tab-wrapper">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="about-tab-image-grid text-center">
                            <div class="about-video d-inline-block">
                                <img src="{{ asset('assets/images/about/about-g2.png') }}" alt="">
                                <div class="video-overlay">
                                    @isset($settings->youtube_vido_link )
                                        <a data-fancybox
                                           href="https://www.youtube.com/{{ $settings->youtube_vido_link }}"
                                           class="play-icon video-popup">
                                            <i class="bi bi-play-fill"></i>
                                        </a>
                                    @endisset
                                </div>
                            </div>
                            <div class="row float-images g-4">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="about-image">
                                        <img src="{{ asset("assets/images/about/about-g1.png") }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="about-image">
                                        <img src="{{ asset('assets/images/about/about-g3.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="about-tab-wrap">
                            <h2 class="about-wrap-title">
                                @lang('main.about_text')
                                <span>@lang('main.about_text2')</span> @lang('main.about_text3').
                            </h2>
                            <div class="about-tab-switcher">
                                <ul class="nav nav-pills mb-3 justify-content-md-between justify-content-center"
                                    id="about-tab-pills" role="tablist">
                                    @foreach ($ourcompanys as $ourcompany )
                                        <li class="nav-item" role="presentation">
                                            <div class="nav-link @if ($loop->first) active @endif" id="pills-about3"
                                                 data-bs-toggle="pill"
                                                 data-bs-target="#about-{{ $ourcompany->id}}" role="tab"
                                                 aria-controls="about-@if ($loop->first) active @endif"
                                                 aria-selected="false">
                                                <h3>{{ $ourcompany->number }}+</h3>
                                                <h6>{{ $ourcompany->{'title_' . $locale} }}</h6>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="tab-content about-tab-content" id="pills-tabContent">

                                @foreach($ourcompanys as $ourcompany)
                                    <div class="tab-pane fade" id="about-{{ $ourcompany->id}}" role="tabpanel"
                                         aria-labelledby="pills-{{ $ourcompany->id}}">
                                        <p>{!! $ourcompany->{'text_' . $locale} !!}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-100">
                <div class="col-lg-12">
                    <div class="achievement-counter-wrap">
                        <h2 class="about-wrap-title" style="margin-bottom: 20px ">
                            <span>@lang('main.whywe')?</span>
                        </h2>
                        <div class="for-grid">
                            @foreach ($whyus as $whyu)
                                <div class="achievement-counter-cards">
                                    <div
                                        class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center ">
                                        <div class="counter-box mb-sm-0 mb-3">
                                            <h2>{{ $whyu->number }}+</h2>
                                            <h6>{{ $whyu->{'title_' . $locale} }}</h6>
                                        </div>
                                        <p>{!! $whyu->{'text_' . $locale} !!}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="testimonial-area testimonial-style-one mt-120">
        <div class="testimonial-shape-group"></div>
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-head-alpha">
                        <h2>@lang('main.customerfeedbacks')</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="slider-arrows text-center d-lg-flex d-none justify-content-end mb-3">
                        <div class="testi-prev custom-swiper-prev" tabindex="0" role="button"
                             aria-label="Previous slide"><i class="bi bi-chevron-left"></i></div>
                        <div class="testi-next custom-swiper-next" tabindex="0" role="button" aria-label="Next slide"><i
                                class="bi bi-chevron-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="swiper testimonial-slider-one position-relative">
                <div class="swiper-wrapper">
                    @foreach ($customerfeedbacks as $customerfeedback)
                        <div class="swiper-slide">
                            <div style="width: 100%; height: 240px;" class="testimonial-card testimonial-card-alpha">
                                <div class="testimonial-overlay-img">
                                    <img src="{{ asset('storage/' . $customerfeedback->image) }}" alt="">
                                </div>
                                <div class="testimonial-card-top">
                                    <div class="qoute-icon"><i class='bx bxs-quote-left'></i></div>
                                    <div class="testimonial-thumb"><img
                                            src="{{ asset('storage/' . $customerfeedback->image) }}" alt=""></div>
                                    <h3 class="testimonial-count"></h3>
                                </div>
                                <div class="testimonial-body">
                                    <p>{{ $customerfeedback->{'text_' . $locale} }}</p>
                                    <div class="testimonial-bottom">
                                        <div class="reviewer-info">
                                            <h4 class="reviewer-name">{{ $customerfeedback->{'customer_name_' . $locale} }}</h4>
                                            <h6>@lang('main.traveller')</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="guide-area guide-style-one pt-50">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-head-alpha text-center mx-auto">
                    <h2>@lang('main.location')</h2>
                </div>
            </div>
        </div>
        <div class="map" id="map" style="position:relative;overflow:hidden; width: 100%; height: 450px">
            <script>

                var placemarks = [
                        @foreach($locations as $locations)
                    {
                        latitude: {{$locations->map_lat}},
                        longitude: {{$locations->map_lng}},
                        hintContent: '{{$locations->address_ru }}',
                        balloonContent: '{{$locations->phone }}',
                    },
                    @endforeach
                ];

                ymaps.ready(init);

                function init() {
                    var Map = new ymaps.Map("map", {
                        center: [41.316096, 69.263496],
                        zoom: 11,
                        controls: ['zoomControl', 'geolocationControl', 'routeEditor', 'fullscreenControl']
                    });
                    placemarks.forEach(function (obj) {
                        var placemark = new ymaps.Placemark([obj.latitude, obj.longitude], {
                                hintContent: obj.hintContent,
                                balloonContent: obj.balloonContent,
                            },
                            {
                                preset: 'islands#redIcon',
                            });
                        Map.geoObjects.add(placemark);
                    });

                }
            </script>
        </div>
@endsection
