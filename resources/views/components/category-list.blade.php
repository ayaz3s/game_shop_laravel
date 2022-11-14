@props(['categories'])

<div class="category-list mt-4">
    <div class="list-group">
        <h4 class="list-group-item bg-dark text-light"><strong>Categories</strong></h4>
        @foreach($categories as $category)
            <a href="#" class="list-group-item list-group-item-action">{{ ucfirst($category->name) }}</a>
        @endforeach
    </div>
</div>
