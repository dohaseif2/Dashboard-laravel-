@extends('products.layout')
@section('content')
    <div class="container w-50 mt-5">
    <br>
    <a href="{{route('products.index')}}" class="btn btn-primary">Return to products</a>
    <br><br>
    <form method="post" action="{{route('products.update',$product->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Product name</label>
            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="name" value="{{$product->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice1" class="form-label" >Price</label>
            <input type="text" class="form-control" id="exampleInputPrice" name="price" value="{{$product->price}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputImage1" class="form-label">Image</label>
            <input type="file" class="form-control" id="exampleInputImage" name="image" value="{{$product->image}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice1" class="form-label" >details</label>
            <textarea type="text" class="form-control" id="exampleInputDetails" name="details">{{$product->details}}</textarea>

        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
