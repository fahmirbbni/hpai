@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Detail</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>ID:<br></strong>
                <h5>{{ $product->id }}</h5>
            </div>
            
            <div class="form-group">
                <strong>Product:</strong><br>
                <h5>{{$product->name}}</h5>
            </div>
            
            <div class="form-group">
                <strong>Type:</strong>
                <h5>{{$product->type}}</h5>
            </div>
        </div>

        <div class="col">
            
            <div class="form-group">
                <strong>Description:</strong>
                <h5>{{ $product->description}}</h5>
            </div>
            <div class="form-group">
                <strong>Price:</strong>
                <h5>{{$product->price}}</h5>
            </div>
            <div class="form-group">
                <strong>Quantity:</strong>
                <h5>{{$product->quantity}}</h5>
            </div>
        </div>
    </div>

    <div style="float: left;">
        <a class="btn btn-primary" href="{{ route('product.index') }}"> < Back</a>
    </div>
@endsection