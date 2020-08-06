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
                            <a href="shop.html">Shop</a>
                            <ul class="dropdown">
                                <li><a href="product-detail.html">Product Detail</a></li>
                                <li><a href="cart.html">Shipping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="order-complete.html">Order Complete</a></li>
                                <li><a href="add-to-wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        @if (Auth::check())
                            <li class="has-dropdown">
                                <a href="/profile">
                                    {{ auth()->user()->email }}
                                </a>
                                <ul class="dropdown">
                                    <li><a href="/settings">Settings</a></li>
                                    <li>
                                        <a href="#"
                                           data-toggle="modal"
                                           data-target="#logoutModal">Logout</a>
                                    </li>
                                </ul>
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