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
            <h1 class="mr-2">Отзывы клиентов</h1>
            <ul>
                <li><a style="color: blue; border-bottom: 1px solid blue " href="{{ route('customerfeedbacks.create') }}">Добавить новые данные</a></li>
            </ul>
        </div>
        </div>
      </div>
    </div>
    <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="row m-0 py-3">
                                <div class="col-12">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th>Имя клиента (uz)</th> 
                                            <th>Tекст (uz)</th>
                                            <th>Фото</th>
                                            <th>Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody class="result">
                                        @foreach($customerfeedbacks as $customerfeedback) 
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $customerfeedback->customer_name_uz }}</td>
                                                <td>{{ $customerfeedback->text_uz }}</td>
                                                <td><img src="{{ asset('storage/' . $customerfeedback->image) }}" style="width: 100px; height: 60px;"></td>
                                                <td class="d-flex">
                                                    <a class="text-success mr-2" href="{{ route('customerfeedbacks.edit', $customerfeedback->id) }}"><i class="nav-icon fas fa-pen font-weight-bold"></i></a>
                                                    <a data-toggle="modal" data-target="#deletesModal{{$customerfeedback->id}}" class="text-danger mr-2" href="{{ route('customerfeedbacks.destroy', $customerfeedback->id) }}"><i class="nav-icon far fa-times-circle font-weight-bold"></i></a>
                                                    <div class="modal fade" id="deletesModal{{$customerfeedback->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteModal">Удалить пост?</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item">
                                                                            <b>Вы действительно хотите удалить?</b>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('customerfeedbacks.destroy', $customerfeedback->id) }}" method="post">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                        <button class="btn btn-danger mr-2 cursor-pointer">Удалить</button>
                                                                    </form>
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Закрыть</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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


