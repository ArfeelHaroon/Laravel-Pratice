<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        @yield('section')
    </div>
    {{-- // JQ CDN --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    {{-- //Bootstrap Js  --}}
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    {{-- //Custom JS --}}
    <script src="{{ asset('assets/jQuery.js') }}"></script>
</body>

</html>
