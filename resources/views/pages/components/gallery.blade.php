<div class="gallery">
    @foreach($itens as $item)
        <div class="gallery-item">
            <img src="{{ $item }}">
        </div>
    @endforeach
</div>
