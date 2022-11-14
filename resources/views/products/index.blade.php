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
                    @foreach($products as $product)
                        <div class="col-md-4 mb-4 game">
                            <div class="game-price">${{ $product->price }}</div>
                            <a href="products/{{ $product->id }}">
                                <img src="{{ asset('images/'.$product->image) }}" alt="" width="200" height="250">
                            </a>
                            <div class="game-title">
                                {{ ucwords($product->title) }}
                            </div>
                            <div class="game-add">
                                <form action="/cart/add" method="POST">
                                    @csrf
                                    QTY: <input class="qty" type="number" min="1" name="qty" value="1">
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <button type="submit" class="btn btn-primary">Add To Cart</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </x-main-area>

        </div>
    </div>
</x-layout>
