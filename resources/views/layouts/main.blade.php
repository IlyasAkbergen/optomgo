<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('parts.head')
    @include('parts.styles')
</head>
<body>
@include('components.loader')
<div id="app" v-cloak>
    <div id="page">
        @include('parts.navbar')

        @include('parts.flash')

        @yield('content')

        @include('parts.footer')
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop">
            <i class="icon-arrow-up2"></i>
        </a>
    </div>
</div>

@yield('scripts')
@include('parts.scripts')

</body>
</html>

