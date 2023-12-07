<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" oncontextmenu="return false">

@include('site.classes.head')

<body style="overflow-x: hidden">
@include('site.classes.header')
@yield('content')
@include('sweetalert::alert')
@include('site.classes.footer')
@include('site.classes.scripts')

</body>

</html>
