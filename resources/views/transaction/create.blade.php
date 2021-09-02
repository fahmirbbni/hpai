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
<form action="{{route('transaction.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="row justify-content-md-center">

        <div class="col-5">

            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>

            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <strong>Number:</strong>
                <input type="text" name="number" class="form-control" placeholder="Phone Number">
            </div>

            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address" class="form-control" placeholder="Address">
            </div>
            
            <div class="form-group">
                <strong>Transaction Total:</strong>
                <input type="number" name="transaction_total" class="form-control" placeholder="Total">
            </div>

            <div class="form-group">
                <strong>Status:</strong>
                <select class="form-control" name="transaction_status">
                    <option>Success</option>
                    <option>Failed</option>
                </select>
            </div>
            <div style="float: right;" class="form-group">
                <a class="btn btn-primary" href="{{route('transaction.index')}}"> < Back</a>
                <button type="submit" class="btn btn-success text-light">Submit</button>
            </div>
        
        </div>

    </div>
</form>

@endsection