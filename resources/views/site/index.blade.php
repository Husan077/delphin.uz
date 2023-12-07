@extends("layouts.app")
@section('meta')
    <title>@lang('main.header')</title>
    <meta name="robots" content="index, follow">
    <meta property="keywords"
          content="Туры в ташкенте, Тур агенства в ташкенте, Tur agenstva, Turkiya Travel, Travel, Билеты Билет Туркия"/>
    @isset($settings->{ 'address_' . $locale })
        <meta property="description" content="{{ $settings->{ 'address_' . $locale } }}"/>
    @endisset
    @isset($settings->{ 'address_' . $locale})
        <meta property="og:description" content="{{ $settings->{ 'address_' . $locale } }}"/>
    @endisset
    <meta property="og:title" content="Delphin.uz - @lang('main.header')"/>
    <meta property="og:keywords"
          content="Туры в ташкенте, Тур агенства в ташкенте, Tur agenstva, Turkiya Travel, Travel, Билеты Билет Туркия"/>

    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{{ asset('assets/images/logo.png') }}"/>
    <link rel="image_src" href="{{ asset('assets/images/logo.png') }}"/>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=563b2f5b-d161-4fd9-a856-d9492d0ba468&lang=ru_RU"
            type="text/javascript">
    </script>
@endsection
@section("content")
    <div class="hero-area hero-style-three">
        <img src="{{ asset('assets/images/banner/banner-plane.svg')}}" class="img-fluid banner-plane">
        <div class="hero-main-wrapper position-relative">
            <div
                class="swiper hero-slider-three swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper" id="swiper-wrapper-49a27b788ea1ea30" aria-live="off"
                     style="transition-duration: 0ms;">
                    @foreach ($banners as $banner)
                        <div class="swiper-slide swiper-slide-visible swiper-slide-active" data-swiper-slide-index="0"
                             role="group" aria-label="1 / 2"
                             style="width: 1903px; transition-duration: 0ms; opacity: 1; transform: translate3d(-1903px, 0px, 0px);">
                            <div class="slider-bg-3"
                                 style="height: 100vh; background: url({{ asset('storage/' . $banner->{'image'}) }}) no-repeat center / cover">
                                <div class="container">
                                    <div class="row d-flex justify-content-center align-items-center">
                                        <div class="col-lg-8">
                                            <div class="hero3-content">
                                                <span class="title-top">{{ $banner->{ 'title_' . $locale } }}</span>
                                                <h1>{{ $banner->{ 'text_1_' . $locale } }}</h1>
                                                <p>{{ $banner->{ 'text_2_' . $locale } }}</p>
                                                <a href="{{ route('cantact') }}"
                                                   class="button-fill-primary banner3-btn">@lang('main.booking_your_trip')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
            <div class="slider-arrows text-center d-lg-flex flex-column d-none gap-5">
                <div class="hero-prev3" tabindex="0" role="button" aria-label="Previous slide"
                     aria-controls="swiper-wrapper-49a27b788ea1ea30"><i class="bi bi-arrow-left"></i></div>
                <div class="hero-next3" tabindex="0" role="button" aria-label="Next slide"
                     aria-controls="swiper-wrapper-49a27b788ea1ea30"><i class="bi bi-arrow-right"></i></div>
            </div>
        </div>
    </div>
    <div class="package-area package-style-one pt-110 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-head-alpha text-center mx-auto">
                        <h2>@lang('main.travel_around')</h2>
                        <p>@lang('main.title_text')</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($tripsdetails as $tripsdetail)
                    <div class="col-lg-4 col-md-6">
                        <div class="package-card-alpha">
                            <div class="package-thumb">
                                <a href="{{ route('tripsDetail', $tripsdetail) }}"><img
                                        src="{{ asset('storage/' . $tripsdetail->image) }}"
                                        style="width: 100%; height: 225px;" alt="image not"></a>
                                <p class="card-lavel">
                                    <i class="bi bi-clock"></i>
                                    <span>{{ $tripsdetail->{ 'set_theday_' . $locale } }}</span>
                                </p>
                            </div>
                            <div class="package-card-body">
                                <h3 class="p-card-title"><a
                                        href="{{ route('tripsDetail', $tripsdetail) }}">{!! Str::limit( $tripsdetail->{ 'description_' . $locale }, 35) !!}</a>
                                </h3>
                                <div class="p-card-bottom">
                                    <div class="book-btn">
                                        <a href="{{ route('tripsDetail', $tripsdetail) }}">@lang('main.purchase') <i
                                                class='bx bxs-right-arrow-alt'></i></a>
                                    </div>
                                    <div class="p-card-info">
                                        <span>@lang('main.per_person')</span>
                                        <h6>{{ $tripsdetail->price }}<span> @lang('main.price')</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="row text-center">
                    <div class="package-bottom-btn">
                        <a href="{{ route("trips") }}" class="button-fill-primary">@lang('main.all')</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="destination-area destination-style-one pt-110 ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="section-head-alpha">
                            <h2>@lang('main.beautifuladdresses')</h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="slider-arrows text-center d-lg-flex d-none justify-content-end mb-3">
                            <div class="testi-prev custom-swiper-prev" tabindex="0" role="button"
                                 aria-label="Previous slide"><i class="bi bi-chevron-left"></i></div>
                            <div class="testi-next custom-swiper-next" tabindex="0" role="button"
                                 aria-label="Next slide"><i
                                    class="bi bi-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0 overflow-hidden">
                <div class="swiper destination-slider-one">
                    <div class="swiper-wrapper">
                        @foreach ($beautifuladdres as $addres)
                            <div class="swiper-slide">
                                <div class="destination-card-style-one">
                                    <div class="d-card-thumb">
                                        <a href=""><img src="{{ asset('storage/' . $addres->image) }}"
                                                        alt=""></a>
                                    </div>
                                    <div class="d-card-overlay">
                                        <div class="d-card-content">
                                            <h3 class="d-card-title">{{ $addres->{'title_'. $locale } }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="newslatter-wrapper mt-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newslatter-side text-center text-lg-start mx-auto mx-lg-0">
                            <h2>@lang('main.application')</span></h2>
                            <p>@lang('main.application_text')</p>
                            <form id="contact" action="{{ route('contact.send2') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="newslatter-form-input">
                                    <input type="text" autocomplete="off" name="name" id="name"
                                           placeholder="@lang('main.name')..." required>
                                    <br>
                                    <input type="tel" autocomplete="off" name="phone" id="phone"
                                           placeholder="@lang('main.phone')..." required>

                                    <button type="submit" class="newslatter-submit">@lang('main.send')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="achievement-counter-side">
                            <div class="row g-4">
                                @foreach($results as $result)
                                    <div class="col-lg-6  col-md-6">
                                        <div class="achievement-box-style-one">
                                            <div class="achievement-icon">
                                                <img src="{{ asset('results/' . $result->image) }}" alt="Image">
                                            </div>
                                            <div class="achievement-box-content">
                                                <h2>{{  $result->number }} + </h2>
                                                <h4>{{ $result->{'title_'. $locale } }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallary-area gallary-style-one pt-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-head-alpha section-padding-15 text-center mx-auto">
                            <h2>@lang('main.customerimages')</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($customerimages as $customerimage)
                        <div class="col-lg-4 col-md-4">
                            <div class="gallary-item">
                                <img style="width: 100%; height: 185px;"
                                     src="{{ asset('storage/' . $customerimage->image) }}" alt="Image Gallery">
                                <a class="gallary-item-overlay" data-fancybox="gallery"
                                   data-caption="{{ $customerimage->{'title_'. $locale } }}"
                                   href="{{ asset('storage/' . $customerimage->image) }}">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
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
                            <div class="testi-next custom-swiper-next" tabindex="0" role="button"
                                 aria-label="Next slide"><i
                                    class="bi bi-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="swiper testimonial-slider-one position-relative">
                    <div class="swiper-wrapper">
                        @foreach ($customerfeedbacks as $customerfeedback)
                            <div class="swiper-slide">
                                <div style="width: 100%; height: 240px;"
                                     class="testimonial-card testimonial-card-alpha">
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
                            @foreach($locations as $location)
                        {
                            latitude: {{$location->map_lat}},
                            longitude: {{$location->map_lng}},
                            hintContent: '{{$location->address_ru }}',
                            balloonContent: '{{$location->phone }}',
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
