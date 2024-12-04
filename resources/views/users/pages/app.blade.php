<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>

    @yield('main')

    {{-- bootstrap js --}}
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
        {{-- ajax jquery --}}
    <script src="{{ asset('ajax/jquery.js') }}" ></script>
    {{-- ajax jquery cdn
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    {{-- custom javascript --}}
    <script src="{{ asset('custom_js/custom.js') }}"></script>
    {{-- custom ajax --}}
    <script src="{{ asset('ajax/crud.js') }}"></script>

</body>
</html>