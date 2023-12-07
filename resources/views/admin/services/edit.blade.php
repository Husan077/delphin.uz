@extends('layouts.admin')

@section('title')
    Редактирование услуги
@endsection

@section('main')
    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Редактирование услуги</h1>
            <ul>
                <li><a href="{{ route('services.index') }}">Все услуги</a></li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('services.update', $serv->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="row">


                                <div class="col-md-6 form-group mb-3">
                                    <label>Титлувка 1 (uz)</label>
                                    <input class="form-control @error('title_uz') is-invalid @enderror" value="{{ $service->title_uz }}"
                                           autocomplete="off" placeholder="Например: Eng yaxshi takliflar" name="title_uz" type="text">
                                    @error('title_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Титлувка 1 (ru)</label>
                                    <input class="form-control @error('title_ru') is-invalid @enderror" value="{{ $service->title_ru }}"
                                           autocomplete="off" placeholder="Например: Лучшие предложения" name="title_ru" type="text">
                                    @error('title_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-12 form-group mb-3">
                                    <label>Описание (uz)</label>
                                    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                                    <textarea value="{{ $service->text_uz }}" class="form-control @error('text_uz') is-invalid @enderror" name="text_uz"></textarea>
                                    <script>
                                        CKEDITOR.replace('text_uz');
                                    </script>
                                </div>

                                <div class="col-12 form-group mb-3">
                                    <label>Описание (ru)</label>
                                    <textarea value="{{ $service->text_ru }}" class="form-control @error('text_ru') is-invalid @enderror" name="text_ru"></textarea>
                                    <script>
                                        CKEDITOR.replace('text_ru');
                                    </script>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Поставтьте иконку</label>
                                    <input class="form-control @error('icon') is-invalid @enderror" value="{{ $service->icon }}"
                                           autocomplete="off" placeholder="Например: '<i class=lni-check-mark-circle size-md base-color></i>'" name="icon" type="text">
                                    @error('icon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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

