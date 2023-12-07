@extends('layouts.admin')

@section('title')
    Настройки сайта
@endsection

@section('main')
    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Настройки сайта</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('settings.update', 1) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                               
                                <div class="col-md-4 form-group mb-3">
                                    <label>Введите адрес (uz)</label>
                                    <input class="form-control" name="address_uz" value="{{ $setting->address_uz ?? '' }}" type="text" placeholder="Введите адрес(uz)">
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Введите адрес (ru)</label>
                                    <input class="form-control" name="address_ru" value="{{ $setting->address_ru ?? '' }}" type="text" placeholder="Введите адрес(uz)">
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label>Введите адрес (en)</label>
                                    <input class="form-control" name="address_en" value="{{ $setting->address_en ?? '' }}" type="text" placeholder="Введите адрес(uz)">
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Введите Email</label>
                                    <input class="form-control" name="email" value="{{ $setting->email ?? '' }}" type="email" placeholder="Введите email">
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label>Номер 1</label>
                                    <input class="form-control" name="phone_1" value="{{ $setting->phone_1 ?? ''}}" type="text" placeholder="Введите 1-ый номер телефона">
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label>Номер 2</label>
                                    <input class="form-control" name="phone_2" value="{{ $setting->phone_2 ?? ''}}" type="text" placeholder="Введите 2-ой номер телефона">
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label>Instagram</label>
                                    <input class="form-control" name="instagram" value="{{ $setting->instagram ?? '' }}" type="text" placeholder="Введите Instagram аккаунт">
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label>Telegram</label>
                                    <input class="form-control" name="telegram" value="{{ $setting->telegram ?? '' }}" type="text" placeholder="Введите Telegram аккаунт">
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label>Facebook</label>
                                    <input class="form-control" name="facebook" value="{{ $setting->facebook ?? '' }}" type="text" placeholder="Введите Facebook аккаунт">
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label>YouTube</label>
                                    <input class="form-control" name="youtube" value="{{ $setting->youtube ?? '' }}" type="text" placeholder="Введите YouTube аккаунт">
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label>Tiktok</label>
                                    <input class="form-control" name="tiktok" value="{{ $setting->tiktok ?? '' }}" type="text" placeholder="Введите YouTube аккаунт">
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Yotub vido link</label>
                                    <input class="form-control" name="youtube_vido_link" value="{{ $setting->youtube_vido_link ?? '' }}" type="text" placeholder="Введите YouTube аккаунт">
                                </div>

                                <div class="col-md-12 form-group mb-3">
                                    <label>Описание(uz)</label>
                                    <input class="form-control" name="description_uz" value="{{ $setting->description_uz ?? '' }}" type="text" placeholder="Введите YouTube аккаунт">
                                </div>

                                <div class="col-md-12 form-group mb-3">
                                    <label>Описание(ru)</label>
                                    <input class="form-control" name="description_ru" value="{{ $setting->description_ru ?? '' }}" type="text" placeholder="Введите YouTube аккаунт">
                                </div>

                                <div class="col-md-12 form-group mb-3">
                                    <label>Описание(en)</label>
                                    <input class="form-control" name="description_en" value="{{ $setting->description_en ?? '' }}" type="text" placeholder="Введите YouTube аккаунт">
                                </div>

                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
