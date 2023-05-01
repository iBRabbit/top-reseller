@extends('layouts.main')

@section('content')
    <div class="brand-container d-flex flex-row justify-content-evenly mt-5" style="width:100%">
        <div class="left-brand-info " style="width:30%">
            <img src="https://www.pollock.com/wp-content/uploads/2019/10/shopping-bags-500x500-300x250.png" class="card-img-top" alt="...">
        </div>

        <div class="right-brand-info " style="width:60%"> 
            <h1>{{ $brand->brand_name }}</h1>
            <p>{{ $brand->description }}</p>
            
        </div>

    </div>


    <div class="brand-items-container">
        
    </div>
@endsection