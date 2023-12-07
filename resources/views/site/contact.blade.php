@extends("layouts.app")
@section('meta')
    <title>@lang('main.contact')</title>
    <meta name="robots" content="index, follow">
    <meta property="keywords" content="Туры в ташкенте, Тур агенства в ташкенте, Tur agenstva, Turkiya Travel, Travel, Билеты Билет Туркия"/>
    @isset($settings->{ 'address_' . $locale })
        <meta property="description" content="{{ $settings->{ 'address_' . $locale } }}"/>
    @endisset
    @isset($settings->{ 'address_' . $locale })
        <meta property="og:description" content="{{ $settings->{ 'address_' . $locale } }}"/>
    @endisset
    <meta property="og:title" content="Delphin.uz - @lang('main.header')"/>
    <meta property="og:keywords" content="Туры в ташкенте, Тур агенства в ташкенте, Tur agenstva, Turkiya Travel, Travel, Билеты Билет Туркия"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{{ asset('assets/images/logo.png') }}"/>
    <link rel="image_src" href="{{ asset('assets/images/logo.png') }}"/>
@endsection
@section("content")
<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">@lang('main.contact')</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('main.header')</a></li>
                <li class="breadcrumb-item active">@lang('main.contact')</li>
            </ul>
        </div>
    </div>
</div>

<div class="contact-wrapper pt-100">
    <div class="container">
        <div class="row align-items-center justify-content-lg-center gy-5">
            <div class="col-lg-6">
                <div class="contatc-intro-figure">
                    <img src="{{ asset("assets/images/banner/contact-bg.png") }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-info">
                    <h3>@lang('main.contact_details')</h3>
                    <ul>

                        <li>
                            <h6 class="pb-2">@lang('main.to_apply')</h6>
                            @isset($settings->email)
                            <a href="{{ $settings->email }}">{{ $settings->email }}</span></a>
                            @endisset
                            <br>
                            @isset($settings->phone_1)
                            <a href="tel:{{ $settings->phone_1 }}">{{ $settings->phone_1 }}</a>
                            @endisset
                            @isset($settings->phone_2)
                            <a href="tel:{{ $settings->phone_2 }}">{{ $settings->phone_2 }}</a>
                            @endisset
                        </li>
                        <li>
                            <h6>@lang('main.location')</h6>
                            @isset($settings->{ 'address_' . $locale })
                            <a href="#map">{{ $settings->{ 'address_' . $locale } }}</a>
                            @endisset
                        </li>
                        <li>
                            <h6>@lang('main.social_events')</h6>
                            @isset($settings->facebook)
                            <a href="https://www.facebook.com/{{ $settings->facebook }}">Facebook: https://facebook.com/{{ $settings->facebook }}</a>
                            @endisset
                            @isset($settings->telegram)
                            <a href="https://t.me/{{ $settings->telegram }}">Telegram: https://t.me/{{ $settings->telegram }}</a>
                            @endisset
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-120">
        <form id="contact" action="{{ route('contact.send2') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="contact-form-wrap">
                <h4>@lang('main.application')</h4>
                <p>@lang('main.application_text')</p>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="custom-input-group">
                            <label for="name">@lang('main.name_ne')</label>
                            <input type="text" name="phone" autocomplete="off" placeholder="@lang('main.name')..." id="name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-input-group">
                            <label for="tel">@lang('main.phone_ph')</label>
                            <input type="phone" name="phone" autocomplete="off" placeholder="@lang('main.phone')..." aria-live="off" id="phone">
                        </div>
                    </div>
                </div>
                <div class="custom-input-group">
                    <textarea cols="20" rows="7" name="message" autocomplete="off" placeholder="@lang('main.message')"></textarea>
                </div>
                <div class="custom-input-group">
                    <div class="submite-btn">
                        <button type="submit">@lang('main.send')</button>
                    </div>
                </div>
            </div>
        </form>
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
    <div class="map" id="map" style="position:relative;overflow:hidden; width: 100%; height: 450px"></div>
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
            function init(){
                var Map = new ymaps.Map("map", {
                        center: [41.316096, 69.263496],
                    zoom: 10,
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
