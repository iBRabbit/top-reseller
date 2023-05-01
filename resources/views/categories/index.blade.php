@extends('layouts.main')

@section('content')
    <div class="product-category mt-5" >
        <h3 class= "p-2" style="background-color: orange; width:50%">{{ $category->category_name }}</h3>
    </div>

    @include('partials.item')  

@endsection