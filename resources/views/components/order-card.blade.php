<div class="col-md-4 text-center">
    <div class="product-entry">
        <div class="product-img" style="background-image: url(images/item-5.jpg);">
            <p class="tag"><span class="new">New</span></p>
            <div class="cart">
                <p>
                    <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span>
                    <span><a href="product-detail.html"><i class="icon-eye"></i></a></span>
                    <span><a href="#"><i class="icon-heart3"></i></a></span>
                    <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                </p>
            </div>
        </div>
        <div class="desc">
            <h3>
                <a href="{{ url('/offers/') . $offer->id }}">
                    {{ $offer->title }}
                </a>
            </h3>
            <p class="price">
                <span>{{ $offer->price }}</span>
                <span class="sale"> {{ $offer->retail_price }}</span>
            </p>
        </div>
    </div>
</div>