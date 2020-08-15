<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>
@include('includes.navbar')
@yield('content')
    @include('includes.footer')
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>