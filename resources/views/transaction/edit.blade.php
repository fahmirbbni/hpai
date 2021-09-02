@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Transaction</h2>
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


<form action="{{ route('transaction.update', $transaction->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row justify-content-md-center">
         <div class="col-5">
            <div class="form-group">
                <strong>ID:</strong>
                <input type="text" name="id" value="{{$transaction->id}}" class="form-control" placeholder="ID" readonly="">
            </div>

            <div class="form-group">
                <strong>Name:</strong>    
                <input type="text" name="name" class="form-control" value="{{$transaction->name}}">
            </div>

            <div class="form-group">
                <strong>Email:</strong>    
                <input type="text" name="email" class="form-control" value="{{$transaction->email}}">
            </div>

            <div class="form-group">
                <strong>Number:</strong>    
                <input type="text" name="number" class="form-control" value="{{$transaction->number}}">
            </div>

            <div class="form-group">
                <strong>Address:</strong>    
                <input type="text" name="address" class="form-control" value="{{$transaction->address}}">
            </div>

            <div class="form-group">
                <strong>Transaction total:</strong>    
                <input type="number" name="transaction_total" class="form-control" value="{{$transaction->transaction_total}}">
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <a class="btn btn-primary text-light" onclick="history.back(-1)">< Back</a>
        <button type="submit" class="btn btn-success">Submit</button>
        </div>

    </div>
</form>

    
@endsection