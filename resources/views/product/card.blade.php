
        <div class="col-md-4 col-md4">
            <div class="col-md1 simpleCart_shelfItem product-wrapper">
                <a href="/product/{{$product->id}}">
                    <img class="img-responsive" src="{{ asset("$product->image") }}" alt="" />
                </a>
                <h3><a href="/product/{{$product->id}}">{{$product->name}}</a></h3>
                <div class="price">
                    <h5 class="item_price">${{$product->price}}</h5>
                    <a href="#" class="item_add">Add To Cart</a>
                    <div class="clearfix"> </div>

        </div>
        <div class="clearfix"> </div>
    </div>
</div>
