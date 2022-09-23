<html lang="ja" style="height: auto;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="http://localhost:8000/vendor/fontawesome-free/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="sidebar-mini sidebar-collapse" style="height: auto;">
    <div class="wrapper">
        @yield('menubar')
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container mw-100">
                <a class="navbar-brand" href="http://localhost:8000"> 筋トレ習慣アプリ </a>
            </div>
        </nav>
        <div class="content-wrapper" style="min-height: 665px;">
            <div class="content-header">
                <div class="container-fluid">
                    <h1>@yield('title')</h1>
                </div>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>