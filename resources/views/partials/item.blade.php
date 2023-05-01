
<div class="product-container mt-5">
    @foreach ($items->chunk(4) as $chunk)
        <div class="product-row-container d-flex flex-row m-2">

            @foreach ($chunk as $item)
                <div class="product-row-container d-flex flex-column m-2">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.pollock.com/wp-content/uploads/2019/10/shopping-bags-500x500-300x250.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->item_name }}</h5>
                            <p class="card-text" style="color:orange">{{ $item->brand->brand_name}}</p> 
                            <p class="card-text">{{ 'Rp' . number_format($item->price)}}</p> 
                            <a href="/item/{{ $item->id }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @endforeach
</div>