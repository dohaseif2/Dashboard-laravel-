@extends('products.layout')
@section('content')
    <br>
    <a href="{{route('products.create')}}" class="btn btn-primary"> Create</a>
    <br><br>
    @if($message= Session::get('success'))
        <div class="alert alert-primary" role="alert">
            {{$message}}
        </div>
    @endif

    <table class="table">
        <thead class="table-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">details</th>
            <th scope="col">price</th>
            <th scope="col">image</th>
            <th scope="col">control</th>

        </tr>
        </thead>
        <tbody>

        @foreach($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->details}}</td>
            <td>{{$product->price}}</td>
            <td><img src="images/{{$product->image}}" width="50px" height="50px"></td>
            <td>

                <form action="{{route('products.destroy',$product->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')

                    <a type="button" class="btn btn-primary" href="{{route('products.show',$product->id)}}" >Show</a>
                    <a  class="btn btn-info" href="{{route('products.edit',$product->id)}}">Edit</a>

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>




            </td>
        </tr>

        @endforeach


        </tbody>
    </table>
    {!!  $products->links() !!}
@endsection
