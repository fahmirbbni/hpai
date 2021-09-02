@extends('layouts.master')
@section('content')

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
                @endif

<div class="orders">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Daftar Transaksi</h4>
                </div>

                <div class="card-body-">
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Address</th>
                                    <th>Transaction Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($transaction as $item)
                                    
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->number}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->transaction_total}}</td>
                                    <td>
                                        @if($item->transaction_status == 'PENDING')
                                            <span class="badge badge-info">
                                            @elseif ($item->transaction_status == 'SUCCESS')
                                            <span class="badge badge-success">
                                            @elseif ($item->transaction_status == 'FAILED')
                                            <span class="badge badge-danger">
                                        @else
                                        <span>
                                        @endif
                                            {{$item->transaction_status}}
                                        </span>
                                        </td>
                                    <td>
                                        <form action="{{route('transaction.destroy', $item->id)}}" 
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <a href="{{route('transaction.show', $item->id)}}" class="btn btn-info btn-sm">
                                            <i>info</i>
                                            </a>
                                            <a href="{{route('transaction.edit', $item->id)}}" class="btn btn-primary btn-sm">
                                            <i>edit</i>
                                            </a>
                                            <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                @empty
                                <tr>
                                    <td colspan="6" class="text-center p-5">
                                        Data tidak tersedia
                                    </td>
                                </tr>

                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection