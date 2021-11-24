<div class="sub-title">
    <h2>Categories</h2>
</div>
<div>
    @foreach ($categories as $item)
        <p>
            <a class="dropdown-item" href="/category/{{ $item->category }}">{{ $item->category }}</a>   
        </p>
    @endforeach
</div>