<x-layout>
    <div class="row mt-4">
        <div class="col-md-4">

            <x-cart-block :cart="$cart"/>

            <x-category-list :categories="$categories"/>

            <x-popular-list :popular="$popular"/>

        </div>

        <div class="col-md-8">

            <x-main-area>
                <table class="table table-striped">
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    @php
                        $subtotal = 0;
                        $shipping = 0;
                    @endphp
                    @if($cart)
                        @foreach($cart as $product)
                            <tr>
                                <td>{{ ucwords($product['title']) }}</td>
                                <td>{{ $product['qty'] }}</td>
                                <td>${{ $product['price'] }}</td>
                            </tr>
                            @php $subtotal += $product['price'] * $product['qty'] @endphp
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">No Item In Cart</td>
                        </tr>
                    @endif

                    <tr>
                        <td colspan="3" class="cart-subtotal">
                            Subtotal: ${{ $subtotal }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="cart-shipping">
                            Shipping: ${{ $shipping }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="cart-total">
                            Total: ${{ $total = $subtotal + $shipping }}
                        </td>
                    </tr>
                </table>
                <h3>Shipping Info</h3>
                <form action="">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="address">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" placeholder="city">
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" placeholder="state">
                    </div>
                    <div class="form-group">
                        <label for="zip">Zip Code</label>
                        <input type="text" class="form-control" id="zip" placeholder="zip code">
                    </div>
                    <button type="submit" class="btn btn-primary">Checkout</button>
                </form>
            </x-main-area>

        </div>
    </div>
</x-layout>
