@extends('layouts.admin')

@section('title')
  Добавыть новый Баннер
@endsection

@section('main')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="breadcrumb">
            <h1 class="mr-2">Добавить новые Баннер</h1>
            <ul>
                <li><a style="color: blue; border-bottom: 1px solid blue "  href="{{ route('banners.index') }}">Все блоги</a></li>
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
                        <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 form-group mb-3">
                                    <label>Заголовок (uz)</label>
                                    <input class="form-control @error('title_uz') is-invalid @enderror"
                                           autocomplete="off" placeholder="Заголовок " name="title_uz" type="text">
                                    @error('title_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Заголовок (ru)</label>
                                    <input class="form-control @error('title_ru') is-invalid @enderror"
                                           autocomplete="off" placeholder="Заголовок" name="title_ru" type="text">
                                    @error('title_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                  <label>Заголовок (en)</label>
                                  <input class="form-control @error('title_en') is-invalid @enderror"
                                         autocomplete="off" placeholder="Например: Заголовок" name="title_en" type="text">
                                  @error('title_en')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                  <label>Tекст 1 (uz)</label>
                                  <input class="form-control @error('text_1_uz') is-invalid @enderror"
                                         autocomplete="off" placeholder="Например: Tекст" name="text_1_uz" type="text">
                                  @error('text_1_uz')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                  <label>Tекст 1 (ru)</label>
                                  <input class="form-control @error('text_1_ru') is-invalid @enderror"
                                         autocomplete="off" placeholder="Например: Tекст" name="text_1_ru" type="text">
                                  @error('text_1_ru')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                                </div>


                                <div class="col-md-4 form-group mb-3">
                                  <label>Tекст 1 (en)</label>
                                  <input class="form-control @error('text_1_en') is-invalid @enderror"
                                         autocomplete="off" placeholder="Например: Tекст" name="text_1_en" type="text">
                                  @error('text_1_en')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                                </div>

                                    <div class="col-md-4 form-group mb-3">
                                      <label>Tекст 2 (uz)</label>
                                      <input class="form-control @error('text_2_uz') is-invalid @enderror"
                                             autocomplete="off" placeholder="Например: Tекст" name="text_2_uz" type="text">
                                      @error('text_2_uz')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                    </div>
    
                                    <div class="col-md-4 form-group mb-3">
                                      <label>Tекст 2 (ru)</label>
                                      <input class="form-control @error('text_2_ru') is-invalid @enderror"
                                             autocomplete="off" placeholder="Например: Tекст" name="text_2_ru" type="text">
                                      @error('text_2_ru')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                    </div>
    
    
                                    <div class="col-md-4 form-group mb-3">
                                        <label>Tекст (en)</label>
                                        <input class="form-control @error('text_2_en') is-invalid @enderror"
                                               autocomplete="off" placeholder="Например: Tекст" name="text_2_en" type="text">
                                        @error('text_2_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
    
                                        @enderror
                                    </div>

                                <div class="col-12 form-group mb-3" style="padding-top:30px;">
                                    <strong>Выберите изображению:</strong>
                                    <br/>
                                    <input type="file" name="image" required >
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



    