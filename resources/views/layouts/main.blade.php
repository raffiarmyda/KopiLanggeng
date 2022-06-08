<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Great+Vibes')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('https://fonts.googleapis.com/css?family=Raleway')}}" rel='stylesheet'>
    <link rel="stylesheet"
          href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css')}}"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="{{asset('https://kit.fontawesome.com/621136387c.js')}}" crossorigin="anonymous"></script>
    <title>Kopi Langgeng | {{ $title }}</title>
</head>
<body>


@stack('css')

@if(!\Illuminate\Support\Facades\Request::is('*print*'))
    @include('partials.navbar')
@endif
@yield('container')
</body>
@yield('footer')
<script src="{{asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js')}}"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js')}}"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</html>
