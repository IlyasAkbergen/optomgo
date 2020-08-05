<!DOCTYPE HTML>
<html>
<head>
    @include('parts.head')
    @include('parts.styles')
</head>
<body>
<div id="app">
    @include('components.loader')

    <div id="page">
        @include('parts.navbar')

        @yield('content')

        @include('parts.footer')
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>
</div>

@yield('scripts')
@include('parts.scripts')

</body>
</html>

