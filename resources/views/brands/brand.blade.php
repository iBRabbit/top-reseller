@extends('layouts.main')

@section('content')
    <div class="brand-container d-flex flex-row justify-content-evenly mt-5" style="width:100%">
        <div class="left-brand-info " style="width:30%">
            <img src="https://www.pollock.com/wp-content/uploads/2019/10/shopping-bags-500x500-300x250.png"
                class="card-img-top" alt="...">
        </div>

        <div class="right-brand-info " style="width:60%">
            <h1>{{ $brand->brand_name }}</h1>
            <p>{{ $brand->description }}</p>

        </div>
    </div>

    <h3 class="mt-4">{{ $brand->brand_name }}'s items</h3>

    <div class="brand-items-container">
        <div class="brand-items-card-container d-flex flex-row me-3 mb-3">
            @foreach ($items as $item)
                <div class="card" style="width: 18rem;">
                    <img src="https://www.pollock.com/wp-content/uploads/2019/10/shopping-bags-500x500-300x250.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->item_name }}</h5>
                        <p class="card-text">{{ $item->brand->brand_name}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
