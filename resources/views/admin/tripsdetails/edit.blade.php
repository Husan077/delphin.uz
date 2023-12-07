@extends('layouts.admin')

@section('title')
    Информация о туре
@endsection

@section('main')
    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Редактирование обо мне</h1>
            <ul>
                <li><a href="{{ route('tripsdetails.index') }}">Все данные</a></li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('tripsdetails.update', $tripsdetails->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-4 form-group mb-3">
                                    <label>Заголовок (uz)</label>
                                        <input class="form-control @error('title_uz') is-invalid @enderror" value="{{ $tripsdetails->title_uz }}"
                                            autocomplete="off" placeholder="Например: Title" name="title_uz" type="text">
                                    @error('title_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Заголовок (ru)</label>
                                        <input class="form-control @error('title_ru') is-invalid @enderror" value="{{ $tripsdetails->title_ru }}"
                                            autocomplete="off" placeholder="Например: Title" name="title_ru" type="text">
                                    @error('title_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Заголовок (en)</label>
                                        <input class="form-control @error('text_2_en') is-invalid @enderror" value="{{ $tripsdetails->title_en }}"
                                            autocomplete="off" placeholder="Например: Title" name="title_en" type="text">
                                    @error('title_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="col-md-4 form-group mb-3">
                                    <label>Время путешествия (uz) </label>
                                    <input class="form-control @error('set_theday_uz') is-invalid @enderror" value="{{ $tripsdetails->set_theday_uz }}"
                                           autocomplete="off" placeholder="Например:set_theday_uz" name="set_theday_uz" type="text">
                                    @error('set_theday_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Время путешествия (ru) </label>
                                    <input class="form-control @error('set_theday_ru') is-invalid @enderror" value="{{ $tripsdetails->set_theday_ru }}"
                                           autocomplete="off" placeholder="Например:set_theday_ru" name="set_theday_ru" type="text">
                                    @error('set_theday_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Время путешествия (en) </label>
                                    <input class="form-control @error('set_theday_en') is-invalid @enderror" value="{{ $tripsdetails->set_theday_en }}"
                                           autocomplete="off" placeholder="Например:set_theday_en" name="set_theday_en" type="text">
                                    @error('set_theday_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                                <div class="col-md-6 form-group mb-3">
                                    <label>Время отправлени </label>
                                    <input class="form-control @error('departure_time') is-invalid @enderror" value="{{ $tripsdetails->departure_time }}"
                                           autocomplete="off" placeholder="Например:departure_time" name="departure_time" type="text">
                                    @error('departure_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Время возврата </label>
                                    <input class="form-control @error('return_time') is-invalid @enderror" value="{{ $tripsdetails->return_time }}"
                                           autocomplete="off" placeholder="Например:return_time" name="return_time" type="text">
                                    @error('return_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div  class="col-md-6 form-group mb-3">
                                    <label>Тип</label>
                                    <select required name="slug" class="form-control">
                                        <option selected>Выберите...</option>
                                        <option {{ $tripsdetails->slug == 'Автобус'? 'selected' : '' }} value="Автобус">Автобус</option>
                                        <option {{ $tripsdetails->slug == 'Самолет' ? 'selected' : '' }} value="Самолет">Самолет</option>
                                    </select>  
                                </div>


                                <div class="col-md-6 form-group mb-3">
                                    <label>Цена</label>
                                        <input class="form-control @error('price') is-invalid @enderror"  value="{{ $tripsdetails->price }}"
                                            autocomplete="off" placeholder="Например: Цена" name="price" type="text">
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="col-12 form-group mb-3">
                                    <label>Описание (uz)</label>
                                    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                                    <textarea class="form-control @error('description_uz') is-invalid @enderror" name="description_uz">{!! $tripsdetails->description_uz !!}</textarea>
                                    <script>
                                        CKEDITOR.replace('description_uz', {
                                                filebrowserUploadUrl: "{{ route('admin.tripsdetails.upload', ['_token' => csrf_token() ]) }}",
                                                filebrowserUploadMethod: 'form'
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-12 form-group mb-3">
                                    <label>Описание (ru)</label>
                                    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                                    <textarea class="form-control @error('description_ru') is-invalid @enderror" name="description_ru">{!! $tripsdetails->description_ru !!}</textarea>
                                    <script>
                                        CKEDITOR.replace('description_ru', {
                                                filebrowserUploadUrl: "{{ route('admin.tripsdetails.upload', ['_token' => csrf_token() ]) }}",
                                                filebrowserUploadMethod: 'form'
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-12 form-group mb-3">
                                    <label>Описание (en)</label>
                                    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                                    <textarea class="form-control @error('description_en') is-invalid @enderror" name="description_en">{!! $tripsdetails->description_en !!}</textarea>
                                    <script>
                                        CKEDITOR.replace('description_en', {
                                                filebrowserUploadUrl: "{{ route('admin.tripsdetails.upload', ['_token' => csrf_token() ]) }}",
                                                filebrowserUploadMethod: 'form'
                                            }
                                        );
                                    </script>
                                </div>

                               

                                <div class="col-12 form-group mb-3">
                                    <img src="{{ asset( 'storage/' . $tripsdetails->image) }}" class="img-fluid"
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
@endsection

