@extends('layouts.admin')

@section('title')
    Добавыть новый баннер
@endsection

@section('main')
    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Добавыть новый баннер</h1>
            <ul>
                <li><a href="{{ route('banners.index') }}">Все баннеры</a></li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-6 form-group mb-3">
                                    <label>Титлувка (uz)</label>
                                    <input class="form-control @error('title_name_uz') is-invalid @enderror"
                                           value="{{ old('title_name_uz') }}" autocomplete="off"
                                           placeholder="Например: Turg'unov Husan" name="title_name_uz" type="text">
                                    @error('title_name_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Титлувка (ru)</label>
                                    <input class="form-control @error('title_name_ru') is-invalid @enderror"
                                           autocomplete="off" placeholder="Например: Тургунов Хусан" name="title_name_ru" type="text">
                                    @error('title_name_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Имя (uz)</label>
                                    <input class="form-control @error('title_job_uz') is-invalid @enderror"
                                           autocomplete="off" placeholder="Например: Veb-dasturchi" name="title_job_uz" type="text">
                                    @error('title_job_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Имя (ru)</label>
                                    <input class="form-control @error('title_job_ru') is-invalid @enderror"
                                           autocomplete="off" placeholder="Например: Веб-разработчик" name="title_job_ru" type="text">
                                    @error('title_job_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-12 form-group mb-3">
                                    <label>Описание (uz)</label>
                                    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                                    <textarea class="form-control @error('text_uz') is-invalid @enderror" name="text_uz"></textarea>
                                    <script>
                                        CKEDITOR.replace('text_uz');
                                    </script>
                                </div>

                                <div class="col-12 form-group mb-3">
                                    <label>Описание (ru)</label>
                                    <textarea class="form-control @error('text_ru') is-invalid @enderror" name="text_ru"></textarea>
                                    <script>
                                        CKEDITOR.replace('text_ru');
                                    </script>
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

