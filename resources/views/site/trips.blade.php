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
@endsection
@section("content")
<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">@lang('main.all_tours')</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="{{ route("home") }}">@lang('main.header')</a></li>
                <li class="breadcrumb-item active">@lang('main.all_tours')</li>
            </ul>
        </div>
    </div>
</div>

<div class="package-wrapper pt-80" style="margin-bottom: 110px">
    <div class="container">
        <div class="row">
            @foreach ($tripsdetails as $tripsdetail)
                <div class="col-lg-4 col-md-6">
                    <div class="package-card-alpha">
                        <div class="package-thumb">
                            <a href="{{ route('tripsDetail', $tripsdetail) }}"><img style="width: 100%; height: 225px;" src="{{ asset('storage/' . $tripsdetail->image) }}" alt=""></a>
                            <p class="card-lavel">
                                <i class="bi bi-clock"></i> <span>{{ $tripsdetail->{ 'set_theday_' . $locale } }}</span>
                            </p>
                        </div>
                        <div class="package-card-body">
                            <h3 class="p-card-title"><a href="{{ route('tripsDetail', $tripsdetail) }}">{!! Str::limit( $tripsdetail->{ 'description_' . $locale }, 35) !!}</a>
                            </h3>
                            <div class="p-card-bottom">
                                <div class="book-btn">
                                    <a href="{{ route('tripsDetail', $tripsdetail) }}">@lang('main.purchase') <i class='bx bxs-right-arrow-alt'></i></a>
                                </div>
                                <div class="p-card-info">
                                    <span>@lang('main.per_person')</span>
                                    <h6>{{ $tripsdetail->price }}<span>@lang('main.price')</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .package-card-alpha{
                        margin-top: 24px;
                    }
                </style>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12">
                <nav>
                    {{ $tripsdetails->links('site.classes.pagination') }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
