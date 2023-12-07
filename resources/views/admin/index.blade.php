@extends('layouts.admin')

@section('title')
    Админ панель
@endsection

@section('main')
    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Админ панель</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="far fa-image" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Все баннеры</p>
                        <p class="lead text-22 m-0">{{ $banners ?? '0' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="fas fa-plane" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Туры</p>
                        <p class="lead text-22 m-0">{{ $tripsdetails ?? '0' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="nav-icon fab fa-accusoft" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Красивые места</p>
                        <p class="lead text-22 m-0">{{ $beautifuladdres ?? '0' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="nav-icon fas fa-chart-pie" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Результаты</p>
                        <p class="lead text-22 m-0">{{ $beautifuladdres ?? '0' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="nav-icon fas fa-id-card" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Фотографии клиентов</p>
                        <p class="lead text-22 m-0">{{ $customerimages ?? '0' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="nav-icon fas fa-comments" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Отзывы клиентов</p>
                        <p class="lead text-22 m-0">{{ $customerfeedbacks ?? '0' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="nav-icon fas fa-file-certificate" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">О Компании</p>
                        <p class="lead text-22 m-0">{{ $ourcompanys ?? '0' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="nav-icon fas fa-handshake" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Почему мы?</p>
                        <p class="lead text-22 m-0">{{ $whyus ?? '0' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="nav-icon  fas fa-question" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Часто задаваемые вопросы</p>
                        <p class="lead text-22 m-0">{{ $faqs ?? '0' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="nav-icon fas fa-map-marked-alt" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Локатция</p>
                        <p class="lead text-22 m-0">{{ $locations ?? '0' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="nav-icon fas fa-wrench" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Настройка</p>
                        <p class="lead text-22 m-0">{{ $setting ?? '0' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
