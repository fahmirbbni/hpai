@extends('layouts.master')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> 
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="row justify-content-md-center">

        <div class="col-5">

            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name Product">
            </div>
            <div class="form-group">
                <strong>Type:</strong>
                <input type="text" name="type" class="form-control" placeholder="Type product">
            </div>
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:50px" name="description"
                    placeholder="Description"></textarea>
            </div>
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" class="form-control" placeholder="Put the price">
            </div>
            <div class="form-group">
                <strong>Quantity:</strong>
                <input type="number" name="quantity" class="form-control" placeholder="Quantity">
            </div>
            <div style="float: right;" class="form-group">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> < Back</a>
                <button type="submit" class="btn btn-success text-light">Submit</button>
            </div>
        
        </div>

    </div>
</form>

@endsection