<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- father icons --}}
    <script src="https://unpkg.com/feather-icons"></script>
    {{-- font google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,900&display=swap" rel="stylesheet">
</head>
<body>
    @include('landingPage.layouts.nav')
    @yield('content')

    {{-- <script src="{{ asset('js/script.js') }}"></script> --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        feather.replace();
    </script>
</body>
</html>
