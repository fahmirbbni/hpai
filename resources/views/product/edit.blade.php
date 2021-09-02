@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit</h2>
        </div>
    </div>
</div>


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('product.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row justify-content-md-center">
         <div class="col-5">
            <div class="form-group">
                <strong>ID:</strong>
                <input type="text" name="id" value="{{$product->id}}" class="form-control" placeholder="ID" readonly="">
            </div>

            <div class="form-group">
                <strong>Name Product:</strong>    
                <input type="text" name="name" class="form-control" value="{{$product->name}}">
            </div>

            <div class="form-group">
                <strong>Type Product:</strong>    
                <input type="text" name="type" class="form-control" value="{{ $product->type }}">
            </div>

            <div class="form-group">
                <strong>Description:</strong>    
                <input type="text" name="description" class="form-control" value="{{$product->description}}">
            </div>

            <div class="form-group">
                <strong>Price:</strong>    
                <input type="text" name="plat_no" class="form-control" value="{{$product->price}}">
            </div>

            <div class="form-group">
                <strong>Quantity:</strong>    
                <input type="number" name="quantity" class="form-control" value="{{$product->quantity}}">
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <a class="btn btn-primary text-light" onclick="history.back(-1)">< Back</a>
        <button type="submit" class="btn btn-success">Submit</button>
        </div>

    </div>
</form>

    
@endsection