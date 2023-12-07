@extends('layouts.admin')

@section('title')
    Редактирование Баннер
@endsection

@section('main')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="breadcrumb">
            <h1 class="mr-2">Редактирование обо мне</h1>
            <ul>
                <li><a href="{{ route('banners.index') }}">Все данные</a></li>
            </ul>
        </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('banners.update', $banners->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-4 form-group mb-3">
                                    <label>Заголовок (uz)</label>
                                    <input class="form-control @error('title_uz') is-invalid @enderror"value="{{ $banners->title_uz }}"
                                           autocomplete="off" placeholder="Например: Заголовок" name="title_uz" type="text">
                                    @error('title_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Заголовок (ru)</label>
                                    <input class="form-control @error('title_ru') is-invalid @enderror"value="{{ $banners->title_ru }}"
                                           autocomplete="off" placeholder="Например: Заголовок" name="title_ru" type="text">
                                    @error('title_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Заголовок (en)</label>
                                    <input class="form-control @error('title_en') is-invalid @enderror"value="{{ $banners->title_en }}"
                                           autocomplete="off" placeholder="Например: Заголовок" name="title_en" type="text">
                                    @error('title_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Tекст 1 (uz)</label>
                                    <input class="form-control @error('text_1_uz') is-invalid @enderror"value="{{ $banners->text_1_uz }}"
                                           autocomplete="off" placeholder="Например: Tекст" name="text_1_uz" type="text">
                                    @error('text_1_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="col-md-4 form-group mb-3">
                                    <label>Tекст 1 (ru)</label>
                                    <input class="form-control @error('text_1_ru') is-invalid @enderror"value="{{ $banners->text_1_ru }}"
                                           autocomplete="off" placeholder="Например: Tекст" name="text_1_ru" type="text">
                                    @error('text_1_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Text 1 (en)</label>
                                    <input class="form-control @error('text_1_en') is-invalid @enderror"value="{{ $banners->text_1_en }}"
                                           autocomplete="off" placeholder="Например: Tекст" name="text_1_en" type="text">
                                    @error('text_1_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Tекст 2 (uz)</label>
                                    <input class="form-control @error('text_2_uz') is-invalid @enderror"value="{{ $banners->text_2_uz }}"
                                           autocomplete="off" placeholder="Например: Tекст" name="text_2_uz" type="text">
                                    @error('text_2_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="col-md-4 form-group mb-3">
                                    <label>Tекст 2 (ru)</label>
                                    <input class="form-control @error('text_2_ru') is-invalid @enderror"value="{{ $banners->text_2_ru }}"
                                           autocomplete="off" placeholder="Например: Бакалавр" name="text_2_ru" type="text">
                                    @error('text_2_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Tекст 2 (en)</label>
                                    <input class="form-control @error('text_2_en') is-invalid @enderror"value="{{ $banners->text_2_en }}"
                                           autocomplete="off" placeholder="Например: Бакалавр" name="text_2_en" type="text">
                                    @error('text_2_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-12 form-group mb-3">
                                    <img src="{{ asset( 'storage/' . $banners->image) }}" class="img-fluid"
                                         style="width: 200px;">
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
      </div>
    </div>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
@endsection

