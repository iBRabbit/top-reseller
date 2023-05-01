@extends('layouts.main')

@section('content')
    <div class="item-container d-flex flex-row">
        <div class="item-left-container" style="width:30%">
            <img src="https://www.pollock.com/wp-content/uploads/2019/10/shopping-bags-500x500-300x250.png" alt="">
        </div>

        <div class="item-right-container" style="width:60%">
            <h1>{{ $item->item_name }}</h1>
            <h2 style="color:orange">{{ $item->brand->brand_name }}</h2>
            <h3>{{ "Rp." . number_format($item->price) . "/piece" }}</h3>
            <p> Description : </p>
            <p>{{ $item->description }}</p>
        </div>
    </div>
@endsection