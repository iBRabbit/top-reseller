
<div class="product-container mt-5">
    @foreach ($items->chunk(4) as $chunk)
        <div class="product-row-container d-flex flex-row m-2">

            @foreach ($chunk as $item)
                <div class="product-row-container d-flex flex-column m-2">
                    <div class="card" style="width: 18rem;">

                        @if ($item->category->category_name == 'Bag')
                            <img src="https://i.pinimg.com/originals/8a/3c/7f/8a3c7fbd4d9532a244ef3d5027d6e4c6.jpg" class="card-img-top m-3" alt="{{ $item->category->category_name }}" style="width:15vw; height:30vh">
                        
                        @elseif ($item->category->category_name == 'Shirt')
                            <img src="https://uxwing.com/wp-content/themes/uxwing/download/clothes-and-accessories/men-t-shirt-icon.png" alt="{{ $item->category->category_name }}" class="card-img-top m-3" style="width:15vw; height:30vh">

                        @elseif ($item->category->category_name == 'Shoes')
                            <img src="https://cdn-icons-png.flaticon.com/512/5499/5499206.png" alt="{{ $item->category->category_name }}" class="card-img-top m-3" style="width:15vw; height:30vh">

                        @elseif ($item->category->category_name == 'Dress')
                            <img src="https://cdn-icons-png.flaticon.com/512/1059/1059053.png" alt="{{ $item->category->category_name }}" class="card-img-top m-3" style="width:15vw; height:30vh">

                        @endif

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