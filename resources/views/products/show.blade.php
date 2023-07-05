@extends('products.layout')
@section('content')

    <br>
    <div class="badge bg-dark"><h2>Information about {{$product->name}}</h2></div>
    <br><br>
    <div class="card">
        <h5 class="card-header">{{$product->name}}</h5>
        <div class="card-body">
            <h5 class="card-title">Price : {{$product->price}} $</h5>
            <img src="images/{{$product->image}}" width="50px" height="50px" >

            <p class="card-text">{{$product->details}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection
