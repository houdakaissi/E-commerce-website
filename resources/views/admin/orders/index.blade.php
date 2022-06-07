@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
          @include('layouts.sidebar')
        </div>
        <div class="col-md-8">
        <a
                href="{{ route("products.create") }}"
                class="btn btn-primary my-2">
                Add new product
                    <i class="fa fa-plus"></i>
            </a>
            <a
                href="{{ route("admins.create") }}"
                class="btn btn-primary my-2">
                Add new Admin
                    <i class="fa fa-plus"></i>
            </a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Client</th>
                        <th>Produit</th>
                        <th>Qté</th>
                        <th>Prix</th>
                        <th>Total</th>
                        <th>Payé</th>
                        <th>Livrée</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->name}}</td>
                           
                            <td>{{ $order->product_name }}</td>
                            <td>{{ $order->qty }} DH</td>
                            <td>{{ $order->price }} DH</td>
                            <td>{{ $order->total }} DH</td>
                            <td>
                                @if($order->paid  )
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-times text-danger"></i>
                                @endif
                            </td>
                            <td>
                                @if($order->delivered )
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-times text-danger"></i>
                                @endif
                            </td>
                            <td class="d-flex flex-row justify-content-center align-items-center">
                                <form method="POST" action="{{ route("orders.update",$order->id) }}">
                                    @csrf
                                    @method("PUT")
                                    <button class="btn btn-sm btn-success">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </form>
                                <form id="{{ $order->id }}" method="POST" action="{{ route("orders.destroy",$order->id) }}">
                                    @csrf
                                    @method("DELETE")
                                    <button
                                    onclick="event.preventDefault();
                                       if(confirm('Do you really want to delete the order {{ $order->id  }} ?'))
                                        document.getElementById({{ $order->id }}).submit();
                                    "
                                    class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                 
</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
            <div class="justify-content-center d-flex">
                {{ $orders }}
            </div>
        </div>
    </div>
</div>
@endsection