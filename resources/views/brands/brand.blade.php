@extends('layouts.main')

@section('content')
    <div class="brand-container d-flex flex-row justify-content-evenly mt-5" style="width:100%">
        <div class="left-brand-info " style="width:30%">
            <img src="https://www.pollock.com/wp-content/uploads/2019/10/shopping-bags-500x500-300x250.png"
                class="card-img-top" alt="...">
        </div>

        <div class="right-brand-info " style="width:60%">
            <h1>{{ $brand->brand_name }}</h1>
            <p>Address : Palmerah - Indonesia </p>
            <p>Email : {{ strtolower($brand->brand_name) . "@binus.ac.id"}}</p>
            <p>{{ $brand->description }}</p>

        </div>
    </div>

    <h3 class="mt-4">{{ $brand->brand_name }}'s items</h3>

    @include('partials.item')
@endsection
