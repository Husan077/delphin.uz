@extends('layouts.admin')

@section('title')
    Отзывы клиентов
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
                <li><a href="{{ route('customerfeedbacks.index') }}">Все данные</a></li>
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
                        <form action="{{ route('customerfeedbacks.update', $customerfeedbacks->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-4 form-group mb-3">
                                    <label>Имя клиента (uz)</label>
                                    <input class="form-control @error('customer_name_uz') is-invalid @enderror"value="{{ $customerfeedbacks->customer_name_uz }}"
                                           autocomplete="off" placeholder="Например: Имя клиента" name="customer_name_uz" type="text">
                                    @error('customer_name_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Имя клиента (ru)</label>
                                    <input class="form-control @error('customer_name_ru') is-invalid @enderror"value="{{ $customerfeedbacks->customer_name_ru }}"
                                           autocomplete="off" placeholder="Например: Имя клиента" name="customer_name_ru" type="text">
                                    @error('customer_name_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Имя клиента (en)</label>
                                    <input class="form-control @error('customer_name_en') is-invalid @enderror"value="{{ $customerfeedbacks->customer_name_en }}"
                                           autocomplete="off" placeholder="Например: Имя клиента" name="customer_name_en" type="text">
                                    @error('customer_name_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Tекст (uz)</label>
                                    <input class="form-control @error('text_uz') is-invalid @enderror"value="{{ $customerfeedbacks->text_uz }}"
                                           autocomplete="off" placeholder="Например: Имя клиента" name="text_uz" type="text">
                                    @error('text_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label>Tекст (ru)</label>
                                    <input class="form-control @error('text_ru') is-invalid @enderror"value="{{ $customerfeedbacks->text_ru }}"
                                           autocomplete="off" placeholder="Например: Tекст" name="text_ru" type="text">
                                    @error('text_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Tекст (en)</label>
                                    <input class="form-control @error('text_en') is-invalid @enderror"value="{{ $customerfeedbacks->text_en }}"
                                           autocomplete="off" placeholder="Например: Tекст" name="text_en" type="text">
                                    @error('text_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="col-12 form-group mb-3">
                                    <img src="{{ asset( 'storage/' . $customerfeedbacks->image) }}" class="img-fluid"
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

