<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">


        </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg" alt="iPhone X 256GB">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>{{$product->price}}</p>
            <p>
                <a href="{{route('basket')}}" class="btn btn-primary" role="button">В корзину</a>
                <a href="{{route('product',[$product->category->code,$product->code])}}" class="btn btn-default"
                   role="button">подробнее</a>
            </p>
        </div>
    </div>
</div>
