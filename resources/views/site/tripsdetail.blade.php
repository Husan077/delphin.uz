@extends("layouts.app")
@section('meta')
    <title>{{ $slug->{ 'title_' . $locale } }}</title>
    <meta name="robots" content="index, follow">
    <meta property="keywords" content="Туры в ташкенте, Тур агенства в ташкенте, Tur agenstva, Turkiya Travel, Travel, Билеты Билет Туркия"/>
    @isset($slug->{ 'address_' . $locale })
        <meta property="description" content="{{ $slug->{ 'address_' . $locale } }}"/>
    @endisset
    @isset($slug->{ 'address_' . $locale })
        <meta property="og:description" content="{{ $slug->{ 'address_' . $locale } }}"/>
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
            <h2 class="breadcrumb-title">{{ $slug->{ 'title_' . $locale } }}</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="/">@lang('main.header')</a></li>
                <li class="breadcrumb-item active">{{ $slug->{ 'title_' . $locale } }}</li>
            </ul>
        </div>
    </div>
</div>
<div class="package-details-wrapper pt-76" style="margin-bottom: 110px">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8">
                <div class="tour-package-details">
                    <div class="pd-header">
                        <div class="pd-thumb">
                            <img src="{{ asset('storage/' . $slug->image) }}" style="width: 100%" height="400px" alt="">
                        </div>
                        <div class="header-bottom">
                            <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                <h5 class="location"><i class="bi bi-geo-alt"></i>{{ $slug->{ 'title_' . $locale } }}</h5>
                            </div>
                            <h2 class="pd-title">{{ $slug->{ 'title_' . $locale } }}</h2>
                        </div>
                    </div>
                    <div class="package-details-tabs">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body1"
                                role="tabpanel" aria-labelledby="pills-package1">
                                <h3 class="d-subtitle">@lang('main.full_information')</h3>
                                <p>{!! ($slug->{'description_' . $locale}) !!}</p>
                                <table class="table package-info-table mb-0">
                                    <tbody>
                                        <tr>
                                            <th>@lang('main.address')</th>
                                            <td>{{ $slug->{ 'title_' . $locale } }}</td>
                                        </tr>
                                        <tr>
                                            <th>@lang('main.departure_time')</th>
                                            <td>{{ $slug->departure_time}}</td>
                                        </tr>
                                        <tr>
                                            <th>@lang('main.return_time')</th>
                                            <td>{{ $slug->return_time}}</td>
                                        </tr>
                                        <tr>
                                            @if ($slug->slug == 'Автобус')
                                                <td colspan="2" class="tour-transport-col">
                                                    <div
                                                        class="tour-transport  d-flex align-items-center justify-content-center">
                                                        <img src="{{ asset('assets/images/icons/bus.svg') }}" alt=""> <span>@lang('main.travel_by_bus')</span>
                                                    </div>
                                                </td>
                                            @elseif ($slug->slug == 'Самолет')
                                            <td colspan="2" class="tour-transport-col">
                                                <div
                                                    class="tour-transport  d-flex align-items-center justify-content-center">
                                                    <img src="{{ asset('assets/images/icons/download (1).png') }}" alt=""> <span>@lang('main.travel_by_plan')</span>
                                                </div>
                                            </td>
                                            @endif
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="package-sidebar">
                    <aside class="package-widget-style-2 widget-form mt-30">
                        <div class="widget-title text-center d-flex justify-content-between">
                            <h4>@lang('main.make_an_order')</h4>
                            <h3 class="widget-lavel">{{ $slug->price }} @lang('main.price')</h3>
                        </div>
                        <div class="widget-body">
{{--                            <form action="{{ route('clickSend') }}" method="post" target="_blank">--}}
{{--                                @csrf--}}
{{--                                <input type="hidden" name="merchant_id" value="{{ config('app.click_merchant_id') }}">--}}
{{--                                <input type="hidden" name="merchant_user_id" value="{{ config('app.click_user_id') }}">--}}
{{--                                <input type="hidden" name="service_id" value="{{ config('app.click_service_id') }}">--}}
{{--                                <input type="hidden" name="trip_id" value="{{ $slug->id }}">--}}
{{--                                <input type="hidden" name="amount" value="{{ $slug->price }}">--}}
{{--                                <input type="hidden" name="return_url" value="{{ route('tripsDetail', $slug->title_en) }}">--}}
{{--                                <img width="100px" src="{{ asset('assets/images/click.png') }}" alt="">--}}
{{--                                <button type="submit">Send</button>--}}
{{--                            </form>--}}

                            <form id="contact" action="{{ route('contact.send') }}" method="POST"  enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="merchant_id" value="{{ config('app.click_merchant_id') }}">
                                <input type="hidden" name="merchant_user_id" value="{{ config('app.click_user_id') }}">
                                <input type="hidden" name="service_id" value="{{ config('app.click_service_id') }}">
                                <input type="hidden" name="trip_id" value="{{ $slug->id }}">
                                <input type="hidden" name="amount" value="{{ $slug->price }}">
                                <input type="hidden" name="return_url" value="{{ route('tripsDetail', $slug->title_en) }}">
                                <img width="100px" src="{{ asset('assets/images/click.png') }}" alt="">
                                <div class="booking-form-wrapper">
                                    <div class="custom-input-group">
                                        <input name="name" autocomplete="off" type="text" placeholder="@lang('main.name')..." id="name">
                                    </div>
                                    <div class="custom-input-group">
                                        <input name="phone" autocomplete="off" type="tel" placeholder="@lang('main.phone')..." id="phone" >
                                    </div>
                                    <div class="custom-input-group">
                                        <i class="bi bi-chevron-down"></i>


                                        <select name="carta_selection" id="carta_selection" required>
                                            <option value="">@lang('main.payment_method')</option>
                                            <option value="Click">Click</option>
                                            <option value="money">Naxt pul</option>
                                        </select>
                                    </div>



                                    <div class="row">
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="custom-input-group">--}}
{{--                                                <i class="bi bi-chevron-down"></i>--}}
{{--                                                <select name="adults"  id="truist-adult" >--}}
{{--                                                    <option selected>@lang('main.adults')</option>--}}
{{--                                                    <option value="1"> 1</option>--}}
{{--                                                    <option value="2"> 2</option>--}}
{{--                                                    <option value="3"> 3</option>--}}
{{--                                                    <option value="4"> 4</option>--}}
{{--                                                    <option value="5"> 5</option>--}}
{{--                                                    <option value="6"> 6</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="col-sm-6">
{{--                                            <div class="custom-input-group">--}}
{{--                                                <i class="bi bi-chevron-down"></i>--}}
{{--                                                <select name="children"  id="children">--}}
{{--                                                    <option selected>@lang('main.children')</option>--}}
{{--                                                    <option value="1"> 1</option>--}}
{{--                                                    <option value="2"> 2</option>--}}
{{--                                                    <option value="3"> 3</option>--}}
{{--                                                    <option value="4"> 4</option>--}}
{{--                                                    <option value="5"> 5</option>--}}
{{--                                                    <option value="6"> 6</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
{{--                                    <div class="custom-input-group">--}}
{{--                                        <i class="bi bi-calendar3"></i>--}}
{{--                                        <input  placeholder="@lang('main.date')" type="text" name="checkIn"--}}
{{--                                            id="datepicker2" value="" class="calendar" autocomplete="off">--}}
{{--                                    </div>--}}
                                    <div class="custom-input-group">
                                        <textarea autocomplete="off"  cols="20" rows="7" id="message" name="message" placeholder="@lang('main.message')"></textarea>
                                    </div>
                                    <div class="custom-input-group">
                                        <div class="submite-btn">
                                            <button type="submit">@lang('main.make_an_order')</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
