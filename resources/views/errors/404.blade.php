@section('title')
    Delphin
@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <div class="error-wrapper pt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="error-content text-center " style="margin-top: 100">
                        <div class="error-vactor text-center">
                            <img src="{{ asset('assets/images/shapes/error-vactor.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="error-text">
                            <h2>Эта страница не может быть найдена</h2>
                            <p>Убедитесь, что все URL-адреса указаны правильно, повторите попытку и вернитесь на сайт с помощью кнопки «Назад» ниже. </p>
                            <div class="error-btn">
                               <button class="btn-dark"><a style="color: white;" href="{{ route('home') }}"><i class="bi bi-house-door"></i> «Назад</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
