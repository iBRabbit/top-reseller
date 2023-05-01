@extends('layouts.main')

@section('content')
    <div class="home-container">
        <div class="home-banner mt-5">
            <div class="col-12 d-flex justify-content-center p-0">
                <img src="https://dkemhji6i1k0x.cloudfront.net/000_clients/84990/page/84990A4MpBhxj.jpg" alt=""
                    width="100%">
            </div>
        </div>
    
        <div class="product-category mt-5" >
            <h3 class= "p-2" style="background-color: orange; width:50%">All Items</h3>
        </div>

        @include('partials.item')  
    </div>
@endsection
