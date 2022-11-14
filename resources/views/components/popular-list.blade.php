@props(['popular'])

<div class="popular-list mt-4">
    <div class="list-group">
        <h4 class="list-group-item bg-light text-dark"><strong>Most Popular</strong></h4>
        @foreach($popular as $product)
            <a href="/products/{{ $product->id }}" class="list-group-item list-group-item-action">{{ ucwords($product->title) }}</a>
        @endforeach
    </div>
</div>
