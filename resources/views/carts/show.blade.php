<x-layout>
    <div class="row mt-4">
        <div class="col-md-4">

            <x-cart-block :cart="$cart"/>

            <x-category-list :categories="$categories"/>

            <x-popular-list :popular="$popular"/>

        </div>

        <div class="col-md-8">

            <x-main-area>
                @if($cart)
                    <form action="">
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
                            @foreach($cart as $product)
                                <tr>
                                    <td>{{ ucwords($product['title']) }}</td>
                                    <td>{{ $product['qty'] }}</td>
                                    <td>${{ $product['price'] }}</td>
                                </tr>
                                @php $subtotal += $product['price'] * $product['qty'] @endphp
                            @endforeach
                            <tr>
                                <td></td>
                                <td class="">
                                    <strong>Subtotal:</strong>
                                </td>
                                <td class="">
                                    <strong>${{ $subtotal }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="">
                                    <strong>Shipping:</strong>
                                </td>
                                <td>
                                    <strong>${{ $shipping }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="">
                                    <strong>Total:</strong>
                                </td>
                                <td class="">
                                    <strong>${{ $total = $subtotal + $shipping }}</strong>
                                </td>
                            </tr>
                        </table>
                        @auth
                            @csrf
                            <h3>Shipping Info</h3>
                            <!-- form -->
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="address">
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" class="form-control" id="city" placeholder="city">
                            </div>
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" name="state" class="form-control" id="state" placeholder="state">
                            </div>
                            <div class="form-group">
                                <label for="zip">Zip Code</label>
                                <input type="text" name="zipcode" class="form-control" id="zip" placeholder="zip code">
                            </div>
                            <button type="submit" class="btn btn-primary">Checkout</button>
                        @else
                            <a href="/users/register" class="btn btn-primary">Create Account</a>
                        @endauth

                    </form>
                @else
                    <p>There is no item in cart.</p>
                @endif
            </x-main-area>

        </div>
    </div>
</x-layout>
