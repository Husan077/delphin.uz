@extends('layouts.admin')

@section('title')
  Изображения клиентов
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
                <li><a href="{{ route('faqs.index') }}">Все данные</a></li>
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
                        <form action="{{ route('faqs.update', $faqs->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                              <div class="col-md-4 form-group mb-3">
                                <label>Заголовок (uz)</label>
                                <input class="form-control @error('title_uz') is-invalid @enderror"value="{{ $faqs->title_uz }}"
                                       autocomplete="off" placeholder="Например: Заголовок" name="title_uz" type="text">
                                @error('title_uz')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                              </div>

                              <div class="col-md-4 form-group mb-3">
                                <label>Заголовок (ru)</label>
                                <input class="form-control @error('title_ru') is-invalid @enderror"value="{{ $faqs->title_ru }}"
                                       autocomplete="off" placeholder="Например: Заголовок" name="title_ru" type="text">
                                @error('title_ru')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                              </div>


                              <div class="col-md-4 form-group mb-3">
                                <label>Заголовок (en)</label>
                                <input class="form-control @error('title_en') is-invalid @enderror"value="{{ $faqs->title_en }}"
                                       autocomplete="off" placeholder="Например: Заголовок" name="title_en" type="text">
                                @error('title_en')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                              </div>

                              <div class="col-12 form-group mb-3">
                                <label>Описание (uz)</label>
                                <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                                <textarea class="form-control @error('text_uz') is-invalid @enderror" name="text_uz">{!! $faqs->text_uz !!}</textarea>
                                <script>
                                    CKEDITOR.replace('text_uz', {
                                            filebrowserUploadUrl: "{{ route('admin.faqs.upload', ['_token' => csrf_token() ]) }}",
                                            filebrowserUploadMethod: 'form'
                                        }
                                    );
                                </script>
                            </div>

                              <div class="col-12 form-group mb-3">
                                <label>Описание (ru)</label>
                                <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                                <textarea class="form-control @error('text_ru') is-invalid @enderror" name="text_ru">{!! $faqs->text_ru !!}</textarea>
                                <script>
                                    CKEDITOR.replace('text_ru', {
                                            filebrowserUploadUrl: "{{ route('admin.faqs.upload', ['_token' => csrf_token() ]) }}",
                                            filebrowserUploadMethod: 'form'
                                        }
                                    );
                                </script>
                            </div>

                            <div class="col-12 form-group mb-3">
                                <label>Описание (en)</label>
                                <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                                <textarea class="form-control @error('text_en') is-invalid @enderror" name="text_en">{!! $faqs->text_en !!}</textarea>
                                <script>
                                    CKEDITOR.replace('text_en', {
                                            filebrowserUploadUrl: "{{ route('admin.faqs.upload', ['_token' => csrf_token() ]) }}",
                                            filebrowserUploadMethod: 'form'
                                        }
                                    );
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
      </div>
    </div>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
@endsection

