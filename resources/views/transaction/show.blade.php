@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Transaction</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>ID:<br></strong>
                <h5>{{ $transaction->id }}</h5>
            </div>
            
            <div class="form-group">
                <strong>Name:</strong><br>
                <h5>{{$transaction->name}}</h5>
            </div>

            <div class="form-group">
            <strong>Email:</strong>
            <h5>{{$transaction->email}}</h5>
            </div>
        </div>


        <div class="col">
            
            <div class="form-group">
                <strong>Number:</strong>
                <h5>{{$transaction->number}}</h5>
            </div>
            <div class="form-group">
                <strong>Address:</strong>
                <h5>{{$transaction->address}}</h5>
            </div>
            <div class="form-group">
                <strong>Total Transaction:</strong>
                <h5>{{$transaction->transaction_total}}</h5>
            </div>
            <div class="form-group">
                <strong>Status:</strong>
                <h5>{{$transaction->transaction_status}}</h5>
            </div>
        </div>
    </div>

    <div style="float: left;">
        <a class="btn btn-primary" href="{{ route('transaction.index') }}"> < Back</a>
    </div>
@endsection