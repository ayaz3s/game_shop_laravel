<div class="cart-block">
    <form action="/cart/update" method="POST">
        @csrf
        <div class="py-1"></div>
        <button class="btn btn-light btn-sm">Update Cart</button>
        <div class="py-1"></div>
        <table cellpadding="6" cellspacing="1" style="width: 100%" border="0">
            <tr>
                <th>QTY</th>
                <th>Item Description</th>
                <th style="text-align: right">Item Price</th>
            </tr>

            @if($cart)
                @php $total=0 @endphp
                @foreach($cart as $product)
                    <tr>
                        <td>
                            <input style="width:40px; height: 25px" type="number" name="qty[]" value="{{ $product['qty'] }}">
                            <input type="hidden" name="id[]" value="{{ $product['id'] }}">
                        </td>
                        <td>{{ ucwords($product['title']) }}</td>
                        <td>$ {{ $product['price'] }}</td>

                        @php $total += $product['price'] * $product['qty'] @endphp
                    </tr>
                @endforeach
            @else
                <tr>
                    <td></td>
                    <td>Cart Is Empty</td>
                </tr>
            @endif

            <tr>
                <td></td>
                <td class="right">
                    <strong>Total</strong>
                </td>
                <td class="right" style="text-align: right">$ {{ $total ?? 0 }}</td>
            </tr>
        </table>
    </form>
    <br>
    <div class="pb-3 d-flex justify-content-md-between">
{{--        <form action="/cart/update" method="POST">--}}
{{--            @csrf--}}
{{--            <button type="submit" class="btn btn-light">Update Cart</button>--}}
{{--        </form>--}}
        <form action="/cart/empty" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-secondary">Empty cart</button>
        </form>
        <a href="/cart/show" class="btn btn-outline-light">Go to cart</a>
    </div>
</div>
