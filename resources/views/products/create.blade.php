@extends('products.layout')
@section('content')
<div class="container w-50 mt-5">

    <a href="{{route('products.index')}}" class="btn btn-primary">Return to products</a>
    <br><br>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Product name</label>
            <input type="text" class="form-control" id="exampleInputName1" name="name" aria-describedby="nameHelp" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice1" class="form-label" >Price</label>
            <input type="text" class="form-control" id="exampleInputPrice" name="price">
        </div>
        <div class="mb-3">
            <label for="exampleInputImage1" class="form-label">Image</label>
            <input type="file" class="form-control" id="exampleInputImage" name="image">
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice1" class="form-label" >details</label>
            <textarea type="text" class="form-control" id="exampleInputDetails" name="details"></textarea>

        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection

