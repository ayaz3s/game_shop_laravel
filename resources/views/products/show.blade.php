<x-layout>
    <div class="row mt-4">
        <div class="col-md-4">

            <x-cart-block :cart="$cart"/>

            <x-category-list :categories="$categories"/>

            <x-popular-list :popular="$popular"/>

        </div>

        <div class="col-md-8">

            <x-main-area>
                <div class="row">
                    <div class="col-md-5 details">
                        <img src="{{ asset('images/'.$product->image) }}" alt="" width="250" height="300">
                    </div>
                    <div class="col-md-7">
                        <h3>{{ ucwords($product->title) }}</h3>
                        <div class="details-price">
                            Price: ${{ $product->price }}
                        </div>
                        <div class="details-description">
                            <p>{{ ucfirst($product->description) }}</p>
                        </div>
                        <div class="details-buy">
                            <form action="/cart/add" method="POST">
                                @csrf
                                QTY: <input class="qty" type="number" min="1" name="qty" value="1">
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <button type="submit" class="btn btn-primary">Add To Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </x-main-area>

        </div>
    </div>
</x-layout>
