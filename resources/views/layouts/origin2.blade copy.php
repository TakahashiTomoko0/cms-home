<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ確認</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')
</body>
</html>
@include('layouts.header')

@include('layouts.page_header')

@yield('content')

<!-- @include('layouts.sidebar',['SideList'=>$MiddleList['SideList']]) -->

@include('layouts.footer')

