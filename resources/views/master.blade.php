<!doctype html>
<html lang="en">
<head>
@include('Frontend.includes.metaTag')
<title>@yield('title')</title>
@include('Frontend.includes.headLinksCss')
</head>
<body>
@include('Frontend.includes.navbar')
@yield('body')
@include('Frontend.includes.footer')
@include('Frontend.includes.js')
</body>
</html>
