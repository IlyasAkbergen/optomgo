<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                    <div id="colorlib-logo">
                        <a href="{{ url('/') }}">
                            {{ config('app.name') }}
                        </a>
                    </div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                            <a href="/">Home</a>
                        </li>
                        <li class="has-dropdown">
                            <v-tooltip>
                                <template v-slot:trigger>
                                    <a href="shop.html">Shop</a>
                                </template>
                                <template v-slot:popup>
                                    <ul class="dropdown">
                                        <li>
                                            <a href="product-detail.html">
                                                Product Detail
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                Shipping Cart
                                            </a>
                                        </li>
                                    </ul>
                                </template>
                            </v-tooltip>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        @if (Auth::check())
                            <li class="has-dropdown">
                                <v-tooltip>
                                    <template v-slot:trigger>
                                        <a href="/profile">
                                            {{ auth()->user()->email }}
                                        </a>
                                    </template>
                                    <template v-slot:popup>
                                        <ul class="dropdown">
                                            <li><a href="/settings">Settings</a></li>
                                            <li>
                                                <a href="#"
                                                   data-toggle="modal"
                                                   data-target="#logoutModal">Logout</a>
                                            </li>
                                        </ul>
                                    </template>
                                </v-tooltip>
                            </li>
                        @else
                            <li>
                                <a href="/login">Sign In</a>
                                |<a href="/register">Register</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>