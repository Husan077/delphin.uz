@extends('layouts.admin')
@section('title')
    Часто задаваемые вопросы
@endsection
@section('main')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="breadcrumb">
            <h1 class="mr-2">Часто задаваемые вопросы</h1>
            <ul>
{{--                <li><a style="color: blue; border-bottom: 1px solid blue " href="{{ route('faqs.create') }}">Добавить новые данные</a></li>--}}
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
                                            <th scope="col">id</th>
                                            <th>click_trans_id </th>
                                            <th>service_id </th>
                                            <th>click_paydoc_id </th>
                                            <th>merchant_trans_id </th>
                                            <th>amount </th>
                                            <th>status </th>
                                            <th>action </th>
                                            <th>error </th>
                                            <th>error_note </th>
                                            <th>sign_time </th>
                                            <th>sign_string </th>
                                        </tr>
                                        </thead>
                                        <tbody class="result">
                                        @foreach($click_users as $click_user)
                                            <tr>
{{--                                                protected $fillable = [--}}
{{--                                                'click_trans_id',--}}
{{--                                                'service_id',--}}
{{--                                                'click_paydoc_id',--}}
{{--                                                'merchant_trans_id',--}}
{{--                                                'amount',--}}
{{--                                                'status',--}}
{{--                                                'action',--}}
{{--                                                'error',--}}
{{--                                                'error_note',--}}
{{--                                                'sign_time',--}}
{{--                                                'sign_string'--}}
{{--                                                ];--}}
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $click_user->click_trans_id }}</td>
                                                <td>{{ $click_user->service_id }}</td>
                                                <td>{{ $click_user->click_paydoc_id }}</td>
                                                <td>{{ $click_user->merchant_trans_id }}</td>
                                                <td>{{ $click_user->amount }}</td>
                                                <td>{{ $click_user->status }}</td>
                                                <td>{{ $click_user->action }}</td>
                                                <td>{{ $click_user->error }}</td>
                                                <td>{{ $click_user->error_note }}</td>
                                                <td>{{ $click_user->sign_time }}</td>
                                                <td>{{ $click_user->sign_string }}</td>
                                                <td>{{ $click_user->time }}</td>
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


