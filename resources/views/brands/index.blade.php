@extends('layouts.main')

@section('content')

    <h2 class="text-center mt-4 fw-bold">TOP 5 BRANDS</h2>
    <div class="brand-container d-flex flex-row m-3 mt-3">
        @foreach ($brands as $brand)
            <div class="card text-center m-3" style="width: 18rem;">
                <img src="https://www.pollock.com/wp-content/uploads/2019/10/shopping-bags-500x500-300x250.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $brand->brand_name }}</h5>
                    <a href="/brands/{{ $brand->id }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
