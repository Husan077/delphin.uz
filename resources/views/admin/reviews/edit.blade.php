@extends('layouts.admin')

@section('title')
    Редактирование отзыва
@endsection

@section('main')
    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Редактирование отзыва</h1>
            <ul>
                <li><a href="{{ route('reviews.index') }}">Все отзывы</a></li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('reviews.update', $reviews->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label>Имя и Фамилия</label>
                                    <input class="form-control @error('client_name_ru') is-invalid @enderror"
                                           value="{{ $reviews->client_name_ru }}" autocomplete="off" placeholder="Например: Хусан Тургунов" name="client_name_ru" type="text">
                                    @error('client_name_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Ism va Familiya</label>
                                    <input class="form-control @error('client_name_uz') is-invalid @enderror"
                                           value="{{ $reviews->client_name_uz }}" autocomplete="off" placeholder="Например: Husan Turg'unov" name="client_name_uz" type="text">
                                    @error('client_name_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Профессия</label>
                                    <input class="form-control @error('job_name_ru') is-invalid @enderror"
                                           value="{{ $reviews->job_name_ru }}" autocomplete="off" placeholder="Например: Веб-разработчик" name="job_name_ru" type="text">
                                    @error('job_name_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Kasb</label>
                                    <input class="form-control @error('job_name_uz') is-invalid @enderror"
                                           value="{{ $reviews->job_name_uz }}" autocomplete="off" placeholder="Например: Veb-dasturchi" name="job_name_uz" type="text">
                                    @error('job_name_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Текст (uz)</label>
                                    <textarea class="form-control @error('text_uz') is-invalid @enderror" autocomplete="off"
                                              value="{{ $reviews->text_uz }}" placeholder="Например: Yaxshi eshik vva romlar kerak edi...." name="text_uz" type="text">
                                    </textarea>
                                    @error('text_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Текст (ru)</label>
                                    <textarea class="form-control @error('text_ru') is-invalid @enderror" autocomplete="off"
                                              value="{{ $reviews->text_ru }}" placeholder="Например:  Нужны былы самые ....." name="text_ru" type="text">
                                    </textarea>
                                    @error('text_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-12 form-group mb-3">
                                    <img src="{{ asset( 'storage/' . $reviews->image) }}" class="img-fluid"
                                         style="width: 500px;">
                                </div>

                                <div class="col-12 form-group mb-3" style="padding-top:30px;">
                                    <strong>Выберите изображению:</strong>
                                    <br/>
                                    <input type="file" name="image">
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

