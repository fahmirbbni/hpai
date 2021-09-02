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
                    <h4 class="box-title">Daftar Barang</h4>
                </div>

                <div class="card-body-">
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($product as $item)
                                    
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->type}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>
                                        <form action="{{route('product.destroy', $item->id)}}" 
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <a href="{{route('product.show', $item->id)}}" class="btn btn-info btn-sm">
                                            <i>info</i>
                                            </a>
                                            <a href="{{route('product.edit', $item->id)}}" class="btn btn-primary btn-sm">
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