@extends('layouts.admin')

@section('title')
    Редактирование баннера
@endsection

@section('main')
    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Редактирование обо мне</h1>
            <ul>
                <li><a href="{{ route('abouts.index') }}">Все данные</a></li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('banners.update', $abt->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label>Уровень (uz)</label>
                                    <input class="form-control @error('level_uz') is-invalid @enderror" value="{{ $abt->level_uz }}"
                                           autocomplete="off" placeholder="Например: Бакалавр" name="level_uz" type="text">
                                    @error('level_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Уровень (uz)</label>
                                    <input class="form-control @error('level_ru') is-invalid @enderror" value="{{ $abt->level_ru }}"
                                           autocomplete="off" placeholder="Например: Бакалавр" name="level_ru" type="text">
                                    @error('level_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Возраст</label>
                                    <input class="form-control @error('years_old') is-invalid @enderror" autocomplete="off"
                                           value="{{ $abt->years_old }}" placeholder="Например: 21 год" name="years_old" type="text">
                                    @error('years_old')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="col-12 form-group mb-3">
                                    <img src="{{ asset( 'storage/' . $abt->image) }}" class="img-fluid"
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

