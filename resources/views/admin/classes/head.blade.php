<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title')</title>
{{--internet icon logo--}}
<link rel="icon" type="image/png" href="{{ asset('assets/images/logo/16.png') }}" sizes="16x16">
<link rel="icon" type="image/png" href="{{ asset('assets/images/logo/32.png') }}" sizes="32x32">
<link rel="icon" type="image/png" href="{{ asset('assets/images/logo/96.png') }}" sizes="96x96">
<link rel="icon" type="image/png" href="{{ asset('assets/images/logo/64.png') }}" sizes="96x96">
<link rel="apple-touch-icon" type="image/png" href="{{ asset('assets/images/logo/76.png') }}" sizes="76x76">
<link rel="apple-touch-icon" type="image/png" href="{{ asset('assets/images/logo/120.png') }}" sizes="120x120">
<link rel="apple-touch-icon" type="image/png" href="{{ asset('assets/images/logo/152.png') }}" sizes="152x152">
<link rel="apple-touch-icon" type="image/png" href="{{ asset('assets/images/logo/180.png') }}" sizes="180x180">
<link rel="icon" href="{{ asset("assets/images/favicon.png") }}" type="image/gif" sizes="20x20">
{{--internet icon logo end--}}
<link rel="stylesheet" href="{{ asset('https://pro.fontawesome.com/releases/v5.10.0/css/all.css') }}" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="{{ mix('css/admin.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

{{--   F12 block  --}}
<script language="JavaScript">

    window.onload = function () {
        document.addEventListener("contextmenu", function (e) {
            e.preventDefault();
        }, false);
        document.addEventListener("keydown", function (e) {
            //document.onkeydown = function(e) {

            // "I" key
            if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                disabledEvent(e);
            }
            // "J" key
            if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                disabledEvent(e);
            }
            // "S" key + macOS
            if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                disabledEvent(e);
            }
            // "U" key
            if (e.ctrlKey && e.keyCode == 85) {
                disabledEvent(e);
            }
            // "F12" key
            if (event.keyCode == 123) {
                disabledEvent(e);
            }
        }, false);
        function disabledEvent(e) {
            if (e.stopPropagation) {
                e.stopPropagation();
            } else if (window.event) {
                window.event.cancelBubble = true;
            }
            e.preventDefault();
            return false;
        }
    }
    //edit: removed ";" from last "}" because of javascript error
</script>
