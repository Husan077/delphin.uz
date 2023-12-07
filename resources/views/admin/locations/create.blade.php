@extends('layouts.admin')

@section('title')
  Местоположение
@endsection

@section('main')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="breadcrumb">
            <h1 class="mr-2">Добавить новые данные</h1>
            <ul>
                <li><a style="color: blue; border-bottom: 1px solid blue "  href="{{ route('locations.index') }}">Все данные</a></li>
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
                        <form action="{{ route('locations.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 form-group mb-3">
                                    <label>Адрес (uz)</label>
                                    <input class="form-control @error('address_uz') is-invalid @enderror"
                                           autocomplete="off" placeholder="Например: Адрес" name="address_uz" type="text">
                                    @error('address_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Адрес (ru)</label>
                                    <input class="form-control @error('address_ru') is-invalid @enderror"
                                           autocomplete="off" placeholder="Например: Адрес" name="address_ru" type="text">
                                    @error('address_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                  <label>Адрес (en)</label>
                                  <input class="form-control @error('address_en') is-invalid @enderror"
                                         autocomplete="off" placeholder="Например: Адрес" name="address_en" type="text">
                                  @error('address_en')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                                </div>

                               

                                <div class="col-md-4 form-group mb-3">
                                  <label>Координата lat </label>
                                  <input class="form-control @error('map_lat') is-invalid @enderror"
                                         autocomplete="off" placeholder="Например: 41.293125" name="map_lat" type="text">
                                  @error('map_lat')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                  <label>Координата lng</label>
                                  <input class="form-control @error('map_lng') is-invalid @enderror"
                                         autocomplete="off" placeholder="Например: 69.293125" name="map_lng" type="text">
                                  @error('map_lng')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                                </div>

                                 <div class="col-md-4 form-group mb-3">
                                  <label>Hомер телефона </label>
                                  <input class="form-control @error('phone') is-invalid @enderror"
                                         autocomplete="off" placeholder="Например: 99 999 99 99" name="phone" type="text">
                                  @error('phone')
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
      </div>
    </div>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
@endsection



    