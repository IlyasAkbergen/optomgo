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

<div class="modal fade" id="logoutModal" tabindex="-1"
     role="dialog" aria-labelledby="logoutModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="modal-content" method="post"
              action="{{route('logout')}}">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title"
                    id="exampleModalLabel">
                    {{ __('Ready to quit?') }}
                </h5>
            </div>
            <div class="modal-body">
                {{ __('Are you sure to quit?') }}
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary"
                        type="button" data-dismiss="modal">
                    {{ __('Cancel') }}
                </button>
                <button type="submit" class="btn btn-primary">
                    {{ __('Quit') }}
                </button>
            </div>
        </form>
    </div>
</div>

@yield('scripts')
@include('parts.scripts')

</body>
</html>

