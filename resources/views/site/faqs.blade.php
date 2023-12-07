@extends("layouts.app")
@section('meta')
    <title>@lang('main.faq_01')</title>
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
            <h2 class="breadcrumb-title">@lang('main.faq_01')</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('main.header')</a></li>
                <li class="breadcrumb-item active">@lang('main.faq_01')</li>
            </ul>
        </div>
    </div>
</div>

<div class="faq-wrapper pt-76" style="margin-bottom: 110px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="faqs mt-30">
                    <h2>@lang('main.faq2')<span> @lang('main.faq3')</span><br>
                        @lang('main.faq4')</h2>
                    <div class="accordion faq-accordion accordion-flush" id="faq-accordion-example">
                        @foreach ($faqs as $faq)
                            <div class="accordion-item faq-accordion">
                                <h2 class="accordion-header" id="faq-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-{{ $faq->id }}" aria-expanded="false"
                                        aria-controls="faq-collapseThree">
                                        {{ $faq->{'title_' . $locale} }}
                                    </button>
                                </h2>
                                <div id="faq-{{ $faq->id }}" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingThree" data-bs-parent="#faq-accordion-example">
                                    <div class="accordion-body">
                                        <p>{!! $faq->{'text_' . $locale} !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="faq-sidebar mt-30">
                    <form id="contact" action="{{ route('contact.send2') }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="faq-form">
                            <h3>@lang('main.text_faq')</h3>
                            <div class="custom-input-group">
                                <input type="text" name="name" autocomplete=off id="name" placeholder="@lang('main.name')...">
                            </div>
                            <div class="custom-input-group">
                                <input type="text"  name="phone" autocomplete=off  id="phone"  placeholder="@lang('main.phone')...">
                            </div>
                            <div class="custom-input-group">
                                <textarea cols="20" name="message" autocomplete=off id="message" rows="6" placeholder="@lang('main.text_faq')"></textarea>
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
        </div>
    </div>
</div>
@endsection

